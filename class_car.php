<?php

class Car {
    
    /**Lets create some properties**/
    
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    
    /**Lets create a method called "MoveWheels" **/
    
    function MoveWheels(){
        
        echo "The wheels are moving";
        
    }
    
    function TwoDoors(){
        
        $this->doors = 2; 
        
    }
    
    
    
}


/** class_exists function in action **/

/**
 
if(class_exists("Car")) {
    
    echo "The class exists!";
    
}   else {
    
    echo "The class does not exist.";
    
}

**/



/** method_exists function in action **/

/**

if(method_exists("Car", "MoveWheels")) {
    
    echo "The method Exists!";
    
} else {
    echo "The method does not exist";
}

**/

/** Lets create some objects based on our Car class **/


$bmw = new Car();
$mercedes_benz = new Car();

/** Now lets use the MoveWheels method **/

echo "Testing the wheels of the bmw...";
echo "</br>";

$bmw->MoveWheels();

echo "</br>";

echo "The number of wheels on the bmw are: ";
echo "</br>";
echo $bmw->wheels;
echo "</br>";

echo "The number of doors on the bmw are: ";
echo "</br>";
echo $bmw->doors;
echo "</br>";

/** the symbol -> looks kinda funny to me since I am used to using . in java **/



echo "Testing the wheels of the Mercedes Benz...";
echo "</br>";

$mercedes_benz->MoveWheels();

echo "</br>";

/** override the class property wheels for the object mercedes_benz **/
$mercedes_benz->wheels = 8;

echo "The number of wheels on the mercedes benz are: ";
echo "</br>";
echo $mercedes_benz->wheels;
echo "</br>";

echo "The number of doors on the mercedes benz are: ";
echo "</br>";
echo $mercedes_benz->doors;
echo "</br>";

echo "Setting the car to coup configuration";
$mercedes_benz->TwoDoors();
echo "</br>";
echo "The number of doors on the mercedes benz are: ";
echo "</br>";
echo $mercedes_benz->doors . "<br>";

?>