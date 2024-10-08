<?php

namespace App\Controller;

use App\Entity\Starship;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\Persistence\ManagerRegistry;


class StarshipController extends AbstractController
{
    #[Route(path: '/starship/{id}', name: 'starship_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(ManagerRegistry $doctrine, $id){
        $starshipRepo = $doctrine->getRepository(Starship::class);
        $starship = $starshipRepo->find($id);
        dump($starship); 
        if (!$starship) {
            throw $this->createNotFoundException('This Starship does not exist');
        }
       
        return $this->render('starship/show.html.twig',
            ['Starship'=>$starship]);        
    }
}

