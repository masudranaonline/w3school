<?php


	class Fruit
	{
		public $name;

		function set_name($name)
		{
			$this->name = $name;
		}
		function get_name()
		{
			return $this->name;
		}
	}

	$object = new Fruit();

	var_dump($object instanceof Fruit);

	// $object->set_name('Apple');

	// echo $object->get_name();