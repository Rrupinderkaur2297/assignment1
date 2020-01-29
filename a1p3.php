<?php																	  //RUPINDER KAUR/8622297

// using for loop

function uniqueCharacters($strr){            // Checking length of string with increament operator
	for($i=0; $i < strlen($strr); $i++){
		for($j= $i +1; $j<strlen($strr); $j++){
			if($strr[$i] == $strr[$j]){
				return true;
			}
		}
	}
	return false;
}

// checking unique characters and Printing messages
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(!empty($_POST['firstname'])){
		$checck= uniqueCharacters($_POST['firstname']);
		if($checck== true){
			echo '<p> You entered some duplicate characters. </p>';
		}
		else{
			echo '<p>There are no duplicate characters.</p>';
		}
	}else{
		echo '<p> Please write something in the text box. </p>';
	}
}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Enter Text</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>

<form method="post">

	<p><label>Input String: <input type="text" name="firstname"></label></p>
	<p><input type="submit" name="submit" value="Submit String"></p>

</form>

</body>
</html>