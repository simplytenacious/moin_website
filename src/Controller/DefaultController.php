<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController {
    public function main () {
        return new Response('Hello World!');
    }
}