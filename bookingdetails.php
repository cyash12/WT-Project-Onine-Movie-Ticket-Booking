<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title> CouchPotato </title>
<!-- FavIcon links starts -->
<link rel="icon" href="images.jpg" type="image/jpg" />
<link rel="stylesheet" href="Simple-jQuery-Plugin-For-Opening-A-Popup-Window-On-Page-load\main.css">
<link rel="stylesheet" href="couchpotato.css">
<link rel="stylesheet" href="top.css">
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="header" style=" background-image: url(black.jpg); position: absolute; top: 0px; width: 100%; height: 10%; left: 0px; padding-left: 0px; margin-left: 0px; z-index:2;">
	<div style=" position: absolute; top: 8px; left: 10px;">
		<a href="onlogin2.php"> <img src="home.png" height="50px" width="60px" class="image"> </a>
	</div>

	<div class="movie">
		<a href="cpm.php"> <img src="movies.jpg" width="15%" height="10%" class="hmovies"> </a>
	</div>
	
	<div class="search">
	<form>
		<input type="text" name="search" placeholder="Search..." id="search">
	</form>
	</div>
	
	</div>

<div class="cp" style=" background-image: url(black.jpg);position: absolute; top: 69px; width: 100%; height: 80px; left: 0px; padding-left: 0px; margin-left: 0px; margin-right:0px; opacity: 0.6; z-index:3;">
<a href="couchpotato.php"><img src="logo.jpg" width="30%" height="90%" style="position: absolute; left: 15px; opacity: 100%;"/> </a>
</div>

<div style="position: absolute; top: 200px; width: 98%; left: 13px; height: 500px; background-color: #E4F2FF; padding: 10px;">
<table>
	<th> </th>
	<?php
$con = mysqli_connect("localhost","root","","wt") or die("Error " . mysqli_error($con));
$em=$_SESSION["email"];
$qry="SELECT * FROM boooking_det WHERE email='$em'";
$res=mysqli_query($con,$qry);
while($row = mysqli_fetch_assoc($res))
 {echo '<tr>';
  echo '<td>';
  echo $row['fname'];
  echo '</td>';
  echo '<td>';
  echo $row['lname'];
  echo '</td>';
  echo '<td>';
  echo $row['tname'];
  echo '</td>';
  echo '<td>';
  echo $row['mname'];
  echo '</td>';
  echo '<td>';
  echo $row['stime'];
  echo '</td>';
echo '<td>';
  echo $row['date'];
  echo '</td>';
echo '<td>';
  echo $row['row'];
  echo '</td>';
echo '<td>';
  echo $row['start_seat'];
  echo '</td>';
echo '<td>';
  echo $row['total_seat'];
  echo '</td>';
  echo '</tr>';
}

?>

</table>
</div>

<div style="background-color: #393939; position: absolute;left:0px; top: 800px; width: 100%; height: 100px; padding: 15px;">
<a href="#"><img class="customer" src="cust.png" style="width:70px; height:70px; position: absolute; left: 290px;"  /> </a>
<a href="#"><img class="fb" src="fb.png" style="width:70px; height:70px; position: absolute; left: 390px;"  /></a>
<a href="#"><img class="insta" src="insta.png" style="width:75px; height:75px; position: absolute; left: 490px;"/></a>
<a href="#"><img class="twitter" src="twit.png" style="width:75px; height:75px; position: absolute; left: 590px;" /> </a>
<a href="#"><img class="pinterest" src="pin.png" style="width:70px; height:70px; position: absolute; left: 690px;"/></a>
<a href="#"><img class="linkedin" src="link.png" style="width:70px; height:70px; position: absolute; left: 790px;"/></a>
<a href="#"><img class="youtube" src="you.png" style="width:70px; height:70px; position: absolute; left: 890px;"/></a>
<a href="#"><img class="google" src="google.png" style="width:75px; height:75px; position: absolute; left: 990px;"/></a>
</div>
<div style="background-color: black; position: absolute;left:0px; top: 900px; width: 100%; height: 60px;">
<a href="couchpotato.php"><img src="logo.jpg" style="width:180px; height:60px; position: absolute; left: 43%;"/></a>
</div>
</body>
</html>