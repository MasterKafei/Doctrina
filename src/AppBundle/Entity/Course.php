<?php

namespace AppBundle\Entity;

/**
 * Course
 */
class Course implements IContribution
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var chapters
     */
    private $chapters;

    /**
     * @var string
     */
    private $title;

    /**
     * @var description
     *
     */
    private $description;

    /**
     * @var IContribution
     */
    private $contributions;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description.
     *
     * @param string|null $description
     *
     * @return Course
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * Set chapters.
     *
     * @param string
     *
     * @return Course
     */
    public function setChapters($chapters)
    {
        $this->chapters = $chapters;

        return $this;
    }

    /**
     * Get chapters.
     *
     * @return string
     */
    public function getChapters()
    {
        return $this->chapters;
    }

    /**
     * Set title.
     *
     * @param string|null $title
     *
     * @return Course
     */
    public function setTitle($title = null)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set IContribution.
     *
     * @param IContribution
     *
     * @return Course
     */
    public function setContributions($contributions)
    {
        $this->contributions = $contributions;

        return $this;
    }

    /**
     * Get IContribution.
     *
     * @return IContribution
     */
    public function getContributions()
    {
        return $this->contributions;
    }
}
