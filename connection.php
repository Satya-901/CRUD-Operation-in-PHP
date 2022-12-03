<?php
// connection
$server_name = "localhost";
$user_name   = "root";
$password    = "";
$dbname      = "coip";

$conn = mysqli_connect($server_name,$user_name,$password,$dbname);
if(!$conn)
{
    echo "Error connecting";
}

?>