<?php
    abstract class Ososba{
        public $id;
        public $name;

        public function __construct($name){
            $this->generateID();
            $this->name=$name;
        }

        final private function generateId(){
            $this->id = uniqid();
        }
    }
?>
