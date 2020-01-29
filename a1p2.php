<!doctype html>             <!-- RUPINDER KAUR - 8622297 --> 
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Simple HTML Form</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"=="POST"]) {

	if (!empty($_POST['firstname'])  &&
	!empty($_POST['lastname']) &&
	isset($_POST['newsletter']) &&
	is_numeric($_POST['age']))   //for numeric value 
	{
		// creating variables
		$firstname = $_POST['firstname'];   
		$lastname = $_POST['lastname'];
		$newsletter = $_POST['newsletter'];
		$age = $_POST['age'];

		echo "<p> First Name: $firstname <br>
		Last Name: $lastname <br>
		Age: $age <br>
		Newsletter: $newsletter </p>";
	}

	// Printing error message if all fields are blank
	else if(empty ($_POST ['firstname'] )&&
	empty($_POST['lastname']) &&
	!isset($_POST['newsletter']) &&
	empty($_POST['age']))
	{
		echo "<h1> Please fil all the fields of form </h1>";
	}

	// Printing error message if any field of form is blank
	else if (empty($_POST['firstname']) ||
	empty($_POST['lastname']) || 
	!isset($_POST['newsletter']) || 
	empty($_POST['age']))
	{
		echo "<h1> Please fil the remaining fields of form </h1>";
	}
};
?>
<!-- STICKY FORMS -->
<form action="a1p2.php" method="post">

	<fieldset><legend>Account Creation:</legend>

	<p><label>First Name: <input type="text" name="firstname" size="20" maxlength="40" value="<?php if (isset($_POST['firstname'])) echo $_POST['firstname']; ?>"></label></p>
	
	<p><label>Last Name: <input type="text" name="lastname" size="20" maxlength="40" value="<?php if (isset($_POST['lastname'])) echo $_POST['lastname']; ?>"></label></p>

	<p><label>Age: <input type="text" name="age" size="20" maxlength="40" value="<?php if (isset($_POST['age'])) echo $_POST['age']; ?>"></label></p>
	
	<p><label for="newsletter">Subscribe to newsletter: </label><input type="radio" name="newsletter" value="Y"
	<?php if (isset($_POST['newsletter']) && $_POST['newsletter'] == "YES") echo 'checked="checked"';?>> Yes <input type="radio" name="newsletter" value="N"
	<?php if (isset($_POST['newsletter']) && $_POST['newsletter'] == "NO") echo 'checked="checked"';?>> No</p>

	</fieldset>

	<p><input type="submit" name="submit" value="Submit My Information"></p>

</form>

</body>
</html>