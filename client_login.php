<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page with Background Image Example</title>
  <link rel="stylesheet" href="client_login.css">

</head>
<body>
<div id="bg"></div>

<form action="client_login1.php" method="POST"> 
  <div class="title">CLIENT LOGIN</div>
  <div class="form-field">
    <input type="tel" placeholder="Phone Number" name="phone" id="phone" required/>
  </div>
  
  <div class="form-field">
    <input type="password" placeholder="Password" name="pass" id="pass" required/>                         
	</div>
  
  <div class="form-field">
    <button class="btn" type="submit" name="submit">Log in</button>
  </div>
  <div >
   <center> <span class="details">Need an account?&nbsp;<a href="client_register.php"><span style="color:orange;">Sign Up</span></a></span>
   </center>
</div>
</form>
<!-- partial -->
  
</body>
</html>
