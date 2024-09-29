<?php

namespace App\Controller;

use App\Repository\AgencyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AgencyController extends AbstractController
{
    #[Route('/agency', name: 'app_agency')]
    public function index(): Response
    {
        return $this->render('agency/index.html.twig', [
            'controller_name' => 'AgencyController',
        ]);
    }
    #[Route('/agency/list', name: 'app_agency_list')]
    public function listAgencies(AgencyRepository $agencyRepository): Response
    {
        $html_page = '<!DOCTYPE html>
        <html><head>
        <meta charset="utf-8">
        <title>todos list ! </title>
        </head><body>
        <h1>Agencies list <h1><hr>
        <p>here are all the agencies</p>
        <ul>';
        $agencies = $agencyRepository->findAll();
        foreach ($agencies as $agency) {
            $html_page .= '<h6>' . $agency->getName() . '</h6>';
            foreach ($agency->getStarships() as $starship) {
                $html_page .= '<li>' . $starship->getName() . '</li>';
            }
        }
        $html_page .= '</ul>';
        $html_page .= '</body></html>';
        return new Response(
            $html_page,
            Response::HTTP_OK,
            array('Content-Type' => 'text/html')
        );



    }
}
