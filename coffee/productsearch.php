<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>coffe drying management</title>


<?php require_once("authi.php");
 ?>


</head>

<body style="background-image:url(PHOTO/bg.jpg) ">
 
 
 
 
 
 
 <div style="background-color:#99CCFF; width:800px; height:280px; border-style:ridge; border-bottom-style:inset; border-collapse:collapse; margin:0px auto 0px auto">
 
<div style="background-color:#666666; width:800px; height:140px"><img src="PHOTO/HEAD1.png" /></div>
<div style="background-color:#99CCFF; width:800px; height:40px"> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<style type="text/css" media="screen">
body{ behavior:url("csshover2.htc"); }
.pd_menu_01 {float:left; padding:0; margin:0;color: #FFFFFF;background: #0000A0;width:100%; border:solid 1px #004080;clear:both;} /*Color navigation bar normal mode*/
.pd_menu_01  a, .pd_menu_01 a:visited {
font-family:Arial, Helvetica, sans-serif;
font-style:normal;
font-weight:bold;
font-size:12px;
color: #FFFFFF;
background-color: #0000A0;
text-decoration: none;
}
.pd_menu_01 ul {list-style-type:none;padding:0; margin:0;}
.pd_menu_01 ul li {float:left; position:relative; z-index:auto !important ; z-index:1000 ; border-right:solid 1px #004080; border-left:solid 1px #004080;}
.pd_menu_01 ul li a {color: #FFFFFF;background: #0000A0;float:none !important ; float:left ; display:block; height:30px; line-height:30px; padding:0 10px 0 10px; text-decoration:none; }
.pd_menu_01 ul li ul {display:none; border:none;color: #FFFFFF;background: #0000A0; width:1px}
.pd_menu_01 ul li:hover a {background-color:#008000; text-decoration:none; color:#FFFF00;} /*Color main cells hovering mode*/
.pd_menu_01 ul li:hover ul {display:block;  position:absolute; z-index:999; top:29px; margin-top:1px; left:0;}
.pd_menu_01 ul li:hover ul li a {display:block; width:12em; height:auto; line-height:1.3em; margin-left:-1px; padding:5px 10px 5px 10px; border-left:solid 1px #004080; border-bottom: solid 1px #004080; background-color:#0000FF;  color:#FFFFFF;} /*Color subcells normal mode*/
.pd_menu_01 ul li:hover ul li a:hover {background-color:#CA0000; text-decoration:none;color:#FFFF00;} /*Color subcells hovering mode*/
.pd_menu_01 ul li a:hover {background-color:#008000; text-decoration:none;color:#FFFF00;} /*Color main cells hovering mode*/
.pd_menu_01 ul li a:hover ul {display:block; width:12em; position:absolute; z-index:999; top:29px; left:0; }
.pd_menu_01 ul li ul li a:visited { background-color:#0000FF;  color:#FFFFFF;} /*Color subcells normal mode*/
.pd_menu_01 ul li a:hover ul li a {display:block; width:12em; height:1px; line-height:1.3em; padding:4px 16px 4px 16px; border-left:solid 1px #004080; border-bottom: solid 1px #004080; background-color:#0000FF;  color:#FFFFFF;} 
.pd_menu_01 ul li a:hover ul li a:hover {background-color:#CA0000; text-decoration:none;color:#FFFF00;} /*Color subcells hovering mode*/
</style>
</head>
<body>

<div class="pd_menu_01 "> 
<ul><li><a href="home.php">HOME</a>
</li></ul>

<ul><li><a href="productform.php">PRODUCT</a></li></ul>
<ul><li><a href="befdryingform.php">BEFORE DRYING</a></li></ul>
<ul><li><a href="Afdrying.php">AFTER DRYING</a></li></ul>
<ul><li><a href="sellingform.php">SELLING</a></li></ul>
<ul><li><a href="#">REPORT</a>
<ul>
<li><a href="productupdate.php">PODUCT</a></li>
<li><a href="befdryingupdate.php">BEFORE DRYING</a></li>
<li><a href="Afdryingupdate.php">AFTER DRYING</a></li>
<li><a href="sellingupdate.php">SELLING</a></li>
</ul>
</li>

<ul><li><a href="index.PHP">LOGOUT</a>

</div>

</body>
</html>
</div>




<div style="width:800px; height:330px; background:#99CCFF; margin:0px auto 0px auto"><h1 align="center"; style="color:#663333; size:2">Product Search</h1>
<?php include('conection.php'); ?>

<body>
     
	    <center> <form method="post" action="productupdate.php">
 <table><tr><td> <input name="search" type="text" /></td><td> <input type="submit" value="Search" /></td></tr></table>
 
</form></center>



<div style=" max-height:200px; max-width:500px; overflow:scroll">
     
              <center>  <table cellpadding="2" cellspacing="2" border="2" bordercolor="#000000" class="table table-striped table-bordered" >


                    <thead >
                         <tr> <th>Id</th><th>Date</th><th>Product</th><th>Quantity</th><th>Price</th><th>Supplier</th><th>Update</th></tr>
                    </thead>
                    <tbody>
                        <?php
                        $search=$_REQUEST['search'];
$query="select * from product where p_id like '%$search%' or date like '%$search%' or pro_name like '%$search%' or qty like '%$search%' or price like '%$search%' or suppl_name like '%$search%'";
$query1=mysql_query($query);
                        while($row=mysql_fetch_array($query1)) {
                            $id= $row['p_id'];
                // echo out the contents of each row into a table
			    ?>
				
				<?php
              echo '<td>' . $row['p_id'] . '</td>';
				 echo '<td>' . $row['date'] . '</td>';
				 echo '<td>' . $row['pro_name'] . '</td>';
				 echo '<td>' . $row['qty'] . '</td>';
				 echo '<td>' . $row['price'] . '</td>';
				echo '<td>' . $row['suppl_name'] . '</td>';
				
				
				
	 echo"<td ><a href ='productup.php?p_id=$id'>";?><button type="button" name="Submit" onClick="return confirm('You Are Going to Update Record!!')">Update</button><?php print"</a></td>";
			
                echo "</tr>"; } ?></div>

                    </tbody>
                </table> </center></div>
</div>
<div style="width:800px; height:20px; background-color:#333333;"><center><b><font color="#FFFFFF">Designed and Developed   by NYIRAMAHIRWE Beatha  in 2016 in S6(C.S.M)
</font>
</b></center></div>
</body>
</html>


