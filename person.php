<?php 

class Person{
    public $height;
    public $weight;

    function __construct($height , $weight){
        $this -> height = $height;
        $this -> weight = $weight;
    }

    function getBMI(){
        $heightInMeters = $this -> height / 100;
        return $this -> weight / ($heightInMeters * $heightInMeters);
    }


}


?>