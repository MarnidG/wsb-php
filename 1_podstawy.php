<?php
$firstName = "Janusz";
$lastName = "Nowak";
echo "Imie i nazwisko: $firstName $lastName<br>";
echo "Imie i nazwisko: $firstName $lastName<br>";


echo <<< DATA
<hr>
Imię: $firstName<br>
Nazwisko: $lastName<br>
DATA;


$data = <<< DATA
<hr>
Imię: $firstName<br>
Nazwisko: $lastName<br>
DATA;

echo $data;

echo <<< 'DATA'
<hr>
Imie: $firstName<br>
Nazwisko $lastName<br>
DATA;

$bin = 0b1011;
echo $bin;

$oct = 011;
echo $oct;

$hex = 0xA1;
echo $hex;

?>
