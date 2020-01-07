<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Savikindo\Sws\OAuth;


class OAuthTest extends TestCase {

    public function testGetAccessToken()
    {
        $payload = [
            'client_id' => '34153245-da7a-45f4-8b16-2993b3f5b817',
            'email' => 'me@tukangremot.com',
            'password' => 'savikindo'
        ];
        $auth = new OAuth();
        $auth->autorize($payload);
        $this->assertNotNull($auth->getAccessToken());
        $this->assertNotNull($auth->getRefreshToken());
        $this->assertArrayHasKey('id', $auth->getProfile());
    }
}