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
</code>
<br>
<code>
  $mysurvey->addQuestion("How old are you?")->ofType("MCQ")->addChoice("I am above 20",3,false)->addChoice("I am great");
</code>

Here "I am above 20" is a sample choice and 3 is the score allocated to that choice.

Contribution
--------

I am open to suggestions and contributors. Thank you.
