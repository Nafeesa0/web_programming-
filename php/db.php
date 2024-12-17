<?php
$servername="localhost";
$username="root";
$password="";
$dbname="college";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("Connection failed:".$conn->connect_error);
}
else
{
echo("Connection");
}

$sql = "CREATE TABLE Teams(
	id int(6),
	name VARCHAR(30),
	email VARCHAR(50),
	place VARCHAR(30)
)";
if($conn->query($sql) === TRUE)
{
echo"Table Teams created Successfully";
}
else
{
echo"Error creating Teams:".$conn->error;
}

$ins = "insert into Teams(id,name,email,place) 
	values(001,'john','abc@gmail.com','malappuram')";
if($conn->query ($ins) === TRUE)
{
echo"Insert succcessfully";
}
else
{
echo"Error creating table:".$conn->error;
}
$conn->close();
?>