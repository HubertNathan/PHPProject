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
    private const DEATH_STAR_II = "Death Star II";
    private const STAR_DREADNOUGHT = "Star Dreadnought Class";
    private const ARCTIC_WEATHER_SATELLITE = "Arctic Weather Satellite";
    private const HERA = "Hera";

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
        foreach ($this->getMembersData() as [$email,$username, $plainPassword, $agencyName]) {
            $user = new Member();
            $password = $this->hasher->hashPassword($user, $plainPassword);
            $user->setEmail($email);
            $user->setPassword($password);
            $user->setUsername($username);

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
            $ship->setImageName($name.'.png');
            print $ship->getImageName();

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
        foreach ($this->getHangarData() as [$name, $memberEmail, $published, $starshipNames]) {
            $hangar = new Hangar();
            $hangar->setName($name);
            $hangar->setPublished($published);

            $owner = $this->getReference($memberEmail);
            $hangar->setMember($owner);

            foreach ($starshipNames as $starshipName) {
                $starship = $this->getReference($starshipName);
                $hangar->addStarship($starship);
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
        yield [self::DEATH_STAR_II, "Bigger Faster Stronger", self::GalacticEmpire];
        yield [self::STAR_DREADNOUGHT, "One of the biggest starships of the imperial army. Flee you fools! IT'S A TRAP!", self::GalacticEmpire];
        yield [self::ARCTIC_WEATHER_SATELLITE,"The next mission to track earth Climate",self::ESA];
        yield [self::HERA,"Let's take an asteroïd to earth",self::ESA];
    }

    private function getMembersData(): \Generator
    {
        yield ['DarthVader@localhost','SithFleetLord', '123456', self::GalacticEmpire];
        yield ['Jebedhia.Kerman@localhost','Jeb', '123456', self::KSA];
        yield ['Josef.Aschbacher@localhost','CosmicAsch', '123456', self::ESA];
    }

    private function getHangarData(): \Generator
    {
        yield ["Junkyard and Spacecraft Parts Co BAV", 'Jebedhia.Kerman@localhost', true, [self::STARCOM_1]];
        yield ["My Death Stars", 'DarthVader@localhost', true, [self::DEATH_STAR,self::DEATH_STAR_II]];
    }
}