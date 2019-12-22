<?php

namespace Bimosprog\Lesson3;

/*
 * Класс для проверки переменной на значение "lesson3"
 */
class Checker
{
    const LESSON3 = 'Lesson3';

    function __construct( ){  }

    public function isLesson3($variable)
    {
        if ($variable == self::LESSON3)
        {
            return(true);
        }
        return(false);
    }
}
