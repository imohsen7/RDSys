<?php  

	class PizzaFactory {
		
		public function createPizza($type) { 
				
				switch ( $type ) { 
						
					case "cheese":
						$pizza = new CheesePizza();
					break;
					
					case "pepperoni":
						$pizza = new PepperoniPizza();
					break;
					
					case "calm":
						$pizza = new CalmPizza();
					break;
					
					case "greek":
						$pizza = new GreekPizza();
					break;
					
					default :
						throw new InvalidArgumentException("Invalid PizzaType Bro !");   
					break;
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
