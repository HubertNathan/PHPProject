<?php

namespace App\Controller;

use App\Entity\Agency;
use App\Entity\Starship;
use App\Form\StarshipType;
use App\Repository\StarshipRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/starship')]
final class StarshipController extends AbstractController
{
    #[Route(name: 'app_starship_index', methods: ['GET'])]
    public function index(StarshipRepository $starshipRepository): Response
    {
        return $this->render('starship/index.html.twig', [
            'starships' => $starshipRepository->findAll(),
        ]);
    }

    #[Route('/new/{id}', name: 'app_starship_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, Agency $agency): Response
    {
        $starship = new Starship();
        $starship->setAgency($agency);
        $form = $this->createForm(StarshipType::class, $starship);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($starship);
            $entityManager->flush();

            return $this->redirectToRoute('app_agency_show', ['id'=>$agency->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('starship/new.html.twig', [
            'starship' => $starship,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_starship_show', methods: ['GET'])]
    public function show(Starship $starship): Response
    {
        return $this->render('starship/show.html.twig', [
            'starship' => $starship,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_starship_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Starship $starship, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(StarshipType::class, $starship);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_agency_show', ['id'=>$starship->getAgency()->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('starship/edit.html.twig', [
            'starship' => $starship,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_starship_delete', methods: ['POST'])]
    public function delete(Request $request, Starship $starship, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$starship->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($starship);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_starship_show', [], Response::HTTP_SEE_OTHER);
    }
    #[Route(path: '/{id}/show', name: 'app_starship_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function starshipShow(ManagerRegistry $doctrine, $id){
        $starshipRepo = $doctrine->getRepository(Starship::class);
        $starship = $starshipRepo->find($id);
        dump($starship);
        if (!$starship) {
            throw $this->createNotFoundException('This Starship does not exist');
        }

        return $this->render('starship/show.html.twig',
            ['starship'=>$starship]);
    }
}
