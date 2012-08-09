<?php

namespace Tickit\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="project_attribute_values")
 */
class ProjectAttributeValue implements AttributeValue
{

    /**
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="ProjectAttribute")
     * @ORM\JoinColumn(name="project_attribute_id", referencedColumnName="id")
     */
    protected $attribute;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Project")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     */
    protected $project;

    /**
     * @ORM\Column(type="string", length=500)
     */
    protected $value;

    /**
     * Gets the associated attribute object
     *
     * @return \Tickit\ProjectBundle\Entity\ProjectAttribute
     */
    public function getAttribute()
    {
        return $this->attribute;
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