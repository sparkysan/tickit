<?php

namespace Tickit\PreferenceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Tickit\PreferenceBundle\Entity\Preference;
use Tickit\PreferenceBundle\Entity;

class LoadPreferenceData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        //load default preferences here
    }

    public function getOrder()
    {
        return 2;
    }
}
 
