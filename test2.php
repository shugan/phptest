<?php
//php class written for get data
class common{
    public $start_range;
    public $end_range;
    
    // constructor
    public function __construct($start_range,$end_range) {
        $this->start_range 	= $start_range;
        $this->end_range 	= $end_range;
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
//End class

if(isset($_POST['submit'])) {
  require_once "library/common.php";
  $start_range   = trim($_POST["start_range"]);
  $end_range 	= trim($_POST["end_range"]);
  $comObj = new common($start_range,$end_range);
  $msg=$comObj->test2Display();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script language="javascript">
function Validate(){
     var start_range = document.range.start_range;
     var end_range = document.range.end_range;	 
	if ( start_range.value == ""){
	  alert("Kindly enter the start range");
	  start_range.focus();
	  return false;
	}
	if ( start_range.value!= ""){
	    if ( !isInteger(start_range.value) ){
			alert("Kindly enter the valid start range");
			start_range.focus();
			return false;
		}
	}
	if ( end_range.value == ""){
	  alert("Kindly enter the end range");
	  end_range.focus();
	  return false;
	}
	if ( end_range.value!= ""){
	    if ( !isInteger(end_range.value) ){
			alert("Kindly enter the valid end range");
			end_range.focus();
			return false;
		}
	}
	return true;
}

function isInteger(val) {
   return /^\d+$/.test(val);
}
</script>
<style>
body{
font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
font-size:12px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
margin:0 auto;
width:400px;
padding:14px;
}

/* ----------- stylized ----------- */
#stylized{
border:solid 2px #b7ddf2;
background:#ebf4fb;
}
#stylized h1 {
font-size:14px;
font-weight:bold;
margin-bottom:8px;
}
#stylized p{
font-size:13px;
color:#666666;
margin-bottom:20px;
/*border-bottom:solid 1px #b7ddf2;*/
padding-bottom:10px;
}
#stylized label{
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
}
#stylized .small{
color:#666666;
display:block;
font-size:11px;
font-weight:normal;
text-align:right;
width:140px;
}
#stylized  input[type="text"]{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#subbtn{
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:100px;
margin:2px 0 20px 151px;
}
#stylized  #redclr {
font-size:13px;
font-weight:bold;
color:#FF0000;
}
</style>
<title>Test2</title>
</head>
<body>
<div id="stylized" class="myform">
<form method="post" name="range" action="" onsubmit="return Validate();">
<h1>Test2 form</h1>
<p>Write a script that accepts a positive integer range and, for each increment in the range, prints:</p>
<ul>
	<li>"Fizz" if a multiple of 3</li>
	<li>"Buzz" if a multiple of 5</li>
	<li>The integer itself otherwise. </li>
	<li> Do the same as question 1, except in addition to the previous rules, now it prints "Bazz" instead of an integer after consecutive Fizzes/Buzzes.</li>
</ul>
<?php
if( isset($_POST['start_range']) && isset($_POST['end_range']) ) {
  echo $msg;
}
?>
<p>Enter a number of range</p>
<label>Start range</label>
<input name="start_range" type="text" size="3" /> 
<label>End range</label><input name="end_range" type="text" size="3" /> 
<br/><br/>
<input name="submit" type="submit" value="Submit" id="subbtn"/>
<div class="spacer"></div>
</form>
</div>
</body>
</html>
