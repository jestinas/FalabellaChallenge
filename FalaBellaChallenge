<?php

class FalaBellaChallenge {

	public function isMultipleOf($number, $multiple_of)
	{
		return $number % $multiple_of === 0;
	}

	public function letsPrintThisNumber($number)
	{
		switch ($number) {
			case $this->isMultipleOf($number, 15):
				return "Linianos";
			case $this->isMultipleOf($number, 3):
				return "Linio";
			case $this->isMultipleOf($number, 5):
				return "IT";
			default:
				return $number;
		}
	}

	public function printRangeOfNumbers($start = 1, $end = 1000, $print = true)
	{
		$numbers_array = [];
		for ($number = $start; $number <= $end; $number++) {
			$numbers_array[] = $this->letsPrintThisNumber($number);
		}
		if(!$print){
			return $numbers_array;
		}
		echo implode('<br>', $numbers_array);
	}
}

?>
