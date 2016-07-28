<?php 


class MyClass {
	// Class properties and methods go here
	public $prop1 = "I'm a class property!";

	public function __construct(){
		echo 'The class"' . __CLASS__ . '" was initiated!<br>';
	}

	public function __destruct(){
		echo 'The class "' . __CLASS__ . '" was destroyed.<br>';
	}

	public function setProperty($newval){
		$this->prop1 = $newval;
	}

	public function getProperty(){
		return $this->prop1 . "<br>";
	}
}

$obj = new myClass;
$obj2 = new MyClass;

var_dump($obj);

// echo $obj->prop1;
// echo $obj2->prop1;
echo $obj->getProperty(); // Get the property value
echo $obj2->getProperty(); // Get the property value

$obj->setProperty("I'm a new property value!"); // Set a new property value
$obj2->setProperty("I belong to the second instance!"); // Set a new property value

echo $obj->getProperty(); // Raed out new property value
echo $obj2->getProperty(); // Raed out new property value

unset($obj);

echo "End of file.<br>";