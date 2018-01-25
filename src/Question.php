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


    public function __construct($question,$type="MCQ|Slider|Text|Image")
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
     * @return mixed Instance
     */

    public function ofType($type = "MCQ|Slider|Text|Image")
    {
        $this->type = $type;
        $reflectionClass = new \ReflectionClass('Ukab\Qmark\\'.$type);
        return $reflectionClass->newInstance();
    }


}