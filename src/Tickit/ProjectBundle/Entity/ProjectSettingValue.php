<?php

namespace Tickit\ProjectBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="project_setting_values")
 */
class ProjectSettingValue
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Project")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     */
    protected $project;

    /**
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="ProjectSetting")
     * @ORM\JoinColumn(name="project_setting_id", referencedColumnName="id")
     */
    protected $setting;

    /**
     * @ORM\Column(type="string", length=120)
     */
    protected $value;

    /**
     * Gets the associated setting object
     *
     * @return \Tickit\ProjectBundle\Entity\ProjectSetting
     */
    public function getSetting()
    {
        return $this->setting;
    }

    /**
     * Gets the attribute value
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

}