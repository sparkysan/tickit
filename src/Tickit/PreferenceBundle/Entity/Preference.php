<?php
namespace Tickit\PreferenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="preferences")
 */
class Preference
{
    //create constants here to map to setting names

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length="150")
     */
    protected $name;


    /**
     * @ORM\Column(type="string", length="250")
     */
    protected $default_value;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set default_value
     *
     * @param string $defaultValue
     */
    public function setDefaultValue($defaultValue)
    {
        $this->default_value = $defaultValue;
    }

    /**
     * Get default_value
     *
     * @return string 
     */
    public function getDefaultValue()
    {
        return $this->default_value;
    }
}