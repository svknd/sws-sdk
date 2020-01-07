<?php
declare(strict_types=1);

namespace Savikindo\Sws;

use GuzzleHttp\Client;


class OAuth {
    
    private $data = [];

    public function __construct() {
        //
    }

    public function autorize(array $payload=null) {
        $client = new Client([
            'headers' => ['Content-Type' => 'application/json']
        ]);
        $response = $client->post(
            'http://sws.savikindo.local/api/v1/oauth/autorize', [
                'body' => json_encode($payload)
            ]
        );
        $result = json_decode(
            $response->getBody()->getContents(), true);
        $this->data = $result['data'];
    }

    public function getAccessToken(): string {
        return $this->data ? $this->data['access_token'] : null;
    }

    public function getRefreshToken(): string {
        return $this->data ? $this->data['refresh_token'] : null;
    }

    public function getProfile(): array {
        return $this->data ? $this->data['profile'] : [];
    }

}
