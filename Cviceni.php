<?php
    require_once 'Ucitel.php';
    require 'Student.php';
    require_once 'Ucebna.php';

    class Cviceni{
        public $id;
        public $ident;
        public $dateTime;
        public $duration;
        public $classroom;
        public $teacher;
        public $students;


        public function __construct($ident,$dateTime,$duration,$classroomName,$teacherName){
            $this->generateID();
            $this->ident=$ident;
            $this->datetTime=$dateTime;
            $this->duration=$duration;
            $this->classroom=new Ucebna($classroomName);
            $this->teacher=new Ucitel($teacherName);
        }

        final private function generateId(){
            $this->id = uniqid();
        }

        public function addStudent($studentName){
            $this->students[]=new Student($studentName);
        }
    }
?>
