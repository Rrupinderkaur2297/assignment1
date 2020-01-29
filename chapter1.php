
<?php                                   //Rupinder Kaur- 8622297//
$base = 10;
$height = 20;
//creating variables//
$area = ($base*$height)/2;
$area = number_format($area,3);  //Using number_format function for round figures

echo '<p> The area of the triangle is:<br>' .$area. '</p>'; 
define('MY_NAME','RUPINDER KAUR');   //Creating a constant and passing a value
echo 'My full name is: <strong>' .strtoupper(MY_NAME).'</strong></p>';  //Displaying name in UPPERCASE
?>