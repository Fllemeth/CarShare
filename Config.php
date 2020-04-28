<?php

$con = mysqli_connect('127.0.0.1', 'root', 'root', 'cars');

 if ($con == false) {
     echo 'connection denied';
     echo mysqli_connect_error();
     exit();
 }
 ?>