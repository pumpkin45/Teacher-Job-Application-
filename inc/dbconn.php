<?php
$db = mysqli_connect("localhost","root","kuis123","kemas");

if(!$db){
    die("Connection failed " .mysqli_connect_error());
}