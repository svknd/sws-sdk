<?php
declare(strict_types=1);

namespace Savikindo\Sws;


class OAuth {
    
    private $data = [];
    private $token = null;

    public function __construct(array $data=null) {
        if ($data)
            $this->data = $data;
    }

    public function autorize() {
        $this->token = 'ok';
    }

    public function getToken(): string {
        return $this->token;
    }

}
