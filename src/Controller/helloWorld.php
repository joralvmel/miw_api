<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class helloWorld
{
    #[Route('/hello', name: 'home', methods: ['GET', 'HEAD'])]
    public function index(): Response
    {
        return new Response(
            'Hello World!'
        );
    }

}