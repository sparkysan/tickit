<?php

namespace Tickit\TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Tickit\UserBundle\Entity\User;

/**
 * @ORM\Entity
 * @ORM\Table(name="tickets")
 */
class Ticket
{

    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $title;

    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="ticket")
     */
    protected $comments;

    /**
     * @ORM\OneToMany(targetEntity="TicketAttachment", mappedBy="ticket")
     */
    protected $attachments;

    /**
     * @ORM\OneToMany(targetEntity="TicketUserSubscription", mappedBy="user")
     */
    protected $ticket_subscriptions;

//todo: add this in when project entity is created
//    protected $project;

    /**
     * @ORM\ManyToOne(targetEntity="Tickit\TicketBundle\Entity\TicketStatus")
     * @ORM\JoinColumn(name="ticket_status_id", referencedColumnName="id")
     */
    protected $status;

    /**
     * @ORM\Column(type="string", length=4000)
     */
    protected $description;

    /**
     * @ORM\Column(type="string", length=4000)
     */
    protected $replication_steps;

    /**
     * @ORM\ManyToOne(targetEntity="Tickit\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="reported_by_id", referencedColumnName="id")
     */
    protected $reported_by;

    /**
     * @ORM\ManyToOne(targetEntity="Tickit\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="assigned_to_id", referencedColumnName="id")
     */
    protected $assigned_to;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    protected $created;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    protected $updated;


    /**
     * Gets the id of this ticket
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the title of this ticket
     *
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Gets the title of this ticket
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * Sets the ticket status
     *
     * @param TicketStatus $status
     */
    public function setStatus(TicketStatus $status)
    {
        $this->status = $status;
    }


    /**
     * Returns the TicketStatus object representing the status of this ticket
     *
     * @return TicketStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets the user who this ticket is assigned to
     *
     * @param User $assigned_to
     */
    public function setAssignedTo(User $assigned_to)
    {
        $this->assigned_to = $assigned_to;
    }

    /**
     * Gets the user who this ticket is assigned to
     *
     * @return User
     */
    public function getAssignedTo()
    {
        return $this->assigned_to;
    }

    /**
     * Sets the ticket description
     *
     * @param $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Gets the ticket description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the replication steps for this ticket
     *
     * @param string $replication_steps
     */
    public function setReplicationSteps($replication_steps)
    {
        $this->replication_steps = $replication_steps;
    }

    /**
     * Gets the replication steps for this ticket
     *
     * @return string
     */
    public function getReplicationSteps()
    {
        return $this->replication_steps;
    }

    /**
     * Sets the "reported by" user on this ticket
     *
     * @param User $reported_by
     */
    public function setReportedBy(User $reported_by)
    {
        $this->reported_by = $reported_by;
    }


    /**
     * Gets the user that reported this ticket
     *
     * @return User
     */
    public function getReportedBy()
    {
        return $this->reported_by;
    }

    /**
     * Gets the updated time as an instance of DateTime object
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return new \DateTime($this->updated);
    }

    /**
     * Gets the created time as an instance of DateTime object
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return new \DateTime($this->created);
    }


}