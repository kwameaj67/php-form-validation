<?php

function OpenConnection()
{
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "vokacom";     //name of database you are using

    $conn = new mysqli($db_host, $db_user,$db_pass,$db_name) or die("Connection failed!".$conn -> error);
    return $conn;
}
function CloseConnection($conn){
    $conn -> close();
}


// $number = 1;
// while($number <= 0){
//     echo "the number is: $number";
// }