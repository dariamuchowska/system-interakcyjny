<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/hello')]
class HelloController extends AbstractController
{
    /**
     * http://localhost:8000/hello?name=John
     * http://localhost:8000/hello/John
     */
    #[Route(
        '/{name}',
        name: 'hello_index',
        requirements: ['name' => '[a-zA-Z0-9]+'],
        defaults: ['name' => 'World'],
        methods: 'GET'
    )]
    public function index(string $name): Response
    {
        return $this->render(
            'hello/index.html.twig',
            ['name' => $name]
        );
    }
}
