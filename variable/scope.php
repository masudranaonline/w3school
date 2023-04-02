<?php

	$x = 10;
	$y = 12;

	function myText(){
		global $z,$x , $y;
	    $z = $x +$y;
	    echo $z;
	}

	myText();