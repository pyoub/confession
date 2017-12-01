<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Entity\Sms;
use Registration;
use Nexmo;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use libphonenumber\PhoneNumberType;


class DefaultController extends Controller
{


    public function SendSmsAction(Request $request)
    {
        dump($this->get('security.authorization_checker'));
        if ($this->get('security.authorization_checker')->isGranted('ROLE_PREMIEUM')) {
            $form = $this->createFormBuilder(array('attr' => array('class' => 'container')))
                ->add('phone',\Misd\PhoneNumberBundle\Form\Type\PhoneNumberType::class)
                ->add('message', TextareaType::class)
                ->add('send', SubmitType::class, array('label' => 'send'))
                ->getForm();

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                // $form->getData() holds the submitted values
                // but, the original `$task` variable has also been updated
                $task = $form->getData();
                $client = new Nexmo\Client(new Nexmo\Client\Credentials\Basic('fc645d6b', '70431a4a18e89bb5'));


                $message = $client->message()->send([
                    'to' => $form->get('phone')->getData(),
                    'from' => 'NEXMO',
                    'text' => (string)$form->get('message')->getData(),
                    'callback' => 'http://webhook.site/d479dfee-f785-48fb-9c7e-537b687ce9e2'
                ]);

                dump($message->getStatus());
                if ($message->getStatus() == 0) {
                    $sms = new Sms();
                    $sms->setSender($this->getUser());
                    $sms->setPhone((string)$form->get('phone')->getData());
                    $sms->setMessage((string)$form->get('message')->getData());
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($sms);
                    $em->flush();
                    $user = $this->getUser  ();
                    $userManager = $this->get('fos_user.user_manager');
                    $user->removeRole('ROLE_PREMIEUM');
                    $userManager->updateUser($user);
                    return $this->redirectToRoute('homepage');
                }

                /*$client->messages->create(
                    '+'.(string)$form->get('phone')->getData(),
                    array(
                        'from' => '+12536666077',
                        'body' => (string)$form->get('message')->getData(),
                        'statusCallback' => "http://webhook.site/d479dfee-f785-48fb-9c7e-537b687ce9e2"
                    )
                );*/


            }

            // replace this example code with whatever you need
            return $this->render('default/index.html.twig', array(
                'form' => $form->createView()
            ));
        }
        else
            return $this->redirectToRoute('homepage');
    }
}
