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
    private $correctAnswer = false;
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

    /**
     * @param string $choice
     *
     * @param integer $score
     *
     * @param boolean $correct
     *
     * @return MCQ
     */

    public function addChoice($choice,$score = 0,$correct=false)
    {
        $answerChoice = new AnswerChoice($choice);
        $numArgs = func_num_args();
        if ($numArgs > 2){
            $answerChoice->setScore($score);
            $answerChoice->setCorrect($correct);
        }
        else{
            $args = func_get_args();
            if (is_bool($args[1])){
                $answerChoice->setCorrect($args[1]);
            }
            elseif (is_numeric($args[1])){
                $answerChoice->setScore($args[1]);
            }
        }
        array_push($this->answerChoices,$answerChoice);
        return $this;
    }




}