<?php

namespace Tickit\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Tickit\UserBundle\Entity\User;
use DateTime;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Loads default users into the application database
     *
     * @param \Doctrine\Common\Persistence\ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $admin1 = new User();
        $admin1->setUsername('james');
        $admin1->setPlainPassword('password');
        $admin1->setSuperAdmin(true);
        $admin1->setEmail('james.t.halsall@googlemail.com');
        $admin1->setEnabled(true);
        $admin1->setLastActivity(new DateTime());
        $admin1->addRole('ROLE_SUPER_ADMIN');

        $manager->persist($admin1);

        $this->addReference('admin-james', $admin1);

        //add other users for development environment here

        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}
 
