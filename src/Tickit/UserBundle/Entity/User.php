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
     * Class constructor
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param $last_activity
     */
    public function setLastActivity($last_activity)
    {
        $this->last_activity = $last_activity;
    }

    /**
     * @return mixed
     */
    public function getLastActivity()
    {
        return $this->last_activity;
    }

    /**
     * @param $session_token
     */
    public function setSessionToken($session_token)
    {
        $this->session_token = $session_token;
    }

    /**
     * @return mixed
     */
    public function getSessionToken()
    {
        return $this->session_token;
    }

    /**
     * @param $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * @return mixed
     */
    public function getUpdated()
    {
        return $this->updated;
    }

}


