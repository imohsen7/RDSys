<?php  

	class PizzaFactory {
		
		public function createPizza($type) { 
				if ($type == "cheese") {
					$pizza = new CheesePizza();
				} elseif ($type == "pepperoni") {
					$pizza = new PepperoniPizza();
				} elseif ($type == "calm") {
					$pizza = new CalmPizza();
				} elseif ($type == "greek") {
					$pizza = new GreekPizza();
				} 
				return $pizza;
		}
	}

class PizzaStore { 
		private $pizzaFactory;

		public function orderPizza($type)     {         
				$pizza = PizzaFactory::createPizza($type);
				$pizza->prepare();
				$pizza->bake();
				$pizza->cut();
				$pizza->box();
				return $pizza;     
		} 
}

		$store = new PizzaStore(); 
		$store->orderPizza('greek'); 
		
		?>
