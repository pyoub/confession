<?php
namespace AppBundle\Server;



use FOS\OAuthServerBundle\FOSOAuthServerBundle;
use Ratchet\ConnectionInterface;
use Ratchet\MessageComponentInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use AppBundle\Entity\User;

class Notification implements MessageComponentInterface {
    protected $connections = array();

    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * A new websocket connection
     *
     * @param ConnectionInterface $conn
     */
    public function onOpen(ConnectionInterface $conn)
    {
        $this->connections[] = $conn;
        $conn->send('..:: Hello from the Notification Center ::..');
        echo "New connection \n";
    }

    /**
     * Handle message sending
     *
     * @param ConnectionInterface $from
     * @param string $msg
     */
    public function onMessage(ConnectionInterface $from, $msg)
    {
        $messageData = json_decode(trim($msg));
        echo $messageData;
        if(isset($messageData->userData)){
            //1st app message with connected user
            $token_user = $messageData->userData;

            //a user auth, else, app sending message auth
            echo "Check user credentials\n .$messageData";
            //get credentials
            $tokenManager = $this->container->get('fos_oauth_server.client_manager.default');
            $accessToken = $tokenManager->findTokenByToken(
                $this->container->get('security.context')->getToken()->getToken()
            );
            $user = $accessToken->getClient();

            //getUser by email
            if(!$user = $this->getUserByEmail($user->get('username'))){
                $from->close();
            }
            echo "User found : ".$user->getFirstname() . "\n";
            $index_connection = $user->get('username');

            $all_connections = $this->connections;
            foreach($all_connections as $key => $conn){
                if($conn === $from){
                    $this->connections[$index_connection] = $from;
                    $from->send('..:: Connected as '.$index_connection.'  ::..');
                    unset($this->connections[$key]);
                    break;
                } else {
                    continue;
                }

            }
        } else {
            //error
            $from->send("You're not able to do that!");
        }

    }

    /**
     * A connection is closed
     * @param ConnectionInterface $conn
     */
    public function onClose(ConnectionInterface $conn)
    {
        foreach($this->connections as $key => $conn_element){
            if($conn === $conn_element){
                unset($this->connections[$key]);
                break;
            }
        }
    }

    /**
     * Error handling
     *
     * @param ConnectionInterface $conn
     * @param \Exception $e
     */
    public function onError(ConnectionInterface $conn, \Exception $e)
    {
        $conn->send("Error : " . $e->getMessage());
        $conn->close();
    }


    /**
     * Get user from email credential
     *
     * @param $email
     * @return false|User
     */
    protected function getUserByEmail($email)
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return false;
        }

        $userManager = $this->get('fos_user.user_manager.default');
        $user = $userManager->findUserByEmail($email);
        if($user && $user instanceof User){
            return $user;
        } else {
            return false;
        }

    }
}