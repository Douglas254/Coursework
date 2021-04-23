<?php
$host="localhost";//hosting server address
$username="root";//The username of the hosting server
$password="";//The password of the hosting web server
$dbname="MyDatabaseName";//The name of the database to be connected.

$conn=mysqli_connect($host,$username,$password,$dbname); //Line to connect to the database

if($conn)//Checking if it is connected to the database
{

echo "Database connected";

}
//if the database is not connected execute the code below
else{
die("Could not connect:".mysqli_connect_error());
}
?>