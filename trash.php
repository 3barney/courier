<?php
//	class Pet{
//		public $legs = 4;
//		public $name = "barn";
//		
//		public function setName($name){
//			$this->name = $name;
//		}
		
//		public function getName(){
//			return $this->name;
//		}
//	}
//	$cat = new Pet();
//	$cat->setName("barney");
//	echo $cat->getName();
?> 
<?php
//	class Pet{
//		public $name;
//		public $legs;
//		public $owner;
		
		
//		public function setName($name){
//			$this->name = $name;
//		}
		
//		public function getName(){
//			return $this->name;
//		}
//		public function goToVets(){
//			echo "going to the veterinary";
//		}
//	}
//	class cat extends Pet{
//		public function meow(){
//			echo "meow";
//		}
		
//	}
//	$cat = new Pet();
//	$cat->setName("winny");
//	echo $cat->getName();
	
//	$cat = new cat();
//	echo $cat->meow();
?>
<?php 
	abstract class Animal{
		
		abstract public function speak();
	}
	
	class cat extends Animal{
		public function speak(){
			echo "meow";
		}
	}
	
	$cat = new cat();
	echo $cat->speak();


	
	
	
	