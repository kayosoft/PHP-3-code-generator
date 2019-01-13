<?php
if(isset($_POST['submit'])){

	$num = $_POST['number'];
//Our custom function.
function generatePIN($digits = 3){
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}
 
//If I want a 4-digit PIN code.
$pin = generatePIN();
if($num == $pin){
echo $pin, '<br>';
 }else{

 	echo $pin.' is the winning number, '.$num.' did not match it thank u';

 }
//If I want a 6-digit PIN code.
// $pin = generatePIN(6);
// echo $pin;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Super3</title>
</head>
<body>
	<form method="post" action="index.php">
		<input type="number" name="number">
		<input type="submit" name="submit">
	</form>
<a href="sms.php">send</a>
</body>
</html>