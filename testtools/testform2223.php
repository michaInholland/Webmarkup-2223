<?php

// Check input from contact form 

$name = $_POST["name"];
$email = $_POST["email"];
$url = $_POST["url"];
$message = $_POST["message"];

print "Hello ".$name."! We contact you on email :".$email." and vistit your url  ".$url." about message : ".$message;

?>