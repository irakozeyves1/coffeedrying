





<center>



<?php include("conection.php");?>
<?php
$id =$_REQUEST['sel_id'];
$result=mysql_query("select sel_id,amount from sell_price where sel_id='$id'")or die(mysql_error());
$rows=mysql_fetch_array($result);
$code=$rows['amount'];



 if (isset($_POST['Submit']))
 {
$code=$_REQUEST['date'];



mysql_query("UPDATE sell_price SET amount='$code' WHERE sel_id='$id';")or die(mysql_error());
include("sellingform.php");

}
else
{

?>
</p>

<center>

<fieldset STYLE="border:4px #000 solid;background-color:#3300CC;width:430px;height:400px">
<legend STYLE="border:4px #fff solid; background-color:#669900; " ALIGN="center">
<b>SELLING PRICE EDIT</b>
</legend>

<form ACTION="<?php $_PHP_SELF ?>" METHOD="post">
<table BGCOLOR="#66FFCC">
			<tr BGCOLOR="#9966FF">
				<th><label FOR="input-one"><strong>Amount:</strong></label></th>
				<td><input  NAME="date" TYPE="text" SIZE="30" VALUE="<?php print$code?>"></td>	
			
			
			
			
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

