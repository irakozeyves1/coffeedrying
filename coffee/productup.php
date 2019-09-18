





<center>



<?php include("conection.php");?>
<?php
$id =$_REQUEST['p_id'];
$result=mysql_query("select * from product where p_id='$id'")or die(mysql_error());
$rows=mysql_fetch_array($result);
$code=$rows['date'];
$price=$rows['pro_name'];
$cod=$rows['qty'];
$pri=$rows['price'];
$nan=$rows['suppl_name'];

 if (isset($_POST['Submit']))
 {
$code=$_REQUEST['date'];
$price=$_REQUEST['name1'];
$cod=$_REQUEST['name2'];
$pri=$_REQUEST['name3'];
$nan=$_REQUEST['name4'];

mysql_query("UPDATE product SET date='$code',pro_name='$price',qty='$cod',price='$pri',suppl_name='$nan' WHERE p_id='$id';")or die(mysql_error());
include("productupdate.php");

}
else
{

?>
</p>

<center>

<fieldset STYLE="border:4px #000 solid;background-color:#3300CC;width:430px;height:400px">
<legend STYLE="border:4px #fff solid; background-color:#669900; " ALIGN="center">
<b>PRODUCT EDIT</b>
</legend>

<form ACTION="<?php $_PHP_SELF ?>" METHOD="post">
<table BGCOLOR="#66FFCC">
			<tr BGCOLOR="#9966FF">
				<th><label FOR="input-one"><strong>date:</strong></label></th>
				<td><input  NAME="date" TYPE="text" SIZE="30" VALUE="<?php print$code?>"></td>
			</tr>	
			<tr BGCOLOR="#000000">
			<th><label FOR="input-one"><strong><font color="#FFFFFF">Product:</font></strong></label></td><td><select name="name1">
   <option value="coffee">coffee</option>
	
  </select><?php print$price?>"></td>
			</tr>	
			
			<tr BGCOLOR="#9966FF">
				<th><label FOR="input-one"><strong>Quntity:</strong></label></th>
				<td><input  NAME="name2" TYPE="text" SIZE="30" VALUE="<?php print$cod?>"></td>
			</tr>	
			<tr BGCOLOR="#990066">
				<th><label FOR="input-one"><strong>price:</strong></label></th>
				<td><input  NAME="name3" TYPE="text" SIZE="30" VALUE="<?php print$pri?>"></td>
			</tr>
			<tr BGCOLOR="#669900">
				<th><label FOR="input-one"><strong>supplier:</strong></label></th>
				<td><input  NAME="name4" TYPE="text" SIZE="30" VALUE="<?php print$nan?>"></td>
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

