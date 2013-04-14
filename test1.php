<?php
if(isset($_POST['submit'])) {
 $start_range   = trim($_POST["start_range"]);
 $end_range 	= trim($_POST["end_range"]); 
 require_once "common.php";
 $comObj = new common($start_range,$end_range);
 $result=$comObj->test1Display(); 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript" src="test.js"></script>
<link rel="stylesheet" href="test.css">
<title>Test1</title>
</head>
<body>
<div id="stylized" class="myform">
<form method="post" name="range" action="" onsubmit="return Validate();">
<h1>Test1 form</h1>
<p>Write a script that accepts a positive integer range and, for each increment in the range, prints:</p>
<ul>
	<li>"Fizz" if a multiple of 3</li>
	<li>"Buzz" if a multiple of 5</li>
	<li>The integer itself otherwise.</li>
</ul>
<?php
if( isset($_POST['start_range']) && isset($_POST['end_range']) ) {
  echo $result;
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
