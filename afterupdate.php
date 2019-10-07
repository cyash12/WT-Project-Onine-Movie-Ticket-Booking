<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title> CouchPotato </title>
<!-- FavIcon links starts -->
<link rel="icon" href="images.jpg" type="image/jpg" />
<link rel="stylesheet" href="couchpotato.css">
<style>
h1
{
	font-weight: bold;
	font-family: Arial Black;
	color: white;
}
.table1{
width:131px;}
tr,td
{
	text-align: left;
}
</style>
</head>
<?php
$connection=mysqli_connect('localhost','root','','wt');  
$userfname= $_POST["mname"];
$userlname= $_POST["hall"];
$useremail= $_POST["user_interest"];
$userpass=$_POST["price"]; 

echo '<script type="text/javascript">alert("now");</script>';
$qry="UPDATE big_cinema_imax_wadala SET mov_name='$userfname',hall='$userlname',price='$userpass' WHERE stime='11:30'";
if(mysqli_query($connection, $qry))
{ echo '<script type="text/javascript">alert("Movie List Updated");</script>';}
?>
<body>

<div class="header" style=" background-image: url(black.jpg); position: absolute; top: 0px; width: 100%; height: 10%; left: 0px; padding-left: 0px; margin-left: 0px; z-index:2;">
	<div style=" position: absolute; top: 8px; left: 10px;">
		<a href="couchpotato.php"> <img src="home.png" height="50px" width="60px" class="image"> </a>
	</div>

	<div class="movie">
		<a href="cpm.php"> <img src="movies.jpg" width="15%" ;style="padding-left:70px;" height="60%" class="hmovies"> </a>
	</div>
	
	<div class="search">
	<form>
		<input type="text" name="search" placeholder="Search..." id="search">
	</form>
	</div>
	
	<div class="signin">
		<a href="./update.php"><button id="sign_in"> UP-DATE </button></a>		
	</div>	

<div class="cp" style=" background-image: url(black.jpg);position: absolute; top:60px; width: 100%; height: 80px; left: 0px; padding-left: 0px; margin-left: 0px; margin-right:0px; opacity: 0.6; z-index:3;">
<a href="couchpotato.php"><img src="logo.jpg" width="30%" height="90%" style="position: absolute; left: 15px;"/> </a>
</div>

<div style="width:35%; background-color:white; position:absolute; top:160px; left:10px;">
<div>
<table style="font-size:30px ; table-align:center; border:solid gray;">
<th class="table1">Movie</th>
<th class="table1">Timings</th>
<th class="table1">Hall</th>
<th class="table1">Price</th>
<?php
$con = mysqli_connect("localhost","root","","wt") or die("Error " . mysqli_error($con));
$unm="msdhoni";

$res=mysqli_query($con,"SELECT * FROM  big_cinema_imax_wadala");


while($row = mysqli_fetch_assoc($res))
 {echo '<tr>';
echo '<td>';
  echo $row['mov_name'];
  echo '</td>';
  echo '<td>';
  echo $row['stime'];
  echo '</td>';
  echo '<td>';
  echo $row['hall'];
  echo '</td>';
  echo '<td>';
  echo $row['price'];
  echo '</td>';
  echo '</tr>';
}

?>
</table>
</div>
</div>



<div style="background-color: #DCEBEF ; width: 60%; height: 507px; position: absolute;left: 39%; right:0; top:160px;">	

<table width="100%" height="500px" align="center">
	<tr>
	<td> <a href="#"> <img src="movies\inferno.jpg" width="150" height="200" name="inferno"
			onmouseover="inferno.width='250';inferno.height='300';"
			onmouseout="inferno.width='150';inferno.height='200';" /> </a>
	</td>
	<td> <a href="#"> <img src="movies\motu.jpg" width="150" height="200" name="motu"
			onmouseover="motu.width='250';motu.height='300';"
			onmouseout="motu.width='150';motu.height='200';" /> </a>
	</td>
	<td> <a href="#"> <img src="movies\dhoni.jpg" width="150" height="200" name="dhoni"
			onmouseover="dhoni.width='250';dhoni.height='300';"
			onmouseout="dhoni.width='150';dhoni.height='200';" /> </a>
	</td>
	<td> <a href="#"> <img src="movies\girl.jpg" width="150" height="200" name="girl"
			onmouseover="girl.width='250';girl.height='300';"
			onmouseout="girl.width='150';girl.height='200';" /> </a>
	</td>
	<td> <a href="#"><img src="movies\acc.jpg" width="150" height="200" name="acc"
			onmouseover="acc.width='250';acc.height='300';"
			onmouseout="acc.width='150';acc.height='200';" /> </a>
	</td>
	</tr>
	
	<tr>
	<td> <a href="#"><img src="movies\saat.jpg" width="150" height="200" name="saat"
			onmouseover="saat.width='250';saat.height='300';"
			onmouseout="saat.width='150';saat.height='200';" /> </a>
	</td>
	<td> <a href="#"><img src="movies\pink.jpg" width="150" height="200" name="pink"
			onmouseover="pink.width='250';pink.height='300';"
			onmouseout="pink.width='150';pink.height='200';" /> </a>
	</td>
	<td> <a href="#"><img src="movies\fuddu.jpg" width="150" height="200" name="fuddu"
			onmouseover="fuddu.width='250';fuddu.height='300';"
			onmouseout="fuddu.width='150';fuddu.height='200';" /> </a>
	</td>
	<td> <a href="#"><img src="movies\mirzya.jpg" width="150" height="200" name="mirzya"
			onmouseover="mirzya.width='250';mirzya.height='300';"
			onmouseout="mirzya.width='150';mirzya.height='200';" /> </a>
	</td>
	<td> <a href="#"><img src="movies\oct.jpg" width="150" height="200" name="oct"
			onmouseover="oct.width='250';oct.height='300';"
			onmouseout="oct.width='150';oct.height='200';" /> </a>
	</td>
	</tr>
</table>
</div>



<div style="background-color: #393939; position: absolute;left:0px; top: 700px; width: 1319px; height: 100px; padding: 15px;margin:0px 0px 0px 0px;">
 
<a href="#"><img class="customer" src="cust.png" style="width:70px; height:70px; position: absolute; left: 290px;"  /> </a>
<a href="#"><img class="fb" src="fb.png" style="width:70px; height:70px; position: absolute; left: 390px;"  /></a>
<a href="#"><img class="insta" src="insta.png" style="width:75px; height:75px; position: absolute; left: 490px;"/></a>
<a href="#"><img class="twitter" src="twit.png" style="width:75px; height:75px; position: absolute; left: 590px;" /> </a>
<a href="#"><img class="pinterest" src="pin.png" style="width:70px; height:70px; position: absolute; left: 690px;"/></a>
<a href="#"><img class="linkedin" src="link.png" style="width:70px; height:70px; position: absolute; left: 790px;"/></a>
<a href="#"><img class="youtube" src="you.png" style="width:70px; height:70px; position: absolute; left: 890px;"/></a>
<a href="#"><img class="google" src="google.png" style="width:75px; height:75px; position: absolute; left: 990px;"/></a>
</div>
<div style="background-color: black; position: absolute;left:0px; top: 800px; width: 100%; height: 60px;">
<a href="couchpotato.php"><img src="logo.jpg" style="width:180px; height:60px; position: absolute; left: 43%;"/></a>
</div>

</body>
</html>
