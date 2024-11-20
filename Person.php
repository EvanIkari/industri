<?php

class Person {

    var $name;

    var $phone;

    var $address;

    function sayHello($name = null)
    {
        if($name){
            echo "Hello {$name}, namaku {$this->name}";
        }else{
            echo "Namaku {$this->name}";
        }
    }

    function welcome(){
        $this->sayHello();
        echo $this->name;
        echo $this->phone;
    }

}