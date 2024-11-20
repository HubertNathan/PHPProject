<?php

namespace App\Controller;

use App\Entity\Member;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
#[Route('/member')]
class MemberController extends AbstractController
{
    #[Route('', name: 'app_member_index', methods: ['GET'])]
    public function index(ManagerRegistry $doctrine): Response
    {
        $memberRepo = $doctrine->getRepository(Member::class);
        return $this->render('member/index.html.twig', [
            'members' => $memberRepo->findAll(),
        ]);
    }
    #[Route(path: '/{id}', name: 'app_member_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(ManagerRegistry $doctrine,$id): Response
    {
        $memberRepo = $doctrine->getRepository(Member::class);
        return $this->render('member/show.html.twig', [
            'member' => $memberRepo->findOneBy(['id' => $id]),
        ]);
    }
}
