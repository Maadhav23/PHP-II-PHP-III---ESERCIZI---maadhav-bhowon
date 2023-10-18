<?php

echo" <form action=\"classifica_squadre.php\" method=\"post\">

<label for=\"fsquadra1\"><b>Nome squadra 1:</b></label>
<input type=\"text\" id=\"fsquadra1\" name=\"fsquadra1\" required><br><br>
<label for=\"fvinte1\">Partite vinte:</label>
<input type=\"number\" id=\"fvinte1\" name=\"fvinte1\" required><br><br>
<label for=\"fpareggiate1\">Partite pareggiate:</label>
<input type=\"number\" id=\"fpareggiate1\" name=\"fpareggiate1\" required><br><br>
<label for=\"fperse1\">Partite perse:</label>
<input type=\"number\" id=\"fperse1\" name=\"fperse1\" required><br><br>

<br>

<label for=\"fsquadra2\"><b>Nome squadra 2:</b></label>
<input type=\"text\" id=\"fsquadra2\" name=\"fsquadra2\" required><br><br>
<label for=\"fvinte2\">Partite vinte:</label>
<input type=\"number\" id=\"fvinte2\" name=\"fvinte2\" required><br><br>
<label for=\"fpareggiate2\">Partite pareggiate:</label>
<input type=\"number\" id=\"fpareggiate2\" name=\"fpareggiate2\" required><br><br>
<label for=\"fperse2\">Partite perse:</label>
<input type=\"number\" id=\"fperse2\" name=\"fperse2\" required><br><br>

<input type=\"reset\">
<input type=\"submit\" name=\"submit\"><br><br>

</form>
";

if($_SERVER['REQUEST_METHOD']=="POST"){

    $fsquadra1= $_POST["fsquadra1"];
    $fvinte1= $_POST['fvinte1'];
    $fpareggiate1= $_POST['fpareggiate1'];
    $fperse1= $_POST['fperse1'];
    
    $fsquadra2= $_POST['fsquadra2'];
    $fvinte2= $_POST['fvinte2'];
    $fpareggiate2= $_POST['fpareggiate2'];
    $fperse2= $_POST['fperse2'];
    
    
    $vittoria = 3;
    $pareggio = 1;
    
    echo"<b>DATI INSERITI : </b><br><br>";
    echo"<b>Squadra 1: </b>$fsquadra1<br><br>";
    echo"Vinte= $fvinte1<br><br>";
    echo"Pareggiate= $fpareggiate1<br><br>";
    echo"Perse= $fperse1<br><br><br><br>";
    
    echo"<b>Squadra 2: </b>$fsquadra2<br><br>";
    echo"Vinte= $fvinte2<br><br>";
    echo"Pareggiate= $fpareggiate2<br><br>";
    echo"Perse= $fperse2<br><br><br><br>";
    
    $punti1 = ($fvinte1 * $vittoria) + ($fpareggiate1 * $pareggio);
    $punti2 = ($fvinte2 * $vittoria) + ($fpareggiate2 * $pareggio);

    $partitetot1 = $fvinte1 + $fperse1 + $fpareggiate1;
    $partitetot2 = $fvinte2 + $fperse2 + $fpareggiate2;

    
    echo"<b>CLASSIFICA : <br></b><b>$fsquadra1</b>= $punti1 <br><b>$fsquadra2</b>= $punti2 <br>";
    
    if ($partitetot1 > $partitetot2) {
        echo"$fsquadra1 ha giocato piu' partite del $fsquadra2";
    }else if($partitetot1 == $partitetot2){
        echo"Tutte e due le squadre hanno giocato lo stesso numero di partite";
    }else if($partitetot1 < $partitetot2){
        echo"$fsquadra1 ha giocato meno partite del $fsquadra2";
    }
    
    
    
}
    ?>

