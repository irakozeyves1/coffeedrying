





<center>



<?php include("conection.php");?>
<?php
$id =$_REQUEST['sel_id'];
$result=mysql_query("select * from selling where sel_id='$id'")or die(mysql_error());
$rows=mysql_fetch_array($result);
$code=$rows['date'];
$price=$rows['qty'];
$cod=$rows['price'];
$pri=$rows['custo_name'];

 if (isset($_POST['Submit']))
 {
$code=$_REQUEST['date'];
$price=$_REQUEST['name1'];
$cod=$_REQUEST['name2'];
$pri=$_REQUEST['name3'];

mysql_query("UPDATE selling SET date='$code',qty='$price',price='$cod',custo_name='$pri' WHERE sel_id='$id';")or die(mysql_error());
include("sellingupdate.php");

}
else
{

?>
</p>

<center>

<fieldset STYLE="border:4px #000 solid;background-color:#3300CC;width:430px;height:400px">
<legend STYLE="border:4px #fff solid; background-color:#669900; " ALIGN="center">
<b>SELLING EDIT</b>
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
			
			<tr BGCOLOR="#9966FF">
				<th><label FOR="input-one"><strong>Price:</strong></label></th>
				<td><input  NAME="name2" TYPE="text" SIZE="30" VALUE="<?php print$cod?>"></td>
			</tr>	
			<tr BGCOLOR="#990066">
				<th><label FOR="input-one"><strong>Customer:</strong></label></th>
				<td><input  NAME="name3" TYPE="text" SIZE="30" VALUE="<?php print$pri?>"></td>
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

