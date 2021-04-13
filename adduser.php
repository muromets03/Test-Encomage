<?php
date_default_timezone_set("Europe/Kiev");

$date=date("Y-m-d");




$post=$_POST;
$post=$post["text"];
$link=mysqli_connect("localhost", "root", "root", "test_encomage_db");


$primer=mysqli_query($link,"INSERT INTO `users`(`ID`, `First Name`, `Last Name`, `Email`, `Create Data`, `Update Data`) VALUES (NULL, '$post[0]', '$post[1]', '$post[2]', '$date', '$date')");


//echo('<p>loh</p>')


//require 'bd.php';
?>
