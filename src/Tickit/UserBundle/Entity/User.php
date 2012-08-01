<?php

namespace Tickit\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * @ORM\Entity(repositoryClass="Tickit\UserBundle\Entity\Repository\UserRepository")
 * @ORM\Table(name="users")
 */
class User extends BaseUser
{

    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;

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
     * @todo This should be moved to a separate DB to allow concurrent sessions
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    protected $session_token;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $last_activity;


    /**
     * Gets the ID for this user
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Updates the last activity time
     *
     * @param \DateTime $last_activity
     */
    public function setLastActivity($last_activity)
    {
        $this->last_activity = $last_activity;
    }

    /**
     * Gets the last activity time as a DateTime object
     *
     * @return \DateTime
     */
    public function getLastActivity()
    {
        return $this->last_activity;
    }

    /**
     * Sets the session token for this user
     *
     * @param string $session_token
     */
    public function setSessionToken($session_token)
    {
        $this->session_token = $session_token;
    }

    /**
     * Returns the current session token
     *
     * @return string
     */
    public function getSessionToken()
    {
        return $this->session_token;
    }

    /**
     * Gets the time this user was updated as a DateTime object
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return new \DateTime($this->updated);
    }

    /**
     * Gets the created time as a DateTime object
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return new \DateTime($this->created);
    }

}


