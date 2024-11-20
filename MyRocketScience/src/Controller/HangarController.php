<?php

namespace App\Controller;

use App\Entity\Hangar;
use App\Entity\Member;
use App\Entity\Starship;
use App\Form\HangarType;
use App\Repository\HangarRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/hangar')]
final class HangarController extends AbstractController
{
    #[Route(name: 'app_hangar_index', methods: ['GET'])]
    public function index(HangarRepository $hangarRepository): Response
    {
        return $this->render('hangar/index.html.twig', [
            'hangars' => $hangarRepository->findAll(),
        ]);
    }

    #[Route('/new/{id}', name: 'app_hangar_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,Member $member): Response
    {
        $hangar = new Hangar();
        $hangar->setMember($member);
        $form = $this->createForm(HangarType::class, $hangar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($hangar);
            $entityManager->flush();

            return $this->redirectToRoute('app_member_show', ['id'=>$member->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('hangar/new.html.twig', [
            'hangar' => $hangar,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_hangar_show', methods: ['GET'])]
    public function show(Hangar $hangar): Response
    {
        return $this->render('hangar/show.html.twig', [
            'hangar' => $hangar,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_hangar_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Hangar $hangar, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(HangarType::class, $hangar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_hangar_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('hangar/edit.html.twig', [
            'hangar' => $hangar,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_hangar_delete', methods: ['POST'])]
    public function delete(Request $request, Hangar $hangar, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $hangar->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($hangar);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_hangar_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route(path: '/{hangarId}/starship/{starshipId}', name: 'app_hangar_starship_show', requirements: ['hangarId' => '\d+','starshipId' => '\d+'], methods: ['GET'])]
    public function starshipShow(
        ManagerRegistry $doctrine,
        #[MapEntity(id : 'hangarId')] Hangar $hangar,
        #[MapEntity(id : 'starshipId')] Starship $starship,
        ) : Response{
        dump($starship);
        dump($hangar);
        if ( ! $hangar->getStarships()->contains($starship)){
            throw $this->createNotFoundException("Could not find such starship in this hangar");
        }
        if(! $hangar->isPublished()) {
            throw $this->createAccessDeniedException("You cannot access the requested ressource!");
        }
        return $this->render('hangar/starshipShow.html.twig',
                ['starship'=>$starship,
                 'hangar'=>$hangar]);
    }
}