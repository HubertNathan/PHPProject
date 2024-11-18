<?php

namespace App\DataFixtures;

use App\Entity\Agency;
use App\Entity\Starship;
use App\Entity\Member;
use App\Entity\Hangar;
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

    // Starship name constants
    private const STARCOM_1 = "StarCom1";
    private const ARIANE_6 = "Ariane 6";
    private const DEATH_STAR = "Death Star";
    private const STAR_DREADNOUGHT = "Star Dreadnought Class";

    public function load(ObjectManager $manager): void
    {
        $this->loadAgencies($manager);
        $this->loadMembers($manager);
        $this->loadShips($manager);
        $this->loadHangars($manager);
    }

    public function loadAgencies(ObjectManager $manager): void
    {
        foreach ($this->getAgencyData() as [$name, $location]) {
            $agency = new Agency();
            $agency->setName($name);
            $agency->setLocation($location);

            // Add a reference for later use
            $this->addReference($name, $agency);

            $manager->persist($agency);
        }
        $manager->flush();
    }

    public function loadMembers(ObjectManager $manager): void
    {
        foreach ($this->getMembersData() as [$email, $plainPassword, $agencyName]) {
            $user = new Member();
            $password = $this->hasher->hashPassword($user, $plainPassword);
            $user->setEmail($email);
            $user->setPassword($password);

            // Retrieve the agency reference
            $agency = $this->getReference($agencyName);
            $user->setAgency($agency);

            // Add a reference for the member
            $this->addReference($email, $user);

            $manager->persist($user);
        }
        $manager->flush();
    }

    public function loadShips(ObjectManager $manager): void
    {
        foreach ($this->getStarShipData() as [$name, $description, $agencyName]) {
            $ship = new Starship();
            $ship->setName($name);
            $ship->setDescription($description);

            // Retrieve the agency reference
            $agency = $this->getReference($agencyName);
            $agency->addStarship($ship);

            // Add a reference for each starship
            $this->addReference($name, $ship);

            $manager->persist($ship);
        }
        $manager->flush();
    }

    public function loadHangars(ObjectManager $manager): void
    {
        foreach ($this->getHangarData() as [$name, $ownerEmail, $starshipNames]) {
            $hangar = new Hangar();
            $hangar->setName($name);

            // Retrieve the owner reference
            $owner = $this->getReference($ownerEmail);
            $hangar->setMember($owner);

            // Add starships to the hangar
            foreach ($starshipNames as $starshipName) {
                $starship = $this->getReference($starshipName);
                $hangar->addStarship($starship); // Assuming the Hangar entity has an `addStarship` method
            }

            $manager->persist($hangar);
        }
        $manager->flush();
    }

    private function getAgencyData(): \Generator
    {
        yield ["Kerbal Space Agency", "Kerbin"];
        yield ["European Space Agency", "Paris, France"];
        yield ["The Galactic Empire", "Coruscant"];
    }

    private function getStarShipData(): \Generator
    {
        yield [self::STARCOM_1, "The first interstellar communication system for kerbalkind", self::KSA];
        yield [self::ARIANE_6, "Not yet available", self::ESA];
        yield [self::DEATH_STAR, "Death Star Mk.321 This time it will work!", self::GalacticEmpire];
        yield [self::STAR_DREADNOUGHT, "One of the biggest starships of the imperial army. Flee you fools! IT'S A TRAP!", self::GalacticEmpire];
    }

    private function getMembersData(): \Generator
    {
        yield ['DarthVader@localhost', '123456', self::GalacticEmpire];
        yield ['Jebedhia.Kerman@localhost', '123456', self::KSA];
        yield ['Josef.Aschbacher@localhost', '123456', self::ESA];
    }

    private function getHangarData(): \Generator
    {
        yield ["Junkyard and Spacecraft Parts Co BAV", 'Jebedhia.Kerman@localhost', [self::STARCOM_1]];
    }
}