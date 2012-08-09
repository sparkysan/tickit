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
     * Lists all teams in the system, optionally filters using request parameters
     *
     * @return array
     * @Template("TickitTeamBundle:Team:index.html.twig")
     */
    public function indexAction()
    {
        $options = array(); //fetch filters from request

        $teamsQ = $this->getDoctrine()
                       ->getManager()
                       ->getRepository('TickitTeamBundle:Team')
                       ->getFiltered($options);

        $teams = $teamsQ->getQuery()->execute();

        return array('teams' => $teams);
    }

}