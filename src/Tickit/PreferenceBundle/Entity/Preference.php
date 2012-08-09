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

    const TYPE_PERSONAL = 'personal';
    const TYPE_SYSTEM = 'system';

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;


    /**
     * @ORM\Column(type="string", length=250)
     */
    protected $default_value;

    /**
     * @ORM\Column(type="string", length=8)
     */
    protected $type;

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


    /**
     * Sets the type
     *
     * @throws \InvalidArgumentException
     * @param  string $type
     * @return void
     */
    public function setType($type)
    {
        if(!in_array($type, array(self::TYPE_PERSONAL, self::TYPE_SYSTEM))) {
            throw new \InvalidArgumentException('An invalid type has been specified in Preference entity');
        }
        $this->type = $type;
    }

    /**
     * Returns the type of the preference
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}