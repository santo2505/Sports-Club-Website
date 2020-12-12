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


<h1><b><center>**CATEGORIES OF MEMBERSHIP**<br>Hockey & Basketball Club</center></b></h1><br>

<h1>SENIOR MEMBERSHIP</h1>
Special 1st Year Price 5000/-rs  per month<br>

Playing membership for those aged 30yrs or above. <br><br>
<h1>YOUNG ADULT MEMBERSHIP</h1><br>
Cost 6000/-rs  per month<br>

Playing membership for those aged 19yrs to 29yrs. <br>
<h1>JUNIOR MEMBERSHIP</h1><br>
Cost 8000/-rs per month<br>

Playing membership for those aged 7-18yrs. <br>
<h1> Call us for mor info...</h1>
<h2>9004404010</h2>




<div class="card">
<div class="imgBox">
<img src="03_big.jpg">
</div>
<div class="details">
<div class="content">
<h3><span>  HOCKEY AND BASKETBALL</span></h3>
<p>You can pay online by direct debit as an annual payment or choose to set up monthly payments by clicking one of the relevant links below to be taken to our
 payment provider GoCardless - just follow the instructions. (Please note if you choose to pay monthly you are committing to a minimum of 12 payments).</p>
<a href="formnew.php" class="btn">Click here for Registration </a>
</div>
</div>
</div>




</body>
</html>
