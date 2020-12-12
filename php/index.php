<?php
    require 'conn.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <i><b> <h1 align="center"> PCS SPORTS CLUB</h1></b></i>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>
  <body>
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">
Login Form</div>
<div class="title signup">
Signup Form</div>
</div>
<div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab">
</div>
</div>
<div class="form-inner">
          <form action="#" class="login" method="POST">
            <div class="field">
              <input type="text" placeholder="User Name" name="u_name" required>
            </div>
<div class="field">
              <input type="password" placeholder="Password" name="u_pass" required>
            </div>
<div class="pass-link">
<a href="#">Forgot password?</a></div>
<div class="field btn">
              <div class="btn-layer">
</div>
<input type="submit" value="Login" name="log">
            </div>
<div class="signup-link">
Not a member? <a href="">Signup Now</a></div>
</form>
<form action="#" class="signup" method="POST">
<div class="field">
              <input type="text" placeholder="Full Name" name="f_name"required>
            </div>
 <div class="field">
              <input type="text" placeholder="User Name" name="u_name"required>
            </div>
<div class="field">
              <input type="password" placeholder="Password" name="u_pass"required>
            </div>
<div class="field btn">
              <div class="btn-layer">
</div>
<input type="submit" value="Signup" name="sb">
            </div>
</form>
</div>
</div>
</div>
<script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });
    </script>
	
<?php

 if( isset($_POST['sb']) ){
        	$u_name = $_POST['u_name'];
        	$f_name = $_POST['f_name'];
        	$u_pass = $_POST['u_pass'];
			


    $sql = "INSERT INTO abc (f_name, u_name, u_pass) VALUE ( '$f_name', '$u_name', '$u_pass')";

if (mysqli_query($conn, $sql))
  {
    echo '<script>alert("Registration Successful");</script>';
     echo '<script>window.location.href = "homepage.php";</script>';
  } else 
  {
	echo "Error Occured;" . $sql . "<br>" . mysqli_error($conn);
  }
  }
 
 
 else 
 if(isset($_POST['log']) ){
    	$u_name = $_POST['u_name'];
    	$u_pass = $_POST['u_pass'];
    
    	$sql = "SELECT * FROM abc WHERE u_name = '$u_name' ";
    	$result = mysqli_query($conn, $sql);
    	
    	if (mysqli_num_rows($result) > 0){
    	    while($user = mysqli_fetch_assoc($result)){
    	   if( $u_name == $user['u_name'] && $u_pass == $user['u_pass'] ){
    	       $_SESSION['u_name'] = $u_name;
    	      	echo '<script>window.location.href = "homepage.php";</script>';
     
		
			   } else{
    	            echo "Error";
    	        }
    	        
    	    }
    	}
        }
        
        
        
        

?>
  </body>
</html>
