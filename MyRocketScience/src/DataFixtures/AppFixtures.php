<?php

namespace App\DataFixtures;

use App\Entity\Agency;
use App\Entity\Starship;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $this->loadAgencies($manager);
        $this->loadShips($manager);


    }
    public function loadAgencies(ObjectManager $manager): void {
        foreach ($this->getAgencyData() as [$name, $location]) {
            $agency = new Agency();
            $agency->setName($name);
            $agency->setLocation($location);
            $manager->persist($agency);
        }
        $manager->flush();

    }

    private function getAgencyData(){
        yield ["Kerbal Space Agency", "Kerbin"];
        yield ["European Space Agency", "Paris, France"];
        yield ["The Galactical Empire", "Coruscant"];

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
    private function getStarShipData(){
        yield ["StarCom1","The first interstellar communication system for kerbalkind", "Kerbal Space Agency"];
        yield ["Ariane 6", "Not yet available","European Space Agency"];
        yield ["Death Star","Death Star Mk.321 This time it will work !","The Galactical Empire"];
        yield ["Star Dreadnought Class","One of the biggest starship of the imperial Army, flee you fools ! IT'S A TRAP !","The Galactical Empire"];
    }
}
