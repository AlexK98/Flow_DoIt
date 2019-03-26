<?php
namespace Toko\Doit\Domain\Model;

/*
 * This file is part of the Toko.Doit package.
 */

use Neos\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Flow\Entity
 */
class Task
{
    /**
	 * Description of the Task, up to 255 symbols
	 *
	 * @Flow\Validate(type="NotEmpty")
	 * @Flow\Validate(type="StringLength", options={ "maximum"=255 })
	 * @ORM\Column(length=255)
	 * @var string
	 */
    protected $description;

    /**
	 * Status of the Task. Can be ACTIVE or COMPLETED.
	 *
	 * @ORM\Column(length=16, options={"default":"Active"})
	 * @var string
	 */
    protected $state;

    /**
     * The date Task was added.
	 *
	 * @var \DateTime
     * @ORM\Column(type="datetime")
     */
    protected $date;

    /**
     * Constructs this Task's date
     *
     * @throws \Exception
     * @return void
     */
    public function __construct()
    {
        $this->date = new \DateTime();
    }


	/**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
	}

	/**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return void
     */
    public function setState($state)
    {
        $this->state = $state;
	}

	/**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     * @return void
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
	}
}
