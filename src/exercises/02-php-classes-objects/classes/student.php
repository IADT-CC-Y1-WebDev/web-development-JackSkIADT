<?php

class Student {
    protected $name = "";
    protected $number = "";

    public function __construct($name, $num = "") {
        $this->name = $name;
        $this->number = $num;

        if ($this->number == "") {
            throw new Exception("Student number must not be empty.");          
        }
    
        // echo "Creating student: " . $this->name . "<br>";

    }

    public function __destruct() {
        echo $this->name . " has left the system.";
    }

    public function getName() {
        return $this->name;
    }

    public function getNumber() {
        return $this->number;
    }

    public function __toString() {
        return "Student: " . $this->name . " (" . $this->number. ").";
    }
}

?>