<?php

	function isMultipleOf($number, $multiple_of)
	{
		return $number % $multiple_of === 0;
	}
	
	function letsPrintThisNumber($number)
	{
		switch ($number) {
			case isMultipleOf($number, 15):
				return "Linianos";
			case isMultipleOf($number, 3):
				return "Linio";
			case isMultipleOf($number, 5):
				return "IT";
			default:
				return $number;
		}
	}
	
	for ($number = 1; $number <= 1000; $number++) {
		echo '<br>';
		echo letsPrintThisNumber($number);
	}

?>
