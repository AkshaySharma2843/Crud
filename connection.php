<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    echo " ";
}
else 
die("Connetion failed because".mysqli_connect_error());

?>