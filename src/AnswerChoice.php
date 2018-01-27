<?php

namespace Ukab\Qmark;

/**
 *  AnswerChoice class
 *
 *  Consists of properties and methods related to a Answer options of MultipleChoiceQuestion Instance
 *
 *  @author Usama Kamran
 */


class AnswerChoice
{

    private $answer;
    private $score;
    private $correct;

    public function __construct($answer,$score = 0,$correct = false)
    {
        $this->answer = $answer;
        $this->score = $score;
        $this->correct = $correct;
    }

    /**
     * @param int $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

    /**
     * @param bool $correct
     */
    public function setCorrect($correct)
    {
        $this->correct = $correct;
    }

    /**
     * @return bool
     */
    public function isCorrect()
    {
        return $this->correct;
    }

}