<?php

namespace Tickit\ProjectBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="project_settings")
 */
class ProjectSetting
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=120)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=120)
     */
    protected $default_value;


    /**
     * Gets the setting ID
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the name of this setting
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Gets the name of this setting
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the default value for this setting
     *
     * @param mixed $default_value
     */
    public function setDefaultValue($default_value)
    {
        $this->default_value = $default_value;
    }

    /**
     * Gets the default value for this setting
     *
     * @return mixed
     */
    public function getDefaultValue()
    {
        return $this->default_value;
    }


}
