<?php

$idsensor = $_GET['id'];
$te= $_GET['te'];
$po=$_GET['po'];

//Connect to database

     $opendb = mysqli_connect("127.0.0.1", "root", "") or mysqli_error("Error");
     mysqli_select_db($opendb, "monitoreo");

     if ($opendb){
       mysqli_query($opendb, "INSERT INTO registros (sensorfk, po, te, tiempo) VALUES ($idsensor , $po, $te, NOW())");
       mysqli_close($opendb);
    }
?>
