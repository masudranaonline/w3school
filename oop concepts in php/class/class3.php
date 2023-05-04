<?php

	class Fruit
	{

		function set_name($name)
		{
			$this->name = $name;
		}
	}

	$apple = new Fruit();
	$apple->set_name('Apple');

	echo $apple->name;