<?php

/*
1. Create PropertyManager class which implements the following magical methods:
○	__get($name)
○	__set($name, $value)
○	__call($method, $arguments = array())
○	__callStatic($method, $arguments = array())
○	__isset($name)
○	__unset($name)
Create an instance of the PropertyManager class and demonstrate how these methods work.
Tip: Create private array of properties which keeps the data.
*/

class PropertyManager{

	public function __get($name)
	public function __call($method, $arguments = array())
	public function __callStatic($method, $arguments = array())
	public function __isset($name)
	public function __unset($name)
} 

$obj= new PropertyManager;
$obj->__call();
$obj::__callStat();
$obj->__isset();
$obj->__unset();

?>
