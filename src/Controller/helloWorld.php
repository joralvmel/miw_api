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

    #[Route
    (
        path:'/api/v1/authors',
        name: 'authors',
        methods: ['GET', 'HEAD']
    )]
    public function getAuthors(): Response
    {
        $authors = [
            [
                'name' => 'John Doe',
                'webpage' => 'https://johndoe.com'
            ],
            [
                'name' => 'Jane Doe',
                'webpage' => 'https://janedoe.com'
            ]
        ];
        return new Response(
            json_encode($authors)
        );
    }
}