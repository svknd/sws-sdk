<?php
declare(strict_types=1);

namespace In2it\HelloWorld\Test;

use PHPUnit\Framework\TestCase;
use Savikindo\Sws\OAuth;


class HelloWorldTest extends TestCase {

    public function testGetToken()
    {
        $data = [
            'email' => 'me@tukangremot.com'
        ];
        $auth = new OAuth($data);
        $auth->autorize();
        $this->assertEquals($auth->getToken(), 'ok');
    }
}