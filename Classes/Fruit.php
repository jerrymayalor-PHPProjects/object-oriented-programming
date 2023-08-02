<?php

class Fruit {
   // Properties
   public $name;
   public $color;
     // public $name;
     // protected $color;
     // private $weight;
 
   function __construct($name,  $color) {
     $this->name = $name;
     $this->color = $color;
     // $this->color = $color;
   }
   function __destruct() {
     echo "The fruit is {$this->name} and the color is {$this->color}.";
   } 
   
   public function intro() {
     echo "The fruit is {$this->name} and the color is {$this->color}.";
   }

   // Methods
   function set_name($name) {
     $this->name = $name;
   }
   function get_name() {
     return $this->name;
   }
   function set_color($color) {
     $this->color = $color;
   }
   function get_color() {
     return $this->color;
   }


}

   // Strawberry is inherited from Fruit
class Strawberry extends Fruit {
     public function message() {
          echo "Am I a fruit or a berry? ";
     }

}





