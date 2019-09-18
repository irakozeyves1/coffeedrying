<?php
require_once('conection.php');
            $fname=$_POST['name1'];
			$lname=$_POST['name2'];
			
			
$up=mysql_query("select * from purprice") or die(mysql_error);
	if($row=mysql_fetch_array($up));
	$price=$row{'amount'};
	$price1=$price*$lname;
	
	$gender=$_POST['name3'];
			
$insert=mysql_query("INSERT INTO product(date,pro_name,qty,price,suppl_name) VALUES(now(),'$fname','$lname',$price1,'$gender')")or die(mysql_error());
$message="coffe has been recorded!!";
 print"<script>window.alert('$message');window.location='productform.php';</script>";

?>


