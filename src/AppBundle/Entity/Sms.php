<?php
/**
 * Created by PhpStorm.
 * User: Ayoub
 * Date: 22/10/2017
 * Time: 19:56
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Sms
{
    /**
     * @ORM\Id
     * @ORM\Column(type="phone_number")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return \FOS\MessageBundle\Model\ParticipantInterface
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param \FOS\MessageBundle\Model\ParticipantInterface $sender
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }
    /**
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $sender;
    /**
     * @ORM\Column(type="string")
     * @ORM\Column(nullable=false)
     */
    private $phone;
    /**
     * @ORM\Column(type="text")
     */
    private $message;

}