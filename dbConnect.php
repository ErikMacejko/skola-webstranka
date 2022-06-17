<?php 

//connect to database

$conn = mysqli_connect('localhost', 'Macejko', 'WTZadanie2', 'rodina');

//check connection

if(!$conn){
    echo 'Connection error : ' .mysqli_connect_error();
}


?>