<?php

    $name2 = "Maadhav";
    $password2 = "Bhowon";
    $fname = $_POST['fname'];
    $fpassword = $_POST['fpassword'];

    if($fname==$name2 & $fpassword==$password2){
    echo"<b>Nome: </b><br>$fname<br><br>";
    echo"<b>Password: </b><br>$fpassword<br><br>";
    }
    else{
        echo"Il nome e la password non corrispondono! <br><br>";
    }

    echo"<b>Argomenti scelti: </b><br><br>";
    if(isset($_POST['scelta1'])){
        $scelta = $_POST['scelta1'];
        echo"-$scelta<br><br>";
    }

    if(isset($_POST['scelta2'])){
        $scelta = $_POST['scelta2'];
        echo"-$scelta<br><br>";
    }

    if(isset($_POST['scelta3'])){
        $scelta = $_POST['scelta3'];
        echo"-$scelta<br><br>";
    }

    if(isset($_POST['scelta4'])){
        $scelta = $_POST['scelta4'];
        echo"-$scelta<br><br>";
    }

    if(isset($_POST['scelta5'])){
        $scelta = $_POST['scelta5'];
        echo"-$scelta<br><br>";
    }



   
   
   



?>