<?php

namespace Tickit\UserBundle\Listener;

use Symfony\Component\Security\Core\SecurityContext;
use Doctrine\Bundle\DoctrineBundle\Registry as Doctrine;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use DateTime;
use Tickit\UserBundle\Entity\User;

class Activity
{
    /* @var Symfony\Component\Security\Core\SecurityContext */
    protected $context;

    /* @var Doctrine\Common\Persistence\ObjectManager */
    protected $manager;

    /**
     * Class constructor
     *
     * @param \Symfony\Component\Security\Core\SecurityContext  $context
     * @param Doctrine\Bundle\DoctrineBundle\Registry           $doctrine
     */
    public function __construct(SecurityContext $context, Doctrine $doctrine)
    {
        $this->context = $context;
        $this->manager = $doctrine->getManager();
    }

    /**
     * Updates the user's last activity time on every request
     *
     * @param \Symfony\Component\HttpKernel\Event\FilterControllerEvent $event
     * @return void
     */
    public function onCoreController(FilterControllerEvent $event)
    {
        $token = $this->context->getToken();
        if($token instanceof TokenInterface) {
            $user = $token->getUser();
            if($user instanceof User) {
                $user->setLastActivity(new DateTime());
                $this->manager->persist($user);
                $this->manager->flush($user);
            }
        }
    }


}
