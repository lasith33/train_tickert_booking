<?php require('connection.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
    <link rel="stylesheet" type="text/css" href="register.css">
		
</head>
<body>
	<section>
        <div class="container">
          <h1 class="form-title">Registration</h1>
          <form method="POST"  action="loging_register.php">
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="fullName">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter Full Name">
                </div>
                <div class="user-input-box">
                    <label for="Username">Id card no</label>
                    <input type="text" id="nic" name="nic" placeholder="Enter nic">
                </div>
                <div class="user-input-box">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter email">
                </div>
                <div class="user-input-box">
                    <label for="phonenumber">phone number</label>
                    <input type="phonenumber" id="phoneno" name="phoneno" placeholder="Enter phone number">
                </div>
                <div class="gender-details-box">
                    <span class="gender-title">Gender</span>
                    <div class="gender-category">
                        <input type="radio" name="gender" id="male">
                        <label for="male">Male</label>
                        <input type="radio" name="gender" id="female">
                        <label for="female">Female</label>
                        <input type="radio" name="gender" id="other">
                        <label for="other">other</label>
                    </div>
                </div>
                <div class="user-input-box">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter password">
                </div>
              
        
            </div>
            
            <div class="form-submit-btn">
              <input type="submit" value="register" name="register">
               
            </div>
        
          </form>
        </div>
        </section>
</body>
</html>