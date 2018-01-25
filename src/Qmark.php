<?php

namespace Ukab\Qmark;

/**
 *  Qmark class
 *
 *  The Entry Point of Qmark Library. Make an instance of this class to access all functionality
 *
 *  @author Usama Kamran
 */
class Qmark
{

    /**
     * @var string $title defines the title of the survey (optional)
     * @var Question $questions stores all questions in the survey
     * @var Criteria $criteria stores all criterians of the survey answers to reach a recommendation (optional)
     * @var float $total_score stores the total score of the answers
     */

    private $title;
    private $questions;
    private $criteria;
    private $total_score = 0;

    /**
     * @return string title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param int $total_score
     */
    public function setTotalScore($total_score)
    {
        $this->total_score = $total_score;
    }

    /**
     * @return integer
     */
    public function getTotalScore()
    {
        return $this->total_score;
    }


    /**
     * addQuestion
     *
     * Creates a new Question in Qmark
     *
     * @param string $questionString
     *
     * @return Question Instance
     */
    public function addQuestion($questionString)
    {
        $question = new Question($questionString);
        $this->questions = $question;
        return $question;
    }
}