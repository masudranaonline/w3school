<?php


	echo "Return the length of the string: 'Masud Rana' <br>";
	
	echo strlen("Masud Rana");
	echo "<br>";

	echo "Count Words in a String: 'Masud Rana' <br>";
	echo str_word_count("Masud Rana");
	echo "<br>";

	echo "Reverse a String: 'Masud' <br>";
	echo strrev("Masud");
	echo "<br>";

	echo "Search For a Text Within a String: 'Bangladesh is a beautifull country' <br> ";
	echo strpos("Bangladesh is a beautifull country", "beautifull");
	echo "<br>";

	echo "Replace the text: Hello Masud! Hello Words <br>";

	echo str_replace("Words", "Masud", "Hello Words");