<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title> buyAcapital </title>
</head>

<body>
<h1> Ihre Bestellung </h1>

<?php $order = $_POST["letters"];
session_start();
$minCapital = $_SESSION["minCapital"];
$vocal = 0;
$capital = 0;

echo "Sie haben \"$order\" bestellt. <br/> <br/>";
echo "Das sind: <br/>";
foreach (count_chars($order, 1) as $i => $val){
	echo "+ $val mal \"", chr ($i), "\"";
	if (chr($i) >= "A" && chr($i) <= "Z"){
		$capital += $val;
		echo ("= $capital Großbuchstaben");
		if (chr($i) == "A" ||
			chr($i) == "E" ||
			chr($i) == "I" ||
			chr($i) == "O" ||
			chr($i) == "U"){
			$vocal += $val;
			echo " und $vocal Vokale";
		}	
	}
	echo "! <br/>";
};
if ($capital >= $minCapital){
	$orderedC = $capital - $vocal;
	echo "<br/> <h3 style=\"background-color:#00FF00;\">Sie haben das Sonderangebot! </h3>";
	echo "Großbuchstaben: $capital <br/>abzüglich Vokale: $vocal <br/>= zu bezahlen: $orderedC * 1,99 € <br/>= Betrag:";
	$price = $orderedC*1.99;
	echo " $price €";
} else {
	$orderedC = $capital;
	$missing = $minCapital - $capital;
	echo "<br/> <h4 style=\"background-color:#FF4400;\"> Ihnen fehlen $missing Großbuchstaben zum Sonderangebot.</h4>";
	echo "Großbuchstaben: $capital <br/>inklusive Vokale: $vocal <br/>= zu bezahlen: $orderedC * 1,99 € = <br/>= Betrag:";
	$price = $orderedC*1.99;
	echo " $price €";
}
?>
<br/><br/>
<a href="start.php"> Neue Bestellung </a> <br/>

</body>
</html>