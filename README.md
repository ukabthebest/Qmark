QMark
=========================

QMark is a package to quickly build Quiz, Survey and Exam applications. Provides an efficient way of calculating final scores and returning relevant recommendations/results.

Features
--------

- Human Friendly interface for using functionality
- Currently Supported Question Types include MCQs, Sliders, Text Boxes and Image Choices

Example Usage
-------------
<code>
$mysurvey = new Qmark();
$mysurvey->addQuestion("How old are you?")->ofType("MCQ")->setChoices(["I am above 20" => 3, "I am above 30" => 5])->setCorrectAnswer("I am immortal");
  </code>

Contribution
--------

I am open to suggestions and contributors. Thank you.
