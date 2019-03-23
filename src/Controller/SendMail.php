<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: vsilvestre
 * Date: 23/03/19
 * Time: 11:59
 */

namespace App\Controller;

use App\Message\Email;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;

/**
 * Class SendMail
 * @package App\Controller
 * @Route("/mail/send", methods={"POST"})
 */
class SendMail
{
    private $messageBus;

    public function __construct(MessageBusInterface $messageBus)
    {
        $this->messageBus = $messageBus;
    }

    public function __invoke(Request $request)
    {
        $enveloppe = new Email($request->get('to'),$request->get('from'),$request->get('content'));
        $this->messageBus->dispatch($enveloppe);
        $this->messageBus->dispatch($enveloppe);
        $this->messageBus->dispatch($enveloppe);
        $this->messageBus->dispatch($enveloppe);
        $this->messageBus->dispatch($enveloppe);
        $this->messageBus->dispatch($enveloppe);
        $this->messageBus->dispatch($enveloppe);
        $this->messageBus->dispatch($enveloppe);
        return new Response('Success');
    }
}
