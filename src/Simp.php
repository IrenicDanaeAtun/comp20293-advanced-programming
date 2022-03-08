<?php
class Simp
{
    private $number;
    
    public function __construct($number) //10
    {
        $this->number = $number;
    }

    public function modulus($divisor) //2
    {
        if($divisor > $this->number)
        {
            throw new \InvalidArgumentException("Divisor should not greater than dividend");
        }
        else if(!is_numeric($divisor))
        {
            throw new \InvalidArgumentException("Divisor is not a number");
        }

        return $this->number % $divisor;
    }
}