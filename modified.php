<?php    
    
include "connection.php";
$search=$_POST["search"];       
$sql = "select * from contactus where Name='$search' or email='$search' or Phone_number='$search' order by Name,email,Phone_number";    
$result = mysql_query($sql);	
?>
<?php ?>
<center><span id="head1">COMPSOFT TECHNOLOGIES</span></center>
<link rel="stylesheet" type="text/css" href="page3css.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<br><br>
<?php if(mysql_num_rows($result)!=0){
?>
<table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">	
		 <tr>
			<th width="20%">Name</th>
			<th width="20%">E-mail</th>
			<th width="20%">Phone_number</th>
			<th width="100%">Message</th>
		</tr>
</table>
<?php }else {
?>
<center><h1>Oopss...No records found &#128542;</h1><center>
<?php } ?>
<?php		
while($row = mysql_fetch_object($result)){  
?>  
<html>    
    <body>	
	    <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">	
		<tr>	
			<td width="20%">   
				<?php echo $row->Name;?>  
			</td>
			<td width="20%">  
				<?php echo $row->email;?>  
			</td>
			<td width="20%">   
				<?php echo $row->Phone_number;?>  
			</td>
			<td width="100%">   
				<?php echo $row->Message;?>  
			</td>
		</tr>
		</table> 		
	</body>    
</html>    
<?php } ?>
