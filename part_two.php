<?php

/*PART 2.
1. Create abstract class Vehicle with the following properties: brand, model and price. Implement getBrand(), getModel() and getPrice() methods. Create abstract methods:
○	startEngine()
○	stopEngine()
○	printData() - print all properties of the vehicle.

2. Create class Car that extends the abstract class Vehicle with properties: horsePower, weight and color. Implements the abstract methods of the parent class: StartEngine and StopEngine (Print some text, for example: “The engine of the car is started” and “The engine of the car is stopped”) Create getHorsePower(), getWeight() and getColor methods. Create constructor with appropriate parameters.
3. Create class Bus which extends Vehicle and implements its abstract methods in similar way like Car. The Bus has number of seats, disable people seats and total capacity. Create getNumberOfSeats(), getNumberOfDisablePeopleSeats() and getTotalCapacity(). Create constructor with appropriate parameters.
4. Create instance of Car, print its horsepower, and color and then invoke the following methods: startEngine() and printData();
Create instance of Bus, print its number of seats and invoke the following methods: startEngine(), stopEngine() and printData();
*/

abstract class Vehicle{

	public $brand;
	public $model;
	public $price;

	public function __construct($brand,$model,$price)
	{
		$this->brand=$brand;
        $this->model=$model;
        $this->price=$price;
	}



	public function getBrand($brand)
	{
		$this->brand=$brand;
		echo $this->brand;
	}
    public function	getModel($model){
    	$this->model=$model;
		echo $this->model;
    }
    public function getPrice($price){
    	$this->price=$price;
		echo $this->price;
    }

    abstract public function startEngine();
	abstract public function stopEngine();
	abstract public function printData();

}

class Car extends Vehicle{

	public $horsePower;
	public $weight;
	public $color;

    public function startEngine(){
    	echo "The engine of the car is started";
    }

	public function stopEngine(){
		echo "The engine of the car is stopped";
	}

	public function __construct($horsePower,$weight,$color){

	$this->horsePower=$horsePower;
	$this->weight=$weight;
	$this->color=$color;
   
	}	

	//public function getHorsePower();
	//public function getWeight();
	//public function getColor();

    public function printData(){
		foreach ($this as $key => $value) {
			echo $key." = ".$value;
		}
	}

}

class Bus extends Vehicle{

	public $NumberOfSeats;
	public $NumberOfDisablePeopleSeats;
	public $getTotalCapacity;

    public function startEngine(){
    	echo "The engine of the bus is started";
    }

	public function stopEngine(){
		echo "The engine of the bus is stopped";
	}

	public function __construct($NumberOfSeats,$NumberOfDisablePeopleSeats,$getTotalCapacity){

	$this->NumberOfSeats=$NumberOfSeats;
	$this->NumberOfDisablePeopleSeats=$NumberOfDisablePeopleSeats;
	$this->getTotalCapacity=$getTotalCapacity;
   
	}	

	//public function getNumberOfSeats();
	//public function getNumberOfDisablePeopleSeats();
	//public function getTotalCapacity();

    public function printData(){
		foreach ($this as $key => $value) {
			echo $key." = ".$value;
		}
	}

}

$car= new Car("100","2000","red");
$car->startEngine();
$car->printData();

$bus=new Bus("30","20","50");
$bus->startEngine();
$bus->stopEngine();
$bus->printData();

?>
