<?php
class common{
    public $start_range;
    public $end_range;
    
    // constructor
    public function __construct($start_range,$end_range) {
        $this->start_range   = $start_range;
        $this->end_range 	= $end_range;
    }
	function test1Display(){
	    //check whether given input is a positive number
		if ( ( $this->start_range <= 0 || $this->start_range == "" ) ||  ( $this->end_range<= 0 || $this->end_range == "") ) {
			$msg = "<p id='redclr'><u><b>Error:</b></u></p>";
			$msg .= "Pleae enter a positive numeric value";
		}
		else { //Prints result and check if divisible by 3 and 5
			$msg = "<p id='redclr'>Results:</p>";
			
			for($i = $this->start_range; $i <= $this->end_range; $i++) {
				$init = $i;
				if ($init % 3 == 0) {
					$output .= "<font color='#FF1493'>Fizz</font> ";					
				}
				elseif ($init % 5 == 0) {
					$output .= "<font color='#228B22'>Buzz</font> ";					
				}
				else {
					$output .= $i." ";
				}
			}
			$msg .= "<p>for f[".$this->start_range."..".$this->end_range."], the output is ".$output."</p>";
		}
		
		  return $msg; //return the result
	}
	
	function test2Display(){
	
		//check whether given input is a positive number
		if ( ( $this->start_range <= 0 || $this->start_range == "" ) ||  ( $this->end_range<= 0 || $this->end_range == "") ) {
			$msg = "<p id='redclr'><u><b>Error:</b></u></p>";
			$msg .= "Pleae enter a positive numeric value";
		}
		else { //Prints result and check if divisible by 3 and 5
			$msg = "<p id='redclr'>Results:</p>";
			
			for($i = $this->start_range; $i <= $this->end_range; $i++) {
				$init = $i;
				if ($init % 3 == 0) {
					$output .= "<font color='#FF1493'>Fizz</font> ";
					$varDivide3 = 1;
				}
				elseif ($init % 5 == 0) {
					$output .= "<font color='#228B22'>Buzz</font> ";
					$varDivide5 = 1;
				}
				elseif ($varDivide3 == 1 && $varDivide5 == 1) { //Check whether both will occur
					$output .= "<font color='#4B0082'>Bazz</font> ";
					$varDivide3 = 0;
					$varDivide5 = 0;
				}
				else {
					$output .= $i." ";
				}
			}
			$msg .= "<p>for f[".$this->start_range."..".$this->end_range."], the output is ".$output."</p>";
		}
		  return $msg; //return the result
	}

} 
?>
