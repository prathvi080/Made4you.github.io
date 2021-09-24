<?php
include "connection.php";        
$Name=$_POST["fname"];
$email=$_POST["ename"];
$Phone_number=$_POST["phno"];
$Message=$_POST["message"];
$mysql_qry="insert into contactus(Name,email,Phone_number,Message)values('$Name','$email','$Phone_number','$Message');";
if(mysql_query($mysql_qry)=== TRUE)
{
	 include 'page4.html';
}
else
{
	echo "data not inserted";
}
?>