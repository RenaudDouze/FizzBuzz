<?php
    class FizzBuzz {
        public static function display(int $n): void
        {
            if ($n%3 && $n%5) {
                echo $n;
                return;
            }
            
            if (0 === $n%3) {
                echo 'Fizz';
            }
            if (0 === $n%5) {
                echo 'Buzz';
            }

            return;
        }
    }

    FizzBuzz::display(1);
    echo "\r\n";
    FizzBuzz::display(2);
    echo "\r\n";
    FizzBuzz::display(3);
    echo "\r\n";
    FizzBuzz::display(4);
    echo "\r\n";
    FizzBuzz::display(5);
    echo "\r\n";
    FizzBuzz::display(6);
    echo "\r\n";
    FizzBuzz::display(10);
    echo "\r\n";
    FizzBuzz::display(11);
    echo "\r\n";
    FizzBuzz::display(12);
    echo "\r\n";
    FizzBuzz::display(13);
    echo "\r\n";
    FizzBuzz::display(14);
    echo "\r\n";
    FizzBuzz::display(15);
    echo "\r\n";
    FizzBuzz::display(16);
    echo "\r\n";