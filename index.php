<?php

include 'vendor/autoload.php';

$qmark = new \Ukab\Qmark\Qmark();
$qmark->addQuestion("How are you?")
    ->ofType("MCQ")
    ->addChoice("I am fine",4,true)
    ->addChoice("I am ded",2,false);
