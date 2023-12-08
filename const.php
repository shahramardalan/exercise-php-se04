<?php
class Clac
{
    public const ADD = "+";
    public const SUB = "-";

    private int $number1, $number2;

    function calc($num1, $num2, $operator)
    {
        if (self::ADD == $operator) {
            $this->number1 = $num1;
            $this->number2 = $num2;
            return $this->number1 + $this->number2;
        } elseif (self::SUB == $operator) {
            $this->number1 = $num1;
            $this->number2 = $num2;
            return $this->number1 - $this->number2;
        }
    }
}

$calc = new Clac();

echo "<pre>";
var_dump($calc->calc(9, 2, "-"));
echo "</pre>";
