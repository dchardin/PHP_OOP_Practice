<?php

class Car {
    
    /**Lets create a method called "MoveWheels" **/
    
    function MoveWheels(){
        
        echo "Wheels move";
        
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

if(method_exists("Car", "MoveWheels")) {
    
    echo "The method Exists!";
    
} else {
    echo "The method does not exist";
}

?>