<?php
class vehicle
{		//constructor
		public function  __construct()
		{
			echo "the new instance is created.<br>";
		}
		public function  __destruct()
		{
			echo "the new instance is deleted -".__class__."<br>";
		}
		//member variables
		var $color;
		//member functions
		function setcolor($arg)
		{
			$this->color=$arg;
			//echo $this->color;
		}
}
$car=new vehicle;
$car->setcolor("green");
echo "$car->color<br>";
?>