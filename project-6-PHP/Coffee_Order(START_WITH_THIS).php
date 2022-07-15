<html>

<head>

</head>

<body>

<h3>Order Form</h3>

<form method="post" name="form" action="coffee.php">

<table>

<tr>

<td>Coffee:</td>

<td>

<select name="coffee">

<option value="Boca Villa">Boca Villa</option>

<option value="South Beach Rhythm">South Beach Rhythm</option>

<option value="Pumpkin Paradise">Pumpkin Paradise</option>

<option value="Sumatran Sunset">Sumatran Sunset</option>

<option value="Bali Batur">Bali Batur</option>

<option value="Double Dark">Double Dark</option>

</select>

</td>

</tr>

<tr>

<td>Type:</td>

<td><input type="radio" name="types" value="Regular">Regular<br>

<input type="radio" name="types" value="Decaffeinated">Decaffeinated</td>

</tr>

<tr>

<form onsubmit="return check()" novalidate>

<td>Quantity(in pounds):</td>

<td><input type="text" name="qty"
	required minlength="1" max="100"></td>

</tr>

<tr>

<form onsubmit="return check()" novalidate>

<td>Name:</td>

<td><input type="text" name="name"
	required minlength="1" max="100"></td>
	

</tr>

<tr>

<form onsubmit="return check()" novalidate>

<td>E-mail address:</td>

<td><input type="text" name="email"
	required minlength="1" max="100"></td>

</tr>

<tr>

<form onsubmit="return check()" novalidate>

<td>Telephone#:</td>

<td><input type="text" name="tele"
	required minlength="1" max="10"></td>
	
</tr>

<tr>

<form onsubmit="return check()" novalidate>

<td>Address:</td>

<td><input type="text" name="addr"
	required minlength="1" max="100"></td>

</tr>

<tr>

<form onsubmit="return check()" novalidate>

<td>City:</td>

<td><input type="text" name="city"
	required minlength="1" max="100"></td>

</tr>

<tr>

<form onsubmit="return check()" novalidate>

<td>State:</td>

<td><input type="text" name="state"
	required minlength="1" max="2"></td>
	
</tr>

<tr>

<form onsubmit="return check()" novalidate>

<td>Zip:</td>

<td><input type="text" name="zip"
	required minlength="1" max="5"></td>
</tr>

<tr>

<td><input type="submit" name="submit" value="Submit"></td>

<td><input type="reset" name="reset" value="Reset"></td>

</tr>

</form>

</body>

</html>