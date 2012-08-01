<?php

namespace Tickit\TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @ORM\Table(name="ticket_statuses")
 */
class TicketStatus
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length="50")
     */
    protected $name;

    /**
     * @ORM\Column(type="string", columnDefinition="CHAR(6) NOT NULL")
     */
    protected $colour;


    /**
     * Gets the ID
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Sets the name of this status
     *
     * @param  string  $name
     * @return string
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * Gets the name of this status
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Sets the colour of this status
     *
     * @param  string $colour  A 6 character hexadecimal representation of the colour
     * @return string
     */
    public function setColour($colour = 'FFFFFF')
    {
        $colour = str_replace('#', '', $colour);
        $this->colour = $colour;
    }

}