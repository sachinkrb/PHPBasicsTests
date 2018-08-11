
<?php

//UNDERSTANDING PHP CLASS, OBJECTS, PROPERTIES, PUBLIC, PRIVATE, PROTECTED,
//EXTENDED CLASS, CONSTRUCTOR, THIS, SELF.
class Person {
	public $one = 1;
	private $two = 2;
	protected $three = 3;
}
class Man extends Person{
}
$dude =new Man;
$bob = new Person;

//Here, outside the class, the only thing that bob was able to
//access was the public value without use of function

//echo $bob->one;
//echo $bob->two;
//echo $bob->three;
//echo "\n";

//Here, outside the class but a subclass, the only thing 
//dude(an object of extended class) was able to access 
//was the public value without the use of function

//echo $dude->one;
//echo $dude->two;
//echo $dude->three;

//USING FUNCTIONS

class Robot {
	public $four = 4;
	private $five = 5;
	protected $six = 6;
	static $seven =7;
	static $population=0;
	var $age;
	var $eyecolor;


	public function __construct($age, $eyecolor) {
		self::$population++;
		$this->age = $age;
		$this->eyecolor = $eyecolor;
		echo "This is my num: " . $this->age . "<br/>";
		echo "Eye color is: " . $this->eyecolor ."</br>";
		echo "Total num of robots: " . self::$population."<br/>";
	
	}

	//self is used instead of this to access static variable
	
	static public function say_seven() {
		echo "This is a self number" . self::$seven;
	}

	function sayNums(){
		echo $this->four;
		echo $this->five;
		echo $this->six;
}

}

class Robo extends Robot{
	function sayNumsAgain(){
		//echo $this->four;
		//echo $this->five;
		//echo $this->six;	
	
}
}
//Commented codes below won't work when constructor is created
//$ironman = new Robo;
//$bumblebee = new Robot;
//echo $bumblebee->sayNums();
//echo $ironman->sayNumsAgain();
//Accessing static variables outside the main class without using the object
//echo Robot::$seven;
$hankel = new Robot(22,"brown") ;
$gretel = new Robot(24,"black");






?>