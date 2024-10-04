<?php

namespace App\Controller;

use App\Entity\Agency;
use App\Repository\AgencyRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AgencyController extends AbstractController
{
    #[Route('/agency', name: 'agency_index')]
    public function index(ManagerRegistry $manager): Response
    {
        $agencyRepository = $manager->getRepository(Agency::class);
        return $this->render('agency/index.html.twig', [
            'agencyRepo' => $agencyRepository->findAll(),
        ]);
    }
    //#[Route('/agency/list', name: ' agency_list')]
    // public function listAgencies(AgencyRepository $agencyRepository): Response
    // {
    //     $html_page = '<!DOCTYPE html>
    //     <html><head>
    //     <meta charset="utf-8">
    //     <title>todos list ! </title>
    //     </head><body>
    //     <h1>Agencies list <h1><hr>
    //     <p>here are all the agencies</p>
    //     <ul>';
    //     $agencies = $agencyRepository->findAll();
    //     foreach ($agencies as $agency) {
    //         $html_page .= '<h6>' . $agency->getName() . '</h6>';
    //         foreach ($agency->getStarships() as $starship) {
    //             $html_page .= '<li>' . $starship->getName() . '</li>';
    //         }
    //     }
    //     $html_page .= '</ul>';
    //     $html_page .= '</body></html>';
    //     return new Response(
    //         $html_page,
    //         Response::HTTP_OK,
    //         array('Content-Type' => 'text/html')
    //     );
    //}
    #[Route(path: '/agency/{id}', name: 'agency_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(ManagerRegistry $doctrine, $id){
        $agencyRepo = $doctrine->getRepository(Agency::class);
        $agency = $agencyRepo->find($id);
        dump($agency); 
        if (!$agency) {
            throw $this->createNotFoundException('This Agency does not exist');
        }
       
        return $this->render('agency/show.html.twig',
            ['Agency'=>$agency]);        
    }
}
