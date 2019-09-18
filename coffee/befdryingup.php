





<center>



<?php include("conection.php");?>
<?php
$id =$_REQUEST['id_bdry'];
$result=mysql_query("select id_bdry,date,qty from bdrying where id_bdry='$id'")or die(mysql_error());
$rows=mysql_fetch_array($result);
$code=$rows['date'];
$price=$rows['qty'];


 if (isset($_POST['Submit']))
 {
$code=$_REQUEST['date'];
$price=$_REQUEST['name1'];


mysql_query("UPDATE bdrying SET date='$code',qty='$price' WHERE id_bdry='$id';")or die(mysql_error());
include("befdryingupdate.php");

}
else
{

?>
</p>

<center>

<fieldset STYLE="border:4px #000 solid;background-color:#3300CC;width:430px;height:400px">
<legend STYLE="border:4px #fff solid; background-color:#669900; " ALIGN="center">
<b>COFFEE BEFOR DRYING EDIT</b>
</legend>

<form ACTION="<?php $_PHP_SELF ?>" METHOD="post">
<table BGCOLOR="#66FFCC">
			<tr BGCOLOR="#9966FF">
				<th><label FOR="input-one"><strong>date:</strong></label></th>
				<td><input  NAME="date" TYPE="text" SIZE="30" VALUE="<?php print$code?>"></td>
			</tr>	
			<tr BGCOLOR="#669900">
				<th><label FOR="input-one"><strong>Quantity:</strong></label></th>
				<td><input  NAME="name1" TYPE="text" SIZE="30" VALUE="<?php print$price?>"></td>
			</tr>	
			
			
			
			
				<tr BGCOLOR="#669900" >
				<td  COLSPAN="2" ALIGN="center"><button TYPE="submit" NAME="Submit">update</button></td>
			</tr> 
		</table>
</form>
</body>
</html>
 <?php
 }
 ?>
 
 </head>
</fieldset>
</center>

