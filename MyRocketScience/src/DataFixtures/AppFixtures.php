<?php

namespace App\DataFixtures;

use App\Entity\Agency;
use App\Entity\Starship;
use App\Entity\Member;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }
    private const KSA = "Kerbal Space Agency";
    private const ESA = "European Space Agency";
    private const GalacticEmpire = "The Galactic Empire";

    public function load(ObjectManager $manager): void
    {
        $this->loadAgencies($manager);
        foreach ($this->getMembersData() as [$email, $plainPassword, $agencyID]) {
            $user = new Member();
            $password = $this->hasher->hashPassword($user, $plainPassword);
            $user->setEmail($email);
            $user->setPassword($password);

            $agencyRepo =  $manager->getRepository(Agency::class);
            $agency = $agencyRepo->findOneBy(['name' => $agencyID]);
            $user->setAgency($agency);

            // $roles = array();
            // $roles[] = $role;
            // $user->setRoles($roles);

            $manager->persist($user);
        }
        $this->loadShips($manager);
    }

    public function loadAgencies(ObjectManager $manager): void
    {
        foreach ($this->getAgencyData() as [$name, $location]) {
            $agency = new Agency();
            $agency->setName($name);
            $agency->setLocation($location);
            $manager->persist($agency);
        }
        $manager->flush();

    }

    private function getAgencyData()
    {
        yield ["Kerbal Space Agency", "Kerbin"];
        yield ["European Space Agency", "Paris, France"];
        yield ["The Galactic Empire", "Coruscant"];

    }

    public function loadShips(ObjectManager $manager): void
    {
        foreach ($this->getStarShipData() as [$name, $description, $agency]) {
            $ship = new Starship();
            $ship->setName($name);
            $ship->setDescription($description);
            $agencyRepository = $manager->getRepository(Agency::class);
            $agency = $agencyRepository->findOneBy(['name' => $agency]);
            $agency->addStarship($ship);
            $manager->persist($ship);
        }
        $manager->flush();
    }

    private function getStarShipData(): \Generator
    {
        yield ["StarCom1", "The first interstellar communication system for kerbalkind", $this::KSA];
        yield ["Ariane 6", "Not yet available", $this::ESA];
        yield ["Death Star", "Death Star Mk.321 This time it will work !", $this::GalacticEmpire];
        yield ["Star Dreadnought Class", "One of the biggest starship of the imperial Army, flee you fools ! IT'S A TRAP !", $this::GalacticEmpire];
    }

    /**
     * Generates initialization data for members :
     *  [email, plain text password]
     */
    private function getMembersData(): \Generator
    {
        yield ['DarthVader@localhost','123456',$this::GalacticEmpire];
        yield ['Jebedhia.Kerbinh@localhost','123456', $this::KSA];
        yield ['Josef.Aschbacher@localhost','123456', $this::ESA];
    }
}

