<?php

namespace AppBundle\Entity;

/**
 * Course
 */
class Course extends ItemContribution
{
    /**
     * @var Chapter
     */
    private $chapters;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var Grade
     */
    private $grade;

    /**
     * @var Quiz[]
     */
    private $quizzes;

    /**
     * @var Subject[]
     */
    private $subjects;

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
     * Get grade.
     *
     * @return Grade
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set grade.
     *
     * @param $grade
     * @return Course
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    public function getContributionName()
    {
        return "Course";
    }

    /**
     * Set quizzes.
     *
     * @param $quizzes
     * @return $this
     */
    public function setQuizzes($quizzes)
    {
        $this->quizzes = $quizzes;

        return $this;
    }

    /**
     * Get quizzes.
     *
     * @return Quiz[]
     */
    public function getQuizzes()
    {
        return $this->quizzes;
    }

    public function setSubjects($subjects)
    {
        $this->subjects = $subjects;
    }

    public function getSubjects()
    {
        return $this->subjects;
    }

    public function addSubject($subject)
    {
        $this->subjects[] = $subject;

        return $this;
    }
}
