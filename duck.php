<?php  
class DuckEmulator {     
	/**      * @var int $type      */     
		protected $type;  
		protected static $DECOY_DUCK = 0;     
		protected static $MALLARD_DUCK = "Mallard duck";     
		protected static $RUBBER_DUCK = "Decoy duck";     
		protected static $RED_HEAD_DUCK = "Red head duck";  
		private $duck_string=NULL;
		private $quack_string=NULL;
    
		public function __construct($type)     {         
				$this->type = $type;   
				$duck_string = $this->getTypeString();
		}  
		public function getTypeString()     {
				
				if ( isset($this->type )) {
				//if ( property_exists ( $this ,  $this->type) )  { 
					return $this->type;
				}else{
					throw new InvalidArgumentException("Invalid duck type");    
				}
				
				
				
				
/*				
				switch ($this->type) {             
						case self::$MALLARD_DUCK:                 
						return "Mallard duck";             
						
						case self::$DECOY_DUCK:                 
						return "Decoy duck";             
						
						case self::$RED_HEAD_DUCK:                 
						return "Red head duck";             
						
						case self::$RUBBER_DUCK:                 
						return "Rubber duck";             
						
						default:                 
						throw new InvalidArgumentException("Invalid duck type");         
				} */    
		} 
     
		public function fly() {         
				if($this->type == self::$RUBBER_DUCK || $this->type == self::$DECOY_DUCK) { 
					$this->quack_string = ( $this->type == self::$RUBBER_DUCK ? " says: Squeak! " : " is always silent!"); 
					$fly_string = " can't fly!";         
				} else {
					$this->quack_string  = "says: Quack! Quack!";
					$fly_string= " is flying";         
					}   
				echo  $this->duck_string.$fly_string;
		}  
    
		public function quack() {         
/*				if($this->type == self::$RUBBER_DUCK) {             
					echo $this->getTypeString() . "says: Squeak!";         
				} else if ($this->type == self::$DECOY_DUCK) {             
					echo $this->getTypeString() . " is always silent!";         
				} else {             
					echo $this->getTypeString() . "says: Quack! Quack!";         
					}  */
			echo $this->quack_string;
		} 
}  
			/**  * Sample  */ 
			$duck = new DuckEmulator(DuckEmulator::$MALLARD_DUCK); 
			$duck->fly(); 
?>  
