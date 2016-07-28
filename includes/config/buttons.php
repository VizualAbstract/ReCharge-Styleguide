<?php

class Button {
	public $age = 0;

	public function __construct($age) {
		$this->age = $age;
	}

	public function getAge() {
		echo $this->age;
	}
}