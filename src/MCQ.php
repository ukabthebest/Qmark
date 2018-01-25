<?php

namespace Ukab\Qmark;

/**
 *  Question class
 *
 *  Consists of properties and methods related to a Question Instance
 *
 *  @author Usama Kamran
 */


class MCQ
{

    /**
     * @var AnswerChoice $answer_choices defines the answer choices
     * @var string $correctAnswer defines correct answer
     * @var float score defines the score of the chosen answer
     */

    private $answerChoices = array();
    private $correctAnswer;
    private $score;



    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }

    public function setChoices($choices = ["answer" => "score"])
    {
        foreach ($choices as $answer => $score){
            $answerChoice = new AnswerChoice($answer,$score);
            array_push($this->answerChoices,$answerChoice);
        }
    }


}