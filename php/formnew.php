

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
background-image:url('wallpaper.jpg');
font-style:30px;
font-weight:bold;
Color:white;

}
h1 {
margin-left: 70px;
}
form li {
list-style: none;
margin-bottom: 5px;
}

form ul li label{
float: left;
clear: left;
width: 100px;
text-align: right;
margin-right: 10px;
font-family:Verdana, Arial, Helvetica, sans-serif;
font-size:14px;
}

form ul li input, select, span {
float: left;
margin-bottom: 10px;
}

form textarea {
float: left;
width: 350px;
height: 150px;
}

[type="submit"] {
clear: left;
margin: 20px 0 0 230px;
font-size:18px
}

p {
margin-left: 70px;
font-weight: bold;
}
#register{
text-align:center;
margin:100px 0px;

}


#button1{
width:250px;
padding:10px;
border-radius:5px;
outline:0px;
}
#button2{
width:250px;
padding:10px;
border-radius:5px;
outline:0px;
}
#button3{
width:250px;
padding:10px;
border-radius:5px;
outline:0px;
}
#button4{
width:250px;
padding:10px;
border-radius:5px;
outline:0px;
}
#button5{
width:250px;
padding:10px;
border-radius:5px;
outline:0px;
}
#button6{
width:250px;
padding:10px;
border-radius:5px;
outline:0px;
}
#button7{
width:250px;
padding:10px;
border-radius:5px;
outline:0px;
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
p{
font-size:20px;
Color:white;

}

</style>

</head>
<body>
<a href="homepage.php">Home</a>
<div id="register">
<body>
<h1>Registration Form</h1><br>

<form action="" name="registration" method="POST" >
<ul>
<li><label for="userid" >User id:</label></li>
<li><input type="text" name="user_id" size="12"  id="button1" required></li>
<li><label for="passid">Password:</label></li>
<li><input type="password" name="pass" size="12" id="button2" required></li>
<li><label for="username">Name:</label></li>
<li><input type="text" name="u_name" size="50"  id="button3" required></li>
<li><label for="address">Address:</label></li>
<li><input type="text" name="u_address" size="50"  id="button4" required></li>
<li><label for="country">State:</label></li>
<li><select name="u_state">
<option selected="" value="Default">Please Select a State</option>
<option value="AF">GUJARAT</option>
<option value="AL">MAHARASHTRA</option>
<option value="DZ">ORISSA</option>
<option value="AS">KARNATAKA</option>
<option value="AD">HARYANA</option>
<option value="AF">ANDHRA PRADESH</option>
<option value="AL">TELANGANA</option>
<option value="DZ">DELHI</option>
<option value="AS">MADHYAPRADESH</option>
<option value="AD">ASSAM</option>
</select></li>
<li><label for="zip">Phone No:</label></li>
<li><input type="text" name="phone_no"  id="button5" required></li>
<li><label for="email">Email:</label></li>
<li><input type="text" name="u_email" size="50"  id="button6" required></li>
<li><label id="gender">Sex:</label></li>
<li><input type="radio" name="sex" value="Male" /><span>Male</span></li>
<li><input type="radio" name="sex" value="Female" /><span>Female</span></li>
<li><label>Language:</label></li>
<li><input type="radio" name="lang" value="en" checked /><span>English</span></li>
<li><input type="radio" name="lang" value="noen" /><span>Non English</span></li>
<li><label for="desc">About:</label></li>
<li><textarea name="u_about" id="desc"></textarea></li><br>

<li><input type="submit" name="sbmt" value="Submit"  id="button7"/></li>

</ul>
<script type="text/javascript" src="validate.js"></script>
</form>
</div>
<?php
if( isset($_POST['sbmt']) ){
$user_id = $_POST['user_id'];
$pass = $_POST['pass'];
$u_name =  $_POST['u_name'];
$u_address = $_POST['u_address'];
$u_state = $_POST['u_state'];
$phone_no = $_POST['phone_no'];
$u_email = $_POST['u_email'];
$sex =  $_POST['sex'];
$language = $_POST['lang'];
$u_about = $_POST['u_about'];
// user_id, password , name ,address , state , phone_no , email , sex, language, about





// Check connection

$servername = "localhost";
$username = "id15569190_sports";
$password = "%*gdfAI{ku0rp{9a";
$dbname = "id15569190_sportsdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



$sql = "INSERT INTO sports ( user_id, pass, u_name, u_address, u_state, phone_no, u_email, sex, language, u_about) VALUES ( '$user_id', '$pass', '$u_name', '$u_address', '$u_state', '$phone_no', '$u_email', '$sex', '$language', '$u_about')";


if (mysqli_query($conn, $sql)){
     
     echo '<script>alert("Registration Successful");</script>';
     echo '<script>window.location.href = "homepage.php";</script>';
  
}

else
{
     
     echo '<script>alert("Please try again later");</script>';
	echo '<script>window.location.href = "homepage.php";</script>';
     
}

}

?>







</body>
</html>





