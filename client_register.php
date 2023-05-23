<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="client_style.css">
    <title>Registration form</title>
</head>
<body>
    <div class="container">
<div class="title">Registration as Client</div>
<form action="clientregister.php" method="POST">
    <div class="userdetails">
        <div class="inputbox">
            <span class="details">First Name</span>
            <input type="text" placeholder="Enter your first name " name="fname" id="fname" required>
        </div>
		<div class="inputbox">
            <span class="details">Last Name</span>
            <input type="text" placeholder="Enter your last name " name="lname" id="lname" required>
        </div>
        <div class="inputbox">
            <span class="details">Email</span>
            <input type="email" placeholder="Confirm your email" name="email" id="email" required>
        </div>
        <div class="inputbox">
            <span class="details">Mobile</span>
            <input type="tel" placeholder="Enter your Mobile Number" name="phone" id="phone" required>
        </div>
        <div class="inputbox">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password " name="pass" id="pass" required>
        </div>
		<div class="inputbox">
            <span class="details">Gender</span>
         <select name="gender" id="gender">
            <option>Male</option>
            <option>Female</option>
			<option>Prefer not to say</option>
         </select>
        </div>
        <div class="inputbox">
            <span class="details">Address</span>
            <input type="text" placeholder="Enter Address" name="address" id="address" required>
        </div>
    </div>

<div class="button">
<input type="submit" value="Register">
</div>
<div class="inputbox">
   <center> <span class="details">Already a member?&nbsp;<a href="client_login.php"><span style="color:yellow;">Login</span></a></span>
   </center>
</div>
</form>
    </div>
</body>
</html>