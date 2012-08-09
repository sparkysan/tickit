<?php

namespace Tickit\UserBundle\Controller;

use FOS\UserBundle\Controller\SecurityController as BaseController;

class SecurityController extends BaseController
{
    /**
     * Login action that performs user login. Here we can add any custom logic that needs to take place when
     * a user performs login to the system
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function loginAction()
    {
        //add our own logic here
        return parent::loginAction();
    }

}
