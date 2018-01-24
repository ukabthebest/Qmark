<?php

namespace Ukab\Qmark;

/**
 *  Question class
 *
 *  Consists of properties and methods related to a Question Instance
 *
 *  @author Usama Kamran
 */


class MultipleChoiceQuestion
{

    /**
     * @var AnswerChoice $answer_choices defines the answer choices
     * @var string $correctAnswer defines correct answer
     * @var float score defines the score of the chosen answer
     */

    private $answerChoices;
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




}