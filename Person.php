<?php

class Person extends Mammal {

	private $name;
	public $nickname;
	private $dob;
	private $height;
	private $weight = 10;
	private $bankAccountBalance = 1000;

	public function __construct($newName) {
		$this->name = $newName;
	}

	public function whatIsYourBloodTemperature() {
		echo '<p>I have '.$this->bloodTemperature.' blood</p>';
	}

	public function introduceSelf() {
		echo '<p>Hello, my name is '. $this->name .'</p>';
	}

	public function whatIsWeight() {
		echo '<p>I weigh '.$this->weight.'</p>';
	}

	public function eat($food, $foodWeight) {
		// Tell the world what you're eating
		echo '<p>'.$this->name.' is now eating '.$food;

		// Add the weight of the food to the overall weight
		$this->weight += $foodWeight;
	}


}