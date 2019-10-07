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
<link rel="stylesheet" href="cpm.css">
</head>

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
	
	<?php if($_SESSION['logged']='1'){echo' <div class="signin">
		<a href="logout.php"><button id="sign_in"> Log Out</button></a>		
	</div>'	;}?>
	</div>
	
</div>	

<div class="cp" style=" background-image: url(black.jpg);position: absolute; top: 59px; width: 100%; height: 80px; left: 0px; padding-left: 0px; margin-left: 0px; margin-right:0px; opacity: 0.6; z-index:3;">
<a href="couchpotato.php"><img src="logo.jpg" width="30%" height="90%" style="position: absolute; left: 15px; opacity: 100%;"/> </a>
</div>

<!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: http://www.jssor.com -->
    <!-- This code works with jquery library. -->
    <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/jssor.slider-21.1.6.mini.js" type="text/javascript"></script>
    <script type="text/javascript">
	
	       jQuery(document).ready(function ($) {
            
            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-1},{b:0,d:1000,o:1}],
              [{b:1900,d:2000,x:-379,e:{x:7}}],
              [{b:1900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:1000,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:1900,d:1600,x:-200,o:-1,e:{x:16}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
        
    </script>
    <style>
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }
        
        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>
    <div id="jssor_1" style="position: absolute; top: 60px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 1300px; height: 500px;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:1300px;height:500px;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="dhoni.jpg" title="M.S.Dhoni: The Untold Story"/>
            </div>
            
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="infernoslide.jpg" title="Inferno" />
            </div>
			
            <div data-p="225.00" data-po="80% 55%" style="display: none;">
                <img data-u="image" src="train.jpg" title="The Girl On The Train" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"> <img src="img\b05.png"/></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
		
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
    <!-- #endregion Jssor Slider End -->

<h2 style="position: absolute; top:600px; left: 620px;"> MOVIES </h2>
<img src="blueline.png" style="position: absolute; top:650px; left: 530px; width: 275px; height: 30px;" /> 

<div style="position: absolute; top:700px; width:100%; height:1460px; background-color:#E8F8F5; padding: 60px;">

	<div style="position: absolute; width: 20%; height: 450px;">
	<img src="movies\inferno.jpg" width="200" height="250" id="inferno"/> 
			<a href="infernosum.php"> <h4> INFERNO </h4></a>
			<img src="UA.png" width="25px" height="25px" id="ua"/> &nbsp;&nbsp;<img alt="Drama" src="drama.png" width="25px" height="30px" id="drama" title="Drama"/><img src="mystery.png" title="Mystery" width="25px" height="30px" id="mystery"/><img src="thriller.png" title="Thriller" width="25px" height="30px" id="thriller"/>
			<a href="theatinferno.php"><img src="booknow.png" width="200" height="45px" style="position: absolute;left: 0px; top: 370px;" id="book" /></a>
	</div>
	<div style="position: absolute; width: 20%; height: 450px; left: 23.5%;">
	<img src="movies\motu.jpg" width="200" height="250" id="motu"/> 
			<a href="motusum.php"> <h4> MOTU PATLU </h4></a>
			<img src="U.png" width="25px" height="25px" id="u"/>&nbsp;&nbsp;<img src="comedy.png" title="Comedy" width="25px" height="30px" id="comedy"/>
			<a href="theatmotu.php"><img src="booknow.png" width="200" height="45px" style="position: absolute;left: 0px; top: 370px;" id="book" />
	</div>
	<div style="position: absolute; width: 20%; height: 450px; left:42.7%">
	<img src="movies\dhoni.jpg" width="200" height="250" id="dhoni"/> 
			<a href="moviesum.php"> <h4> M.S.DHONI </h4></a>
			<img src="U.png" width="25px" height="25px" id="u"/> &nbsp;&nbsp;<img src="drama.png" title="Drama" width="25px" height="30px" id="drama"/><img src="sport.png" title="Sport" width="25px" height="30px" id="sport"/>
			<a href="theat.php"><img src="booknow.png" width="200" height="45px" style="position: absolute;left: 0px; top: 370px;" id="book" /></a>
	</div>
	<div style="position: absolute; width: 20%; height: 450px; left:62%;">
	<img src="movies\girl.jpg" width="200" height="250" id="girl"/> 
			<a href="girlsum.php"> <h4> THE GIRL ON THE TRAIN </h4></a>
			<img src="A.png" width="25px" height="25px" id="a"/> &nbsp;&nbsp;<img src="mystery.png" width="25px" height="30px" title="Mystery" id="mystery"/><img src="thriller.png" title="Thriller" width="25px" height="30px" id="thriller"/>
			<a href="theatgirl.php"><img src="booknow.png" width="200" height="45px" style="position: absolute;left: 0px; top: 370px;" id="book" />
	</div>
	<div style="position: absolute; width: 20%; height: 450px; left: 81%;">
	<img src="movies\acc.jpg" width="200" height="250" id="acc"/> 
			<a href="acc.php"> <h4> THE ACCOUNTANT </h4></a>
			<img src="A.png" width="25px" height="25px" id="a"/> &nbsp;&nbsp;<img src="drama.png" title="Drama" width="25px" height="30px" id="drama"/><img src="thriller.png" title="Thriller" width="25px" height="30px" id="thriller"/>
			<a href="theatacc.php"><img src="booknow.png" width="200" height="45px" style="position: absolute;left: 0px; top: 370px;" id="book" />	
	</div>
	
	
	
	<div style="position: absolute; width: 20%; height: 450px; top: 520px;">
	<img src="movies\saat.jpg" width="200" height="250" id="saat"/> 
			<a href="#"> <h4> SAAT UCHAKKEY </h4></a>
			<img src="A.png" width="25px" height="25px" id="a"/>&nbsp;&nbsp;<img src="drama.png" title="Drama" width="25px" height="30px" id="drama"/><img src="comedy.png" title="Comedy" width="25px" height="30px" id="comedy"/>
			<img src="booknow.png" width="200" height="45px" style="position: absolute;left: 0px; top: 370px;" id="book" />
	</div>
	<div style="position: absolute; width: 20%; height: 450px; top: 520px; left:23.5%">
	<img src="movies\pink.jpg" width="200" height="250" id="pink"/> 
			<a href="#"> <h4> PINK </h4></a>
			<img src="UA.png" width="25px" height="25px" id="ua"/>&nbsp;&nbsp;<img src="drama.png" width="25px" height="30px" title="Drama" id="drama"/><img id="thriller" src="thriller.png" title="Thriller" width="25px" height="30px"/>
			<img src="booknow.png" width="200" height="45px" style="position: absolute;left: 0px; top: 370px;" id="book" />
	</div>
	<div style="position: absolute; width: 20%; height: 450px; top:520px; left:42.7%">
	<img src="movies\fuddu.jpg" width="200" height="250" id="fuddu"/> 
			<a href="#"> <h4> FUDDU </h4></a>
			<img src="A.png" width="25px" height="25px" id="a"/>&nbsp;&nbsp;<img src="comedy.png" title="Comedy" width="25px" height="30px" id="comedy"/><img id="drama" title="Drama" src="drama.png" width="25px" height="30px"/>
			<img src="booknow.png" width="200" height="45px" style="position: absolute;left: 0px; top: 370px;" id="book" />
	</div>
	<div style="position: absolute; width: 20%; height: 450px; top: 520px; left: 62%">
	<img src="movies\mirzya.jpg" width="200" height="250" id="mirzya"/> 
			<a href="#"> <h4> MIRZYA </h4></a>
			<img src="UA.png" width="25px" height="25px" id="ua"/>&nbsp;&nbsp;<img src="action.png" title="Action" width="25px" height="30px" id="action"/><img src="drama.png" title="Drama" width="25px" height="30px" id="drama"/><img src="romance.png" title="Romance" width="25px" height="30px" id="romance"/>
			<img src="booknow.png" width="200" height="45px" style="position: absolute;left: 0px; top: 370px;" id="book" />
	</div>
	<div style="position: absolute; width: 20%; height: 450px; top: 520px; left: 81%">
	<img src="movies\oct.jpg" width="200" height="250" id="oct"/> 
			<a href="#"> <h4> 31st OCTOBER </h4></a>
			<img src="A.png" width="25px" height="25px" id="a"/>&nbsp;&nbsp;<img src="drama.png" title="Drama" width="25px" height="30px" id="drama"/><img src="thriller.png" title="Thriller" width="25px" height="30px" id="thriller"/>
			<img src="booknow.png" width="200" height="45px" style="position: absolute;left: 0px; top: 370px;" id="book" />
	</div>
	
	
	
	<div style="position: absolute; width: 20%; height: 450px; top: 980px;">
	<img src="movies\gandhi.jpg" width="200" height="250" id="gandhi"/> 
			<a href="#"> <h4> GANDHIGIRI </h4></a>
			<img src="UA.png" width="25px" height="25px" id="ua"/>&nbsp;&nbsp;<img src="comedy.png" title="Comedy" width="25px" height="30px" id="comedy"/><img src="drama.png" title="Drama" width="25px" height="30px" id="drama"/>
			<img src="booknow.png" width="200" height="45px" style="position: absolute;left: 0px; top: 370px;" id="book" />
	</div>
	<div style="position: absolute; width: 20%; height: 450px; top: 980px; left: 23.5%;">
	<img src="movies\father.jpg" width="200" height="250" id="father"/> 
			<a href="#"> <h4> MY FATHER IQBAL </h4></a>
			<img src="U.png" width="25px" height="25px" id="u"/>&nbsp;&nbsp;<img src="drama.png" title="Drama" width="25px" height="30px" id="drama"/>
			<img src="booknow.png" width="200" height="45px" style="position: absolute;left: 0px; top: 370px;" id="book" />
	</div>
	<div style="position: absolute; width: 20%; height: 450px; top: 980px; left: 42.7%">
	<img src="movies\busan.jpg" width="200" height="250" id="busan"/> 
			<a href="#"> <h4> TRAIN TO BUSAN </h4></a>
			<img src="A.png" width="25px" height="25px" id="a"/>&nbsp;&nbsp;<img src="action.png" title="Action" width="25px" height="30px" id="action"/><img src="thriller.png" title="Thriller" width="25px" height="30px" id="thriller"/>
			<img src="booknow.png" width="200" height="45px" style="position: absolute;left: 0px; top: 370px;" id="book" />
	</div>
	<div style="position: absolute; width: 20%; height: 450px; top: 980px; left:62%">
	<img src="movies\anna.jpg" width="200" height="250" id="anna"/> 
			<a href="#"> <h4> ANNA </h4></a>
			<img src="U.png" width="25px" height="25px" id="u"/>&nbsp;&nbsp;<img src="drama.png" title="Drama" width="25px" height="30px" id="drama"/>
			<img src="booknow.png" width="200" height="45px" style="position: absolute;left: 0px; top: 370px;" id="book" />
	</div>
	<div style="position: absolute; width: 20%; height: 450px; top: 980px; left: 81%">
	<img src="movies\master.jpg" width="200" height="250" id="master"/> 
			<a href="#"> <h4> MASTERMINDS </h4></a>
			<img src="A.png" width="25px" height="25px" id="a"/>&nbsp;&nbsp;<img src="action.png" title="Action" width="25px" height="30px" id="action"/><img src="comedy.png" title="Comedy" width="25px" height="30px" id="comedy"/><img id="thriller" title="Thriller" src="thriller.png" width="25px" height="30px"/>
			<img src="booknow.png" width="200" height="45px" style="position: absolute;left: 0px; top: 370px;" id="book" />
	</div>
</div> 

<div style="background-color: #393939; position: absolute;left:0px; top: 2250px; width: 100%; height: 100px; padding: 15px;">
 
<a href="#"><img class="customer" src="cust.png" style="width:70px; height:70px; position: absolute; left: 290px;"  /> </a>
<a href="#"><img class="fb" src="fb.png" style="width:70px; height:70px; position: absolute; left: 390px;"  /></a>
<a href="#"><img class="insta" src="insta.png" style="width:75px; height:75px; position: absolute; left: 490px;"/></a>
<a href="#"><img class="twitter" src="twit.png" style="width:75px; height:75px; position: absolute; left: 590px;" /> </a>
<a href="#"><img class="pinterest" src="pin.png" style="width:70px; height:70px; position: absolute; left: 690px;"/></a>
<a href="#"><img class="linkedin" src="link.png" style="width:70px; height:70px; position: absolute; left: 790px;"/></a>
<a href="#"><img class="youtube" src="you.png" style="width:70px; height:70px; position: absolute; left: 890px;"/></a>
<a href="#"><img class="google" src="google.png" style="width:75px; height:75px; position: absolute; left: 990px;"/></a>
</div>
<div style="background-color: black; position: absolute;left:0px; top: 2350px; width: 100%; height: 60px;">
<a href="couchpotato.php"><img src="logo.jpg" style="width:180px; height:60px; position: absolute; left: 43%;"/></a>
</div>
</body>
</html>