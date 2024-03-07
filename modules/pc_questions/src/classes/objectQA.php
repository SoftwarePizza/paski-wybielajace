<?php 


class ObjectQA extends ObjectModel
{
    public $id;
    public $question;
    public $answer;

    public static $definition = array(
        'table' =>"questionsAndAnswers",
        'primary' => 'id',
        'fields' => array(
            'question' => array('type' => self::TYPE_STRING, 'validate' => 'isString', 'size' => 255),
            'answer' => array('type' => self::TYPE_STRING, 'validate' => 'isString', 'size' => 2000),
        ),
    );

    
    
}