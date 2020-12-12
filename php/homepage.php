<?php
    require 'conn.php';
    session_start();
    if( !$_SESSION['u_name'])
    { 
    header ('Location: index.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<link rel="stylesheet" href="website.css">

<title>
</title>
<style>
body
{
background: url('page.jpg') no-repeat center fixed;
background-size: cover;
background-position: cover;
font-family:Verdana;
font-size:20px;
margin:0;
line-height:26px;
width:100%;
height:100%;
position:absolute;
}

.navbar{
text-align:center;
width:100%;
background:blue;
opacity:0.5;
}
.navbar ul{
margin:0;
padding:0;
list-style:none;
position:relative;
}
.navbar ul li a{
display:block;
padding:25px;
color:white;
text-decoration:none;
width:150px;
}
.navbar ul:after
{
content:"";clear:both;
display:block;
}
.navbar ul li{
float:left;
list-style:none;
}
.navbar ul ul{
display:none;
}
.navbar ul li:hover > ul{
display:block;
}
.navbar ul li:hover a{
background-color:black;
transition:0.9s;
}
.navbar ul li: hover a{
color:white;
}
.navbar ul ul{
background:black;
padding:0;
margin:0;
position:absolute; 
top:100%;
}
.navbar ul ul li{
float:none;
position:relative;
}
.navbar ul ul li a{
padding:25px;
color:white;
width:300px;
text-align:left;
}
.navbar ul ul li a:hover {
background:pink;
color:black;
transition:0.9s;
}







#sidebar{
position:fixed;
width:150px;
height:400px;
background:#151719;
right:-200px;

opacity:0.8;
Color:black;
}
#sidebar.active{
right:0px;
}


#sidebar ul li a{
Color:rgba(230,230,230,0.9);
list-style:none;
padding:10px 10px;
border-bottom:1px solid rgba(100,100,100,0.3);
text-decoration:none;

}


#sidebar ul li:hover {
background:lightpink;
transition:0.9s;
}

#sidebar .toggle-btn{
position: absolute;
right:210px;
top:20px;
}

#sidebar .toggle-btn span{
display:block;
width:20px;
height:5px;
background:silver;
margin: 5px 0px;







.glowing {
position:absolute;
top:50%;
left:50%;
transform:translate(-50%,-50%);
}
.glowing  #glow span{
color:#fff;
font-family:verdana;
font-size:10px;
color:#fff;
display:inline-block;
animation:animate 2s linear infinite;
width:24px;
height:24px;
text-align:center;
line-height:24px;
border:1px solid rgba(255,255,255,.4);
margin:0 -2.5px;


}

@keyframes animate{
0%
{
color:#f00;
box-shadow:0 2px 10px rgba(255,0,0,1);
border:1px solid rgba(255,0,0,1);
}

33.3%
{
color:#ff0;
box-shadow:0 2px 10px rgba(255,255,0,1);
border:1px solid rgba(255,255,0,1);
}

66.6%
{
color:#0f0;
box-shadow:0 2px 10px rgba(0,255,0,1);
border:1px solid rgba(0,255,0,1);
}

100%
{
color:#f00;
box-shadow:0 2px 10px rgba(255,0,0,1);
border:1px solid rgba(255,0,0,1);
}

}
.glowing  span:nth-child(1)
{
animation-delay:0s;
}
.glowing span:nth-child(2)
{
animation-delay:0.1s;
}
.glowing span:nth-child(3)
{
animation-delay:0.2s;
}
.glowing span:nth-child(4)
{
animation-delay:0.3s;
}
.glowing span:nth-child(5)
{
animation-delay:0.4s;
}
.glowing span:nth-child(6)
{
animation-delay:0.5s;
}
.glowing span:nth-child(7)
{
animation-delay:0.6s;
}

.glowing span:nth-child(8)
{
animation-delay:0.7s;
}
.glowing span:nth-child(9)
{
animation-delay:0.8s;
}



</style>
</head>
<body>
 <header class="cd-header">
  <div class="header-wrapper">
   <div class="nav-but-wrap">
    <div class="menu-icon hover-target">
     <span class="menu-icon_line menu-icon_line-left">
     </span>
      <span class="menu-icon_line">
      </span>
      <span class="menu-icon_line menu-icon_line-right">
      </span>
    </div>
   </div>
  </div>
 </header>
  <div class="nav">
   <div class="nav_content">
    <ul class="nav_list">
     <li class="nav_list-item"><a href="homepage.php" class="hover-target">Home</a></li>
     <li class="nav_list-item"><a href="aboutus.html" class="hover-target">About us</a></li>
     <li class="nav_list-item"><a href="contact.html" class="hover-target">Contact us</a></li>
     <li class="nav_list-item"><a href="termsandconditions.html" class="hover-target">Terms & Conditions</a></li>
    </il>
   </div>
  </div>
  <script type="text/javascript" src="website.js">
</script>

<div class="navbar">
<ul>
<li><a href="#">          </a>
<li><a href="#">   Clubs </a>
<ul>
<li><a href="card.php">ACTIVE YOUTH</a></li>
<li><a href="card2.php">NEW ERA</a></li>
<li><a href="card3.php">PLAY WELL</a></li>
<li><a href="card4.php">WELL SPORT</a></li>
<li><a href="card5.php">GO RUN</a></li>

</ul>
</li>
<li><a href="pics.html">Sports Gallery</a></li>




<li><a href="#">News</a>
<ul>
<li><a href="sachin.html">Sachin Tendulkar</a></li>
<li><a href="pv.html">PV sindhu</a></li>
<li><a href="messi.html">Lionel Messi</a></li>
<li><a href="jordan.html">Michael Jordan</a></li>
<li><a href="jimmy.html">Jimmy george</a></li>
</ul>
</li>
</li>

<li><a href="#">More</a>
<ul>
<li><a href="myprj.html">SPORTS CALENDAR</a></li>

</ul>
</li>

</ul>
</div>
</body>
</html>
