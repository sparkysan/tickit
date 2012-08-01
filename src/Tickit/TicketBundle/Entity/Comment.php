<?php

namespace Tickit\TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @ORM\Table(name="comments")
 */
class Comment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Ticket", inversedBy="comments")
     * @ORM\JoinColumn(name="ticket_id", referencedColumnName="id")
     */
    protected $ticket;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    protected $message;

}
