<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SendMailTest extends WebTestCase
{
    public function testSendMail()
    {
        $client = static::createClient();

        $client->request('POST', '/mail/send', ['from' => 'test@test.test', 'to' => 'test@test.test', 'content' => 'Test']);

        $response = $client->getResponse();
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('Success', $response->getContent());
    }
}