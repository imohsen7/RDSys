<?php

class Statistics {  
		/**
		 * 
		 * @param string $candidate      
		 * @param int $count     
		 * @internal string $number      
		 * @internal string $verb      
		 * @internal string $pluralModifier      
		 * 
		 **/   
		
		private $candidate =  0 ;
		private $res =array();
		
		function __construct($candidate) { 
				$this->candidate = $candidate;
		}
		
		public function printGuessRewrite($count) { 
			$number = ($count > 0  ?  $count : "no" );
			$verb =  ( $count == "1" ? " is " : "are");
			$pluralModifier = ( $count == "1" ? "" : "s" );
			
			echo sprintf("There %s %s %s%s", 
						$verb,    
						$number,    
						$this->candidate,    
						$pluralModifier  
						);
			
		}

  
		 public function printGuessStatistics($candidate, $count) {         
			 if ($count == 0) {             
				 $number = "no";             
				 $verb = "are";             
				 $pluralModifier = "s";         
			} elseif ($count == 1) {             
				$number = "1";             
				$verb = "is";             
				$pluralModifier = "";         
			} else {             
				$number = $count;             
				$verb = "are";             
				$pluralModifier = "s"; 
			}         
			
			sprintf(
				"There %s %s %s%s", 
				array(   
						$verb,    
						$number,    
						$candidate,    
						$pluralModifier  
						)
			);     
		} 
} 
	/**  * What's the output?  */ 
	$statistics = new Statistics("bird"); 
	//$statistics->printGuessStatistics( "bird" , 2); 
	$statistics->printGuessRewrite(0); 
	



?>
