<?php  
    $servername = "localhost";  
    $username = "root";  
    $password = "";  
    $conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
    $sql = mysql_select_db ('contactdb',$conn) or die("unable to connect to database"); 
?>   