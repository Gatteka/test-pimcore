<?php

namespace Test\Services;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mime\RawMessage;
use Symfony\Component\Mailer\Envelope;
use Symfony\Component\Mailer\Mailer;
use Psr\Log\LoggerInterface;

class CustomMailer implements MailerInterface
{
    public function __construct(
        private Mailer $inner,
        private LoggerInterface $logger
    ) {
    }

    /**
     * @param \Symfony\Component\Mime\RawMessage $message
     * @param \Symfony\Component\Mailer\Envelope|null $envelope
     * @return void
     */
    public function send(RawMessage $message, Envelope $envelope = null): void
    {

        try {
            //code...
        } catch (\Throwable $e) {
            $this->logger->error("some error info");
        }


        // Original method decoration
        $this->inner->send($message, $envelope);
    }
}
