<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title> buyAcapital </title> <!--nur A im upperCase-->
</head>

<body>
<h1> Willkommen bei buyAcapital! </h1>

<p> Heute, am <?php echo date("d. M Y");?> haben wir ein Sonderangebot! <br/>
Kaufen Sie 
<?php
const MIN_CAPITAL = 10;
session_start();
$_SESSION["minCapital"]=MIN_CAPITAL; 
echo MIN_CAPITAL?> 
Großbuchstaben und Sie bekommen die Vokale umsonst! </p>

<form action="buy.php?" method="post">
Ihre Bestellung: <input type="text" name="letters"/>
<input type="Submit" value="Auswerten"/> <!--Submit Button-->
</form>

</body>
</html>