<?php

	class Fruit
	{
		public $name;
		public $color;

		function set_name($name)
		{
			 $this->name = $name;
		}
		function get_name()
		{
			return $this->name;
		}
	}

	$apple = new Fruit();
	$bananna = new Fruit();

	 $apple->set_name('Apple');
	 $bananna->set_name('Bananna');

	 echo $apple->get_name();
	 echo "<br>";
	 echo $bananna->get_name();



