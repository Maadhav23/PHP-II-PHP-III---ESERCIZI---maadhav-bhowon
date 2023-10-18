<form action="esercizio_2-4.php" method="post">

<label for="fvariabile"><b>Variabile da trasformare:</b></label>
<input type="text" id="fvariabile" name="fvariabile" required><br><br>

<input type="submit" name="submit"><br>

</form>

<?php

if($_SERVER['REQUEST_METHOD']=="POST"){

    $fvariabile= $_POST['fvariabile'];

$ffloat = floatval($fvariabile);
echo"Trasformata in float vale -->$ffloat <br>";

$finteger = intval($fvariabile);
echo"Trasformata in float vale -->$finteger <br>";

$fboolean = filter_var($fvariabile);
echo"Trasformata in boolean vale -->$fboolean <br>";

$fstring = $fvariabile;
echo"Trasformata in string vale -->$fstring ";

}
?>