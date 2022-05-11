<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController {
    #[Route('/hello', name: 'hello_index', methods: 'GET')]
    public function index(): Response
    {
        return new Response('Hello World!');
    }
}