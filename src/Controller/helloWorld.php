<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class helloWorld extends AbstractController
{
    #[Route('/hello', name: 'home', methods: ['GET', 'HEAD'])]
    public function index(): Response
    {
        return  $this->render('home/helloWorld.html.twig');
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
        // dump($authors);
        // return new Response(
        //    json_encode($authors)
        // );
        return $this->json($authors);
    }
}