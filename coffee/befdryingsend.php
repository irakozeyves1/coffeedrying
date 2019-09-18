<?php
require_once('conection.php');
            $names=$_POST['name1'];
			$address=$_POST['name2'];
			
			
			
			
			$insert=mysql_query("INSERT INTO bdrying(date,p_id,qty) VALUES(now(),'$names','$address')")or die(mysql_error());
$message="drying before has been recorded!!";
 print"<script>window.alert('$message');window.location='befdryingform.php';</script>";

?>

