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
<link rel="stylesheet" href="couchpotato.css">
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/style.css">
<style>
h1
{
	font-weight: bold;
	font-family: Arial Black;
	color: white;
}
label
{
	color: black;
}
table{
	border-spacing: 85px 0px;
}
fieldset{
	border: 2px dotted grey;
}
input
{
	color: black;
}
legend
{
	font-family: 
}
</style>
</head>
<?php
$_SESSION["d&d"]=$_POST["d&d"];
$_SESSION["tname"]=$_POST["tname"];
$_SESSION["stime"]=$_POST["stime"];
?>
<body>
<div style="position:absolute; left:90%; top:0.01%;">
	<p style="color: white; font-size:40px; position:absolute; z-index:15;" ><?php echo $_SESSION["fname"]; ?></p>
</div>

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

<div class="cp" style=" background-image: url(black.jpg);position: absolute; top: 59px; width: 100%; height: 80px; left: 0px; padding-left: 0px; margin-left: 0px; margin-right:0px; opacity: 0.6; z-index:3;">
<a href="couchpotato.php"><img src="logo.jpg" width="30%" height="90%" style="position: absolute; left: 15px; opacity: 100%;"/> </a>
</div>

<div style="position: absolute; top: 60px; left: 0px; width: 100%; height: 550px;">
	<img src="dhoni2.jpg" width="100%" height="550px" />
</div>

<!-- z-index:5 -->
<div style="position: absolute; top: 330px; left: 20px; z-index: 5;">
	<img src="dhoni1.jpg" width="250px" height="350px" />
</div>

<div style="position: absolute; top: 385px; left: 300px; z-index: 5;">
	<h1> M.S.Dhoni: The Untold Story </h1> <br>
</div>
<div style="position: absolute; top: 435px; left: 300px; z-index: 5; opacity:0.8;">
	<img src="U.png" width="30px" height="30px" id="u" />
	<p style="font-size: 15px; color: white;"> HINDI, TELGU, TAMIL, HINDI (ENGLISH SUBTITLE)</p>
	<img src="calender.png" width="30px" height="30px"/>
</div>
<div style="position: absolute; top: 500px; left: 340px; z-index: 5;">
	<p style="font-size: 20px; color: white;"> 30 Sept, 2016 </p>
</div>
<div style="position: absolute; top: 560px; left: 300px; z-index: 5;">
	<img src="time.png" width="30px" height="30px"/>
</div>	
<div style="position: absolute; top: 545px; left: 340px; z-index: 5;">
	<p style="font-size: 20px; color: white;"> 3 hrs 05 mins </p>
</div>	
<!-- end of z-index:5 -->

<!-- rating divs -->
<div style="position: absolute; top: 626px; left: 300px;">
	<img src="heart.png" width="110px" height="60px" />
</div>
<div style="position: absolute; top: 626px; left: 450px;">
	<img src="rating.jpg" width="140px" height="60px" />
</div>
<!-- end of rating -->

<h2 style="position: absolute; top:700px; left: 565px;"> SELECT YOUR SEATS </h2>
<img src="blueline.png" style="position: absolute; top:750px; left: 620px; width: 130px; height: 30px;" />

<img src="seats.png" style="position: absolute; top: 800px; left: 390px; width: 600px; height: 350px;" />

<div style="position: absolute; top:1200px; left: 17px; width: 1305px; height: 400px; background-color: #E4F2FF; padding:5px;">
<form action="booked.php" method="post" >
	<fieldset><legend>Personal Details</legend>
	<table>
	<tr>
	<td> <input type="text" name="bfname" required placeholder="First Name" value="<?php echo $_SESSION["fname"];?>"></td> 
	<td> <input type="text" name="blname" required placeholder="Last Name" value="<?php echo $_SESSION["lname"];?>"></td>
	<td> <input type="email" name="bemail" required placeholder="email-id" value="<?php echo $_SESSION["email"];?>" ></td>
	<td> <input type="tel" name="mno" placeholder="mobile number" ></td>
	</tr>
	</table>
	</fieldset><br>

	<fieldset><legend>Theatre Details</legend>
	<table>
	<tr>
	<td> <input type="text" required placeholder="Theatre Name" value="<?php echo $_SESSION["tname"]; ?>" ></td> 
	<td> <input type="text" required placeholder="Movie Name" value="<?php echo $_SESSION["mname"]?>" ></td>
	<td> <input type="text" required placeholder="Show Timing" value="<?php echo $_SESSION["stime"]; ?>"></td>
	<td> <input type="text" required placeholder="Date" value="<?php echo $_SESSION["d&d"]; ?>" ></td>
	</tr>
	</table>
	</fieldset><br>

	<fieldset><legend>Seating Details</legend>
	<table>
	<tr>
	<td> <input list="rownumber" required name="row" placeholder="Row Number">
				<datalist id="rownumber">
					<option value="A">
					<option value="B">
					<option value="C">
					<option value="D">
					<option value="E">
				</datalist> </td> 
	<td> <input list="firstseatnumber" required name="feat" placeholder="First Seat Number">
				<datalist id="firstseatnumber">
					<option value="1">
					<option value="2">
					<option value="3">
					<option value="4">
					<option value="5">
					<option value="6">
					<option value="7">
					<option value="8">
					<option value="9">
					<option value="10">
					<option value="11">
				</datalist></td>
	<td> <input list="seatnumber" name="tseat" required placeholder="Number of Seats">
				<datalist id="seatnumber">
					<option value="1">
					<option value="2">
					<option value="3">
					<option value="4">
					<option value="5">
					<option value="6">
					<option value="7">
					<option value="8">
					<option value="9">
					<option value="10">
					<option value="11">
				</datalist></td>

	</tr>
	</table>
	</fieldset></br>
	<input type="image" src="booknow.png" style="position: absolute; left:1147px; top: 335px; width: 150px; height: 50px;"/>
</form>
</div>

<div style="background-color: #393939; position: absolute;left:0px; top: 1630px; width: 100%; height: 100px; padding: 15px;"> 
<a href="#"><img class="customer" src="cust.png" style="width:70px; height:70px; position: absolute; left: 290px;"  /> </a>
<a href="#"><img class="fb" src="fb.png" style="width:70px; height:70px; position: absolute; left: 390px;"  /></a>
<a href="#"><img class="insta" src="insta.png" style="width:75px; height:75px; position: absolute; left: 490px;"/></a>
<a href="#"><img class="twitter" src="twit.png" style="width:75px; height:75px; position: absolute; left: 590px;" /> </a>
<a href="#"><img class="pinterest" src="pin.png" style="width:70px; height:70px; position: absolute; left: 690px;"/></a>
<a href="#"><img class="linkedin" src="link.png" style="width:70px; height:70px; position: absolute; left: 790px;"/></a>
<a href="#"><img class="youtube" src="you.png" style="width:70px; height:70px; position: absolute; left: 890px;"/></a>
<a href="#"><img class="google" src="google.png" style="width:75px; height:75px; position: absolute; left: 990px;"/></a>
</div>
<div style="background-color: black; position: absolute;left:0px; top: 1730px; width: 100%; height: 60px;">
<a href="couchpotato.php"><img src="logo.jpg" style="width:180px; height:60px; position: absolute; left: 43%;"/></a>
</div>
</body>
</html>