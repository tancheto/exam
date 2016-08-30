

<?php

/*Create interface Mammal with methods: talk(), walk(), Create abstract classes Person and Animal which implements Mammal interface with the following properties: name, age and gender. Create accessor methods for these properties. Keep the properties private. Create appropriate constructor for Person and Animal which accept their properties as parameters.
Create Dolphin class which extends Animal and implements its methods. Create class Student which extends Person and implements its methods.
Create instance of Dolphin and demonstrate talk() and walk() methods. Print dolphin’s name and age.
Create instance of Student and demonstrate talk() and walk() methods. Print student's name, age and gender.
*/

interface Mammal{

	public function talk();
	public function walk();
}

abstract class Person implements Mammal{

	protected $name;
	protected $age;
	protected $gender;



	public function __construct($name,$age,$gender){
	$this->name=$name;
	$this->age=$age;
	$this->gender=$gender;
	}

	public function talk(){
		foreach ($this as $value) {
		  echo "I am ". $value." ";
		}
	}

	public function walk(){}
} 
	abstract class Animal implements Mammal{
	protected $name;
	protected $age;
	protected $gender;



	public function __construct($name,$age){
	$this->name=$name;
	$this->age=$age;
	}

	public function talk(){
	 echo "I am";
	 echo $this->name." ";
	 echo $this->age." ";
		}

		public function walk(){}


	}

	class Dolphin extends Animal{

	public function talk(){
	 echo "I am ";
	 echo $this->name." I am ";
	 echo $this->age;
		}

		public function walk(){

		echo "I walk sometimes.";

	}

	}

	class Student extends Person{

		public function talk(){
		foreach ($this as $value) {
		  echo "I am ". $value." ";
		}
	}

	public function walk(){

		echo "I walk.";

	}

	}

	$dolphin=new Dolphin("Dolphy","10");
	$student=new Student("Tanya","17","female");

	$dolphin->talk();
	$dolphin->walk();
	$student->talk();
    $student->walk();

?>
