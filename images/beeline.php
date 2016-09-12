<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="http://www.niclamarino.com/wp-content/themes/verge/images/Favicon.ico" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Hello! Welcome to Beeline! official website">
    <meta name="author" content="Nicla Marino">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="beeline, save the bees, bees, boardgame">

    <title>Beeline!? - Boardgame</title>

   <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  
    <style>

body {margin: 0px; font-family: Arial}

a {text-decoration: none; 
}

h2 {color: #414141; border-bottom: 3px dashed #414141; display: table-cell}

.container {padding: 0 7%}

header {background-image: url("http://i64.tinypic.com/2062ck7.jpg"); margin:10px 0}

#top-header {display: block; width: 100%;height: 140px;}

p {margin: 10px}
#logo {display: inline-block; float: left; width: 70%; height: 140px;display: flex;
  justify-content: center;
  flex-direction: column;
  height: 100px; transition: all .25s ease-in; margin-top: 23px}
#logo img:hover {opacity: 0.8}
#contacts {display: inline-block; float: right; width: 30%; height: 140px; text-align: right; display: flex;
  justify-content: center;
  flex-direction: column; line-height: 2pt}
#contacts p:hover {color: #1db8ca}

#sub-header {padding: 0 7%; height: 60px; background-color: fff;}
#menu {float:left; display:inline-block; width: 70%; overflow: auto; height:60px}
#social {float:right; display:inline-block; width: 30%; height: 52px; text-align: right;}

#sub-header li {display: inline-block; margin-right: -4px;}
#sub-header a {color: #454545;  display:block; height: 15px;}
#sub-header a:hover {color: #fff; background-position: 0 -100%; }

.l-1, .l-2, .l-3, .l-4, .l-5 {background-size: 100% 200%;
    -webkit-transition: background-position 1s;
    -moz-transition: background-position 1s;
    transition: background-position 1s; padding:20px;}

.s-1, .s-2 {background-size: 100% 200%;
    -webkit-transition: background-position 1s;
    -moz-transition: background-position 1s;
    transition: background-position 1s; padding: 20px 0px}

.l-1, .l-2, .l-3, .l-4 { border-right: 1px solid #ebebeb;}

.l-1 {border-top: 5px solid #ea5358; 
    background-image: linear-gradient(to bottom, #fff 50%, #ea5358 50%);}
.l-2 {border-top: 5px solid #896aac; background-image: linear-gradient(to bottom, #fff 50%, #896aac 50%);}
.l-3 {border-top: 5px solid #70bb49; background-image: linear-gradient(to bottom, #fff 50%, #70bb49 50%);}
.l-4 {border-top: 5px solid #ffe532; background-image: linear-gradient(to bottom, #fff 50%, #ffe532 50%);}
.l-5 {border-top: 5px solid #fd9c42; background-image: linear-gradient(to bottom, #fff 50%, #fd9c42 50%);}

.s-1 {border-top: 5px solid #ea5358; 
    background-image: linear-gradient(to bottom, #fff 50%, #ea5358 50%);}
.s-2 {border-top: 5px solid #896aac; background-image: linear-gradient(to bottom, #fff 50%, #896aac 50%);}

#first {background-color: #1db8ca; width: 100%; height: 650px; display: block; background-image: url('http://i64.tinypic.com/2j3jxqg.jpg')}
#first a {padding: 10px 15px; border: 5px solid #fff; color: white; font-weight:bold; text-transform: uppercase; font-size:21pt;}
#first a:hover {background-color: #fff; color:#1db8ca;}

.fade {transition: all .25s ease-in;}


.twitterbird, .facebook-header {
 margin-bottom: 10px;
 width: 50px;
 height:50px;
 display:block;
}

.twitterbird { background:transparent url('http://i66.tinypic.com/27ywo7p.png') center top no-repeat; }

.twitterbird:hover {
   background-image: url('http://i68.tinypic.com/11c876w.png');
}

.facebook-header { background:transparent url('http://i63.tinypic.com/e9bz4o.png') center top no-repeat; }

.facebook-header:hover {
   background-image: url('http://i65.tinypic.com/2gvu1w8.png');
}

#beehive {width:100%; height:650px; overflow:hidden; position:relative;display:block; float: left; z-index:999 }
#more {overflow:hidden; position:relative;display:block; float: right;display: flex;
  justify-content: center;
  flex-direction: column; }

.clearfix:before, .clearfix:after {content: " "; display: table;}  
.clearfix:after {clear:both;}  
.clearfix {*zoom:1;}  

.pull-left {float:left;}
.pull-right {float:right;}



.layer div {position:absolute;}
.behive {top:20px; left:150px;}
.bee-2{top:330px; left:250px;}
.bee-1{top:100px; left:350px;}
.bee-the-change{top:280px; left:60%; width: 50%} 
.leaves{top:350px; left:0px;}

#about {background-color: #fd943a;  width: 100%; min-height: 450px; display: block; color: white; overflow: auto; background-image: url('http://i63.tinypic.com/33k4qr6.jpg');}
#about-container {padding-top: 7%}
#about h2 {color:#fff; padding-bottom: 10px; border-color: #fff; }
#about p {line-height: 21pt; padding:25px 0% 10% 0%}
#about-text {width:60%; overflow:hidden; position:relative;display:inline-block; float: left;}
#about-image {width:30%; overflow:hidden; position:relative;display:inline-block; float: right; }
#about-image img {width:100%}


#characters {background-color: #f1e376;  width: 100%; height: min-450px; display: block;text-align:center; margin-top: -20px;}
#characters h2 {padding-top:70px; padding-bottom:10px; color: #fd9039; border-color: #fd9039;}
#characters h3 {font-family: 'Lobster', cursive;}


.top_buttons {
    width: 100%;
    height: auto;
    margin: 0 auto;
    overflow: hidden;
}
.top_button {
    float: left;
    width: 25%;
}

.top_button .top_button_contents {
    position:relative;
    margin:0px 10px 0px 0px;
}

.top_button_contents img {max-width:100%}

.top_button.last .top_button_contents {
   margin:0px;
}











/*RECENT POSTS STYLING*/
#bee-characters {
	padding-top: 45px;
	padding-bottom: 45px;
}

h3 a {color: #414141}

h3 a:hover {color: #5b5b5b}

.recPost {
	width: 190px !important;
	margin-right: 7.48%;
}

.recPost:last-child {
	margin-right: 0;
	float: left !important;
}



.recPost .postContent {
	font-family: 'Arial';
	line-height: 19px;
	margin-top: 10px;
}

.hoverEffect {
	display: block;
	position: relative;
	background-image: url(http://i63.tinypic.com/33ze2j8.png);
	background-repeat: no-repeat;

	-webkit-background-size: auto;
	-moz-background-size: auto;
	background-size: auto;
}

.hoverEffect img {
	-webkit-transition: all 0.4s;
	-moz-transition: all 0.4s;
	-o-transition: all 0.4s;
	-ms-transition: all 0.4s;
	transition: all 0.4s;
}

select {
	display: none;
}

.hoverEffect a {
	display: block;
	float: left;
	width: 56px;
	height: 56px;
	position: absolute;
	top: 80px;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
	filter: alpha(opacity=0);
	opacity: 0;

	-webkit-transition: all 0.4s;
	-moz-transition: all 0.4s;
	-o-transition: all 0.4s;
	-ms-transition: all 0.4s;
	transition: all 0.4s;
}

.hoverEffect a {
	text-indent: -99999px;
}

.hoverEffect a.firstL {
	background-image: url(http://avathemes.com/HTML5/Hexagonal/images/1-Home/loupe.png);
	background-position: center center;
	background-repeat: no-repeat;
	left: 35%;
}



.hoverEffect:hover a {
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	filter: alpha(opacity=100);
	opacity: 1;
}

.hoverEffect:hover img {
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
	filter: alpha(opacity=50);
	opacity: 0.5;
}

.blogHover {
	opacity: 0;
	display:block;
	width: 100%;
	height: 246px;
	position: absolute;
	left: 0;
	top: 0;
	background-color: rgba(143,58,120,0.7);
	
	-webkit-transition: all 0.4s;
}

.blogHover a {
	display: block;
	width: 56px;
	height: 56px;
	position: absolute;
	top: 40%;
	text-indent: -9999px;
}

.blogHover a:first-child {
	left: 35%;
	background-image: url(http://avathemes.com/HTML5/Hexagonal/images/1-Home/loupe.png);
	background-repeat: no-repeat;
}

.blogHover a:last-child {
	background-image: url(http://avathemes.com/HTML5/Hexagonal/images/1-Home/link.png);
	background-repeat: no-repeat;
	right: 35%;
}

.postContainer:hover .blogHover {
	opacity : 1;
}


.row {
  width: 100%;
  margin-left: auto;
  margin-right: auto;
  margin-top: 0;
  margin-bottom: 0;
  max-width: 61.25em;
  *zoom: 1; }
  .row:before, .row:after {
    content: " ";
    display: table; }
  .row:after {
    clear: both; }
  .row .column,
  .row .columns {
    position: relative;
    padding-left: 0em;
    padding-right: 0em;
    width: 100%; }
  .row.collapse .column,
  .row.collapse .columns {
    position: relative;
    padding-left: 0;
    padding-right: 0; }
  .row .row {
    width: auto;
    margin-left: 0em;
    margin-right: 0em;
    margin-top: 0;
    margin-bottom: 0;
    max-width: none;
    *zoom: 1; }
    .row .row:before, .row .row:after {
      content: " ";
      display: table; }
    .row .row:after {
      clear: both; }
    .row .row.collapse {
      width: auto;
      margin: 0;
      max-width: none;
      *zoom: 1; }
      .row .row.collapse:before, .row .row.collapse:after {
        content: " ";
        display: table; }
      .row .row.collapse:after {
        clear: both; }

@media only screen {
  .row .column,
  .row .columns {
    position: relative;
    padding-left: 0em;
    padding-right: 0em;
    float: left; }

  .row .small-1 {
    position: relative;
    width: 8.33333%; }

  .row .small-2 {
    position: relative;
    width: 16.66667%; }

  .row .small-3 {
    position: relative;
    width: 25%; }

  .row .small-4 {
    position: relative;
    width: 33.33333%; }

  .row .small-5 {
    position: relative;
    width: 41.66667%; }

  .row .small-6 {
    position: relative;
    width: 50%; }

  .row .small-7 {
    position: relative;
    width: 58.33333%; }

  .row .small-8 {
    position: relative;
    width: 66.66667%; }

  .row .small-9 {
    position: relative;
    width: 75%; }

  .row .small-10 {
    position: relative;
    width: 83.33333%; }

  .row .small-11 {
    position: relative;
    width: 91.66667%; }

  .row .small-12 {
    position: relative;
    width: 100%; }

  .row .small-offset-1 {
    position: relative;
    margin-left: 8.33333%; }

  .row .small-offset-2 {
    position: relative;
    margin-left: 16.66667%; }

  .row .small-offset-3 {
    position: relative;
    margin-left: 25%; }

  .row .small-offset-4 {
    position: relative;
    margin-left: 33.33333%; }

  .row .small-offset-5 {
    position: relative;
    margin-left: 41.66667%; }

  .row .small-offset-6 {
    position: relative;
    margin-left: 50%; }

  .row .small-offset-7 {
    position: relative;
    margin-left: 58.33333%; }

  .row .small-offset-8 {
    position: relative;
    margin-left: 66.66667%; }

  .row .small-offset-9 {
    position: relative;
    margin-left: 75%; }

  .row .small-offset-10 {
    position: relative;
    margin-left: 83.33333%; }

  [class*="column"] + [class*="column"]:last-child {
    float: right; }

  [class*="column"] + [class*="column"].end {
    float: left; }

  .column.small-centered,
  .columns.small-centered {
    position: relative;
    margin-left: auto;
    margin-right: auto;
    float: none; } }
/* Styles for screens that are atleast 768px; */
@media only screen and (min-width: 49em) {
  .row .large-1 {
    position: relative;
    width: 8.33333%; }

  .row .large-2 {
    position: relative;
    width: 16.66667%; }

  .row .large-3 {
    position: relative;
    width: 25%; }

  .row .large-4 {
    position: relative;
    width: 33.33333%; }

  .row .large-5 {
    position: relative;
    width: 41.66667%; }

  .row .large-6 {
    position: relative;
    width: 50%; }

  .row .large-7 {
    position: relative;
    width: 58.33333%; }

  .row .large-8 {
    position: relative;
    width: 66.66667%; }

  .row .large-9 {
    position: relative;
    width: 75%; }

  .row .large-10 {
    position: relative;
    width: 83.33333%; }

  .row .large-11 {
    position: relative;
    width: 91.66667%; }

  .row .large-12 {
    position: relative;
    width: 100%; }

  .row .large-offset-1 {
    position: relative;
    margin-left: 8.33333%; }

  .row .large-offset-2 {
    position: relative;
    margin-left: 16.66667%; }

  .row .large-offset-3 {
    position: relative;
    margin-left: 25%; }

  .row .large-offset-4 {
    position: relative;
    margin-left: 33.33333%; }

  .row .large-offset-5 {
    position: relative;
    margin-left: 41.66667%; }

  .row .large-offset-6 {
    position: relative;
    margin-left: 50%; }

  .row .large-offset-7 {
    position: relative;
    margin-left: 58.33333%; }

  .row .large-offset-8 {
    position: relative;
    margin-left: 66.66667%; }

  .row .large-offset-9 {
    position: relative;
    margin-left: 75%; }

  .row .large-offset-10 {
    position: relative;
    margin-left: 83.33333%; }







a.lightbox img {
height: 150px;
border: 3px solid white;
box-shadow: 0px 0px 8px rgba(0,0,0,.3);
margin: 94px 20px 20px 20px;
}

/* Styles the lightbox, removes it from sight and adds the fade-in transition */

.lightbox-target {
position: fixed;
background: rgba(0,0,0,.7);
width: 100%;
opacity: 0;
-webkit-transition: opacity .5s ease-in-out;
-moz-transition: opacity .5s ease-in-out;
-o-transition: opacity .5s ease-in-out;
transition: opacity .5s ease-in-out;
overflow: hidden;
}

/* Styles the lightbox image, centers it vertically and horizontally, adds the zoom-in transition and makes it responsive using a combination of margin and absolute positioning */

.lightbox-target img {
margin: auto;
position: absolute;
top: 0;
left:0;
right:0;
bottom: 0;
max-height: 0%;
max-width: 0%;
border: 3px solid white;
box-shadow: 0px 0px 8px rgba(0,0,0,.3);
box-sizing: border-box;
-webkit-transition: .5s ease-in-out;
-moz-transition: .5s ease-in-out;
-o-transition: .5s ease-in-out;
transition: .5s ease-in-out;
}

/* Styles the close link, adds the slide down transition */

a.lightbox-close {
display: block;
width:50px;

height:50px;
box-sizing: border-box;
background: white;
color: black;
text-decoration: none;
position: absolute;
top: -80px;
right: 0;
-webkit-transition: .5s ease-in-out;
-moz-transition: .5s ease-in-out;
-o-transition: .5s ease-in-out;
transition: .5s ease-in-out;
}

/* Provides part of the "X" to eliminate an image from the close link */

a.lightbox-close:before {
content: "";
display: block;
height: 30px;
width: 1px;
background: black;
position: absolute;
left: 26px;
top:10px;
-webkit-transform:rotate(45deg);
-moz-transform:rotate(45deg);
-o-transform:rotate(45deg);
transform:rotate(45deg);
}

/* Provides part of the "X" to eliminate an image from the close link */

a.lightbox-close:after {
content: "";
display: block;
height: 30px;
width: 1px;
background: black;
position: absolute;
left: 26px;
top:10px;
-webkit-transform:rotate(-45deg);
-moz-transform:rotate(-45deg);
-o-transform:rotate(-45deg);
transform:rotate(-45deg);
}

/* Uses the :target pseudo-class to perform the animations upon clicking the .lightbox-target anchor */

.lightbox-target:target {
opacity: 1;
top: 0;
bottom: 0;
}

.lightbox-target:target img {
max-height: 100%;
max-width: 100%;
}

.lightbox-target:target a.lightbox-close {
top: 0px;}


footer {background-color: #1bb6c8; border-top:10px; color: #fff; padding-bottom:10px}

footer p {padding: 10px}

footer::before {content: "";
padding-top: 10px;
width: 100%;
display: block;
background: linear-gradient(90deg, #e75256 20%,  #8b67ad 20%, #8b67ad 20%, #9b59b6 40%, #9b59b6 40%, #75b84e 40%, #75b84e 60%, #ffe738 60%, #ffe738 60%, #ffe738 80%, #ff9b3c 80%, #ff9b3c 100%);
}

   </style>


	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

	<script>
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
	</script>

</body>

<header class="container">
<section id="top-header">
   <article id="logo">
       <a href="" title="Beeline!" alt="Beeline game board"><img class="fade" src="http://i64.tinypic.com/4lsm5w.png" width="150px" height="130px"></a>
    </article>
   <article id="contacts">
       <p class="fade">hello@beeline-game.com <img src="http://i67.tinypic.com/2lub2py.jpg" float="right" width="15px" alt="Beeline email"></p>
    </article>
</section>
</header>


   <section id="sub-header">

     <article id="menu">
     <nav>
        <li><a class="l-1 fade"  href="#sub-header" title="Home">Home</a>
        <li><a class="l-2 fade" href="#about" title="About">About</a>
        <li><a class="l-3 fade" href="#characters"  data-scroll title="Gameplay">Gameplay</a>
        <li><a class="l-4 fade" href="#" title="FAQ">FAQ</a>
        <li><a class="l-5 fade" href="#" title="Contacts">Contacts</a>
     </nav>
     </article>
     <article id="social">
           <nav>
        <li><a class="s-1 "  href="" title=""><span class="twitterbird fade"></span></a>
        <li><a class="s-2 "  href="" title=""><span class="facebook-header fade"></span></a>
     </nav>
     </article>
   </section>

   <section id="first">
     <article id="beehive">
          		<ul id="scene" class="scene">
		  <li class="layer" data-depth="0.00">
			<div class="background"></div>
		  </li>
		  
		  <li class="layer" data-depth="0.60">
			<div class="behive"><img src="http://i68.tinypic.com/2m4y6g3.png"></div>
		  </li>
		  
		  <li class="layer" data-depth="0.40" data-invert-y="false">
		  <div class="bee-1"><img src="http://i66.tinypic.com/r1ed1k.png" /></div>
		  </li>
		  
		  <li class="layer" data-depth="0.60">
			<div class="bee-the-change"><a class="fade" href="#" alt="Bee the change">Bee the change &#10140;</a></div>
		  </li>
		  
		  <li class="layer" data-depth="1.00">
		  <div class="bee-2"><img src="http://i65.tinypic.com/qqwenm.png"></div>
		  </li>
		  
		  <li class="layer" data-depth="2.30">
			<div class="leaves"><img src="http://andwecode.com/playground-demo/naruto-with-parallax-js/images/leaves.png"></div>
		  </li>
		</ul>
     </article>
   </section>



<script src="http://andwecode.com/playground-demo/naruto-with-parallax-js/js/jquery-1.10.2.min.js"></script>
<script src="http://andwecode.com/playground-demo/naruto-with-parallax-js/js/jquery.parallax.min.js"></script>

<script type="text/javascript">
	$(function(){
		$('#scene').parallax();
	});
</script>

<section id="about">
    <div id="about-container" class="container">
    <article id="about-text">
        <h2>Where have all the bees gone?!</h2>
        <p>Spring has sprung - birds are chirping, flowers are in bloom, and buzz of the bees...is nowhere to be heard!<br><br>
 
The Queen Bees of Beehive Lane have lost their bees. Without the scout bees, there will be no one to find new sources of nectar and pollen. Without pollination, there goes human food crops. Without the soldier bees, there’s no way to protect the hive. The Queen Bees and the human population are doomed unless they can get their worker bees back! Help your Queen Bee restore her hive, but “bee” careful - the journey is long and danger abounds.<br><br>
Join the mission to save the honeybees!</p>
     </article>
    <article id="about-image">
        <img src="http://i64.tinypic.com/2ns1bgw.png" alt="About Beeline!">
     </article>
   </div>
</section>


<section id="characters">
    <article>
       <div class="container">
        <center><h2>Characters</h2></center>
      </div>

 <div class="row" id="bee-characters">
    
    <div class="large-3 columns recPost">
    	<span class="hoverEffect" >
        	<img src="http://i64.tinypic.com/2yooj6v.jpg" alt="Queen Bee" />
              <a  class="lightbox firstL" href="#queen-bee">Zoom</a>
        </span>
        <h3>Queen Bee</h3>
        <p class="postContent">Ruler, the heart and soul, of the Hive</p>
    </div>
    
     <div class="large-3 columns recPost">
    	<span class="hoverEffect">
        	<img src="http://i63.tinypic.com/iz48s7.png" alt="Worker bee" />
              <a  class="lightbox firstL" href="#worker-bee">Zoom</a>
        </span>
        <h3>Worker bee</h3>
        <p class="postContent">Loyal Followers of Queen Bee. Perform various roles essential to the hive and human population</p>
    </div>
    
     <div class="large-3 columns recPost">
    	<span class="hoverEffect">
        	<img src="http://i66.tinypic.com/2ltrktt.png" alt="Varroa destructor" />
              <a  class="lightbox firstL" href="#varroa-destructor">Zoom</a>
        </span>
        <h3>Varroa destructor</h3>
        <p class="postContent">Parasitic Enemy of Bees. Largest threat to honeybee population </p>
    </div>
    
     <div class="large-3 columns recPost">
    	<span class="hoverEffect">
        	<img src="http://i63.tinypic.com/155idxz.png" alt="Brown bear" />
              <a  class="lightbox firstL" href="#brown-bear">Zoom</a>
        </span>
        <h3>Big brown bear</h3>
        <p class="postContent">Lover of honey (...and honeybees!)</p>
    </div>
 </div>  
<div class="lightbox-target" id="queen-bee">
   <img src="http://i67.tinypic.com/262uq1k.jpg"/>
   <a class="lightbox-close" href="#characters"></a>
</div>
<div class="lightbox-target" id="worker-bee">
   <img src="http://i67.tinypic.com/5y6q94.jpg"/>
   <a class="lightbox-close" href="#characters"></a>
</div>
<div class="lightbox-target" id="varroa-destructor">
   <img src="http://i65.tinypic.com/357q73n.jpg"/>
   <a class="lightbox-close" href="#characters"></a>
</div>
<div class="lightbox-target" id="brown-bear">
   <img src="http://i65.tinypic.com/2w37zm9.jpg"/>
   <a class="lightbox-close" href="#characters"></a>
</div>
     </article>
</section>


<footer>
   <div class="container">
       <p>2016 © Beeline</p>
   </div>
</footer>


