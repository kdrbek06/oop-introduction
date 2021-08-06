<?php

class Beverage
{

    public string $color;
    public string $temperature;
    public float $price;
    


    public function __construct(String $temperature, String $color, Float $price)
    {

        $this -> color = $color;
        $this -> temperature = $temperature;
        $this -> price = $price;

    }



    public function getInfo()
    {
        if(empty($this->temperature))
        {
            $this->temperature = 'cold';
        }

        echo "This beverage is {$this->temperature} and {$this->color}.<br>";
        echo $this->temperature;
        
    }

}