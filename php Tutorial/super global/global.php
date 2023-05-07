<?php


	$x = 25;
	$y = 30;

	function sum()
	{
		$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
	}

	 sum();

	echo $z;

