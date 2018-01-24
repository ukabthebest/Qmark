<?php

namespace Ukab\Qmark;

/**
 *  Question class
 *
 *  Consists of properties and methods related to a Question Instance
 *
 *  @author Usama Kamran
 */


class Question
{

    /**
     * @var string $question defines the question string
     * @var int $score defines score of question
     * @var string $type defines type of question
     */

    private $question;
    private $score;
    private $type;


    public function __construct($question)
    {
        $this->question = $question;
    }

    /**
     * setType
     *
     * Sets Type of Question
     *
     * @param string $type
     *
     * @return MultipleChoiceQuestion Instance
     */
    public function setType($type = "MCQ|Slider|Text|Image")
    {
        $this->type = $type;
        if($type === "MCQ")
        {
            return new MultipleChoiceQuestion();
        }
    }


}