<?php
/**
 * Created by PhpStorm.
 * User: vsilvestre
 * Date: 23/03/19
 * Time: 12:18
 */

namespace App\MessageHandler;


use App\Message\Email;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class EmailHandler implements MessageHandlerInterface
{
    private $mailer;

    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function __invoke(Email $message)
    {
        $mail = (new \Swift_Message('Hello Email'))
            ->setFrom($message->getFrom())
            ->setTo($message->getTo())
            ->setBody($message->getContent())
        ;

        $this->mailer->send($mail);
    }
}
