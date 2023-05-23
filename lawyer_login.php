<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page with Background Image Example</title>
  <link rel="stylesheet" href="lawyer_login.css">

</head>
<body>
<div id="bg"></div>

<form action="lawyer_login1.php" method="POST">
  <div class="title">LAWYER LOGIN</div>
  <div class="form-field">
    <input type="number" placeholder="Enrollment Number" name="enrollno" id="enrollno" required/>
  </div>
  
  <div class="form-field">
    <input type="password" placeholder="Password" name="pass" id="pass" required/>                         
	</div>
  
  <div class="form-field">
    <button class="btn" type="submit" name="submit">Log in</button>
  </div>
  <div >
   <center> <span class="details">Need an account?&nbsp;<a href="register.php"><span style="color:green;">Sign Up</span></a></span>
   </center>
</div>
</form>
<!-- partial -->
  
 
</body>

</html>
