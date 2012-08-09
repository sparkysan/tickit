<?php

namespace Tickit\TeamBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Tickit\TeamBundle\Entity\Team;

class LoadTeamData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $team = new Team();
        $team->setName('Test Development Team');
    }

    public function getOrder()
    {
        return 2;
    }

}
