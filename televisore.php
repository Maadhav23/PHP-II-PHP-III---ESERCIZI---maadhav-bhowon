<?php

if($_SERVER['REQUEST_METHOD']=="POST"){

$fmarca1= $_POST["fmarca1"];
$fmodello1= $_POST['fmodello1'];
$fporte1= $_POST['fporte1'];
$fhz1= $_POST['fhz1'];
$frisoluzione1= $_POST['frisoluzione1'];

$fmarca2= $_POST['fmarca2'];
$fmodello2= $_POST['fmodello2'];
$fporte2= $_POST['fporte2'];
$fhz2= $_POST['fhz2'];
$frisoluzione2= $_POST['frisoluzione2'];


echo"<b>Televisore 1: </b>$fmodello1<br><br>";
echo"Modello= $fmarca1<br><br>";
echo"Porte= $fporte1<br><br>";
echo"Refresh rate= $fhz1<br><br>";
echo"Risoluzione= $frisoluzione1<br><br><br><br>";

echo"<b>Televisore 2: </b>$fmarca2<br><br>";
echo"Modello= $fmodello2<br><br>";
echo"Porte= $fporte2<br><br>";
echo"Refresh rate= $fhz2<br><br>";
echo"Risoluzione= $frisoluzione2<br><br><br><br>";

if ($fporte1 < 2) {
    $avviso1_1="Acquistare un televisore con almeno due porte hdmi";
}else{
    $avviso1_1="OK";
}

if ($fhz1 < 50) {
    $avviso1_2="Acquistare un televisore con refresh rate almeno pari a 50Hz";
}else{
    $avviso1_2="OK";
}

if ($frisoluzione1 == ['hdready1'] || ['fullhd1']) {
    $avviso1_3="Acquistare un televisore Ultra HD o 4K";
}else{
    $avviso1_3="OK";
}



if ($fporte2 < 2) {
    $avviso2_1="Acquistare un televisore con almeno due porte hdmi";
}else{
    $avviso2_1="OK";
}

if ($fhz2 < 50) {
    $avviso2_2="Acquistare un televisore con refresh rate almeno pari a 50Hz";
}else{
    $avviso2_2="OK";
}

if ($frisoluzione2 == ['hdready2'] || ['fullhd2']) {
    $avviso2_3="Acquistare un televisore Ultra HD o 4K";
}else{
    $avviso2_3="OK";
}

echo"<b>Consiglio di acquisto</b><br>";
echo"Porte HMDI= $avviso1_1<br>";
echo"Refresh rate= $avviso1_2<br>";
echo"Risoluzione= $avviso1_3<br><br><br>";

echo"<b>Consiglio di acquisto</b><br>";
echo"Porte HMDI= $avviso2_1<br>";
echo"Refresh rate= $avviso2_2<br>";
echo"Risoluzione= $avviso2_3<br><br><br>";


}

?>