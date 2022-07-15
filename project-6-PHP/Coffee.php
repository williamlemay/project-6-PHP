<?php

if(isset($_POST['submit'])){

if(empty($_POST['name'])){

echo "Please enter a name."."<br>";

}else{

$name = $_POST['name'];

}

if(empty($_POST['addr'])){

echo "Please enter an address."."<br>";

}else{

$addr = $_POST['addr'];

}

if(empty($_POST['city'])){

echo "Please enter city."."<br>";

}else{

$city = $_POST['city'];

}

if(empty($_POST['state'])){

echo "Please enter state."."<br>";

}else{

$state = $_POST['state'];

}

if(empty($_POST['zip'])){

echo "Please enter zip."."<br>";

}else{

$zip = $_POST['zip'];

}

if(empty($_POST['tele'])){

echo "Please enter a phone number."."<br>";

}else{

$tele = $_POST['tele'];

}

if(empty($_POST['email'])){

echo "Please enter an email address."."<br>";

}else{

$email = $_POST['email'];

}

if(empty($_POST['coffee'])){

echo "Please select a coffee to be purchased."."<br>";

}else{

$coffee = $_POST['coffee'];

}

if(empty($_POST['types'])){

echo "Please select regular or decaffeinated."."<br>";

}else{

$type = $_POST['types'];

}

if(empty($_POST['qty'])){

echo "Please enter a Numeric value for quantity."."<br>";

}else{

$qty = $_POST['qty'];

}

$ucost = 0;

if($coffee == "Boca Villa"){

$ucost = 7.99;

}else if($coffee == "South Beach Rhythm"){

$ucost = 8.99;

}else if($coffee == "Pumpkin Paradise"){

$ucost = 8.99;

}else if($coffee == "Sumatran Sunset"){

$ucost = 9.99;

}else if($coffee == "Bali Batur"){

$ucost = 10.95;

}else{

$ucost = 9.95;

}

$total = $qty * $ucost;

}

?>

<html>

<head>

<body>      
         <h1 style="color:black;font-size:40px;">The Coffee House</h1>        
      </body>

<style>

.borders td{

border: 1px solid black;

}

</style>

</head>

<body>

<h2>Order Summary</h2>

<table>

<tr>

<td>Name:</td>

<td><?php echo $name; ?></td>

</tr>

<tr>

<td>Address:</td>

<td><?php echo $addr; ?></td>

</tr>

<tr>

<td>City, State, Zip:</td>

<td><?php echo $city.",".$state.",".$zip; ?></td>

</tr>

<tr>

<td>Phone #:</td>

<td><?php echo $tele; ?></td>

</tr>

<tr>

<td>E-mail:</td>

<td><?php echo $email; ?></td>

</tr>

</table>

<br>

<br>

<br>

<h2>Order Information</h2>

<table style="border: 1px solid black" class="borders">

<tr>

<td>Coffee</td>

<td>Type</td>

<td>Quantity</td>

<td>Unit Cost</td>

<td>Total</td>

</tr>

<tr>

<td><?php echo $coffee; ?></td>

<td><?php echo $type; ?></td>

<td><?php echo $qty; ?></td>

<td>$<?php echo $ucost; ?></td>

<td>$<?php echo $total; ?></td>

</tr>

</table>

<a href="javascript:history.back()">Return to order form</a>

</body>

</html>