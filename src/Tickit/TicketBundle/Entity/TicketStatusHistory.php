<?php

namespace Tickit\TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @ORM\Table(name="ticket_status_history")
 */
class TicketStatusHistory
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Ticket")
     * @ORM\JoinColumn(name="ticket_id", referencedColumnName="id")
     */
    protected $ticket;

    /**
     * @ORM\ManyToOne(targetEntity="TicketStatus")
     * @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     */
    protected $status;

    /**
     * @ORM\ManyToOne(targetEntity="Tickit\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="changed_by_id", referencedColumnName="id")
     */
    protected $changed_by;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    protected $changed_at;

    /**
     * Gets the ID for this history entry
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the user who updated the ticket history
     *
     * @param \Tickit\UserBundle\Entity\User $changed_by
     */
    public function setChangedBy(\Tickit\UserBundle\Entity\User $changed_by)
    {
        $this->changed_by = $changed_by;
    }

    /**
     * Gets an instance of the User who changed the status of the ticket
     *
     * @return \Tickit\UserBundle\Entity\User
     */
    public function getChangedBy()
    {
        return $this->changed_by;
    }

    /**
     * Gets the time that the history was changed as an instance of DateTime
     *
     * @return \DateTime
     */
    public function getChangedAt()
    {
        return $this->changed_at;
    }

    /**
     * Sets the ticket status object
     *
     * @param TicketStatus $status
     */
    public function setStatus(TicketStatus $status)
    {
        $this->status = $status;
    }

    /**
     * Gets the ticket status object
     *
     * @return TicketStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets the ticket object
     *
     * @param Ticket $ticket
     */
    public function setTicket($ticket)
    {
        $this->ticket = $ticket;
    }

    /**
     * Gets the associated ticket object
     *
     * @return Ticket
     */
    public function getTicket()
    {
        return $this->ticket;
    }
}