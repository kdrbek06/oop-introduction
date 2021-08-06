<?php

declare(strict_types=1);

/* EXERCISE 2
Make class beer that extends from Beverage.
Create the properties name (string) and alcoholpercentage (float).
Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
Remember for now we will use properties and methods that can be accessed from everywhere.
Make a getAlcoholpercentage function which returns the alocoholpercentage.
Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
Also the name equal to Duvel and the alcohol percentage to 8,5%
print the getAlcoholpercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholpercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);



require 'beverage.php';


class Beer extends Beverage
{
    public string $name;
    public float $alcoholPercentage;



    public function __construct(String $color, String $temperature, Float $price, string $name, float $alcoholPercentage)
    {
        parent::__construct( $color, $temperature, $price);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage()
    {
        print_r($this->alcoholPercentage);
        
        return '<br>' . $this->alcoholPercentage . '<br>' . $this->name;
       
    }
    

}

$duvel = new Beer ('blond','cold', 3.5, 'Duvel', 8.5);


echo $duvel->getAlcoholPercentage();
// echo $duvel->color;


$duvel->getInfo();



getAlcoholPercentage();


