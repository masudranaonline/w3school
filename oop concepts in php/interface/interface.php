<?php

    interface Animal{
        public function cat();
    }

    class Cat implements Animal {
        public function cat(){
            echo "Meow";
        }
    }


    $obj = new Cat();
    $obj->cat();