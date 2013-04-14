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
