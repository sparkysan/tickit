<?php

namespace Tickit\TeamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

//bind forms here

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class TeamController extends Controller
{
    /**
     * @Template("TickitTeamBundle:Team:index.html.twig")
     */
    public function indexAction()
    {
        
    }

}