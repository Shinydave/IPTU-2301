
<h1>Aufgabe 1</h1>

<?php
for ($a = 0; $a <= 100; $a++) {
    echo "$a <br>";
    }
?>

<?php
echo "<br>"; echo "<br>";
?>


<?php
for ($a = 100; $a >= 0; $a--) {
    echo "$a <br>";
    }
?>


<h1>Aufgabe 2</h1>

<?php
$Letters = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O", "P", "Q","R","S","T", "U","V", "W", "X", "Y", "Z" ];

$i = 0;

while($i < count($Letters))
{
	echo $Letters[$i]."<br>";
	$i++;
}
?>

<h1>Aufgabe 3</h1>
<?php
$i=11;

do {
echo " PHP macht Spaß  $i";
$i--;
echo"<br>";

} while ( $i>5)

?>

<h1>Aufgabe 4</h1>

<?php
$Cars = [
    "BMW" => "7er",
    "Mercedes"     => "A-Klasse",
    "Nissan"  => "X-Trail",
];
foreach($Cars as $Marke => $Serie) {
    echo "Die Automarke $Marke mit der Serie $Serie <br>";
}

?>

<h1>Aufgabe 5</h1>

GET wird im Quersytring angezeigt und POST nicht. 
GET hat eine begrenzte Länge (GET hat 255 und For unbegrenzte Zeichen).
Dateien können nur mit POST hochgeladen werden.

<h1>Aufgabe 6</h1>

<?php


if(isset($_POST["KOF"])){
    $h = $_POST ["H"];
    $w = $_POST ["W"];
    $ergebnis =  (sqrt($h * $w / 3600));
    echo round($ergebnis, 2);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="MoodleTag.php" method="POST">
<input type="number" name="H" value="<?php if(isset($h)) echo $h;?>" placeholder="H in cm" >
<input type="number" name="W" value="<?php if(isset($w)) echo $w;?>" placeholder="W in kg">
<input type="submit" name="KOF" value="LOS!">
</form>

    
</body>
</html>

