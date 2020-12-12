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


<style>
body{
margin:0;
padding:0;
font-family:sans-serif;
Color:white;
background-image:url('cardbg3.jpg');
background-size:cover;
}
.card{
position:absolute;
top:50%;
left:70%;
width:730px;
height:400px;
background:#262626;
transform:translate(-50%,-50%);
}


.card .imgBox
{
width:100%;
height:100%;
position:absolute;
top:0;
left:0;
transform-origin:bottom;
transition:1s;
transform:translateY(0) rotateX(0deg);
}

.card:hover .imgBox
{
transform:translateY(-100%) rotateX(90deg);
}
.card .details
{
position:absolute;
top:0;
left:0;
width:100%;
height:100%;
background:#262626;
transform-origin:top;
transition:.5s;
box-sizing:border-box;
padding:20px;
text-align:center;
transform:translateY(100%) rotateX(-90deg);
}


.card:hover .details
{
transform:translateY(0) rotateX(0deg);
}

.card .details .content{
position:absolute;
top:50%;
left:0;
width:100%;
transform:translateY(-50%);
}
.card .details .content h3
{
Color:#fff;
text-transform:uppercase;
}
.card .details .content h3 span
{
font-size:14px;
Color:#ff0;
text-transform:initial;
}


.btn{
background:#34b3a0;
Color:white;
font-size:1.2rem;
padding:1rem 2rem;
text-decoration:none
}

a{
padding:10px 5px;
background-color:silver;
border-radius:5px;
color:black;
font-style:italic;
font-size:20px;
text-decoration:none;
align:left;
left-align:30px;
}
a:hover{
background-color:skyblue;
}
</style>


</head>


<body>
<a href="homepage.php">Home</a>


<h1><b><center>**CATEGORIES OF MEMBERSHIP**<br> Cricket & Hockey Club</center></b></h1><br>
<h1><i>SENIOR MEMBERSHIP</i></h1>
Special 1st Year Price 5000/-Rs  per month<br>

Playing membership for those aged 30yrs or above. <br><br>
<h1><i>YOUNG ADULT MEMBERSHIP</i1></h1><br>
Cost 6000/-Rs  per month<br>

Playing membership for those aged 19yrs to 29yrs. <br>
<h1><i>JUNIOR MEMBERSHIP</i></h1><br>
Cost 8000/-Rs per month<br>

Playing membership for those aged 7-18yrs. <br>
<h1> Call us for More info...</h1>
<h2>9004404010</h2>







<div class="card">
<div class="imgBox">
<img src="Image-Rotator-CS02L.jpg">
</div>
<div class="details">
<div class="content">
<h3><span> CRICKET AND HOCKEY CLUB </span></h3>
<p>We are group of enthusiastic players trying to give our best in the field and also building the culture of sport in the institute.Hockey here is all about fun.We 
not only learn to play the sport but also learn how to make a good team and take confidence back with us from what we doing.We challenge each other and strive for
 improvement every moment on the field.</p>
<a href="formnew.php" class="btn">Click here for Registration </a>
</div>
</div>
</div>




</body>
</html>
