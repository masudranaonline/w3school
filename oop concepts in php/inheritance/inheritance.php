<?php

	class Fruit{
		public $name;
		public $color;

		public function  __construct($name,$color)
		{ 
			$this->name = $name;
			$this->color = $color;
		}
		public function rana()
		{
			//  echo "The fruit is ".$this->name." and the color is".$this->color; 
			echo "The fruit is {$this->name} and the color is {$this->color}";
		}
	}

	

	class Strawberry extends Fruit{
		public function Message(){
			echo "Am I a fruit or a berry! ";
		}
	}

	


	$strawberry = new Strawberry("Strawberry", "red");
	$strawberry->Message();
	$strawberry->rana();