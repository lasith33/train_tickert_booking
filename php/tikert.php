<?php require('connection.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Time table</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="favicon.ico" type="imge/x-icon"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="navigation.css">
		<link rel="stylesheet" type="text/css" href="infor.css">
      
 
		
</head>
<body>
	<section>
		<nav class="nav">
            <div>
            <img src="images/images.jpg" alt="logo"  class="logo">
        </div>
			<div class="header">
				<a href="">Home</a>
				<a href="">Time table</a>
				<a href="">Tickert booking</a>
				<a href="">About us</a>
			</div>
			<div class=" icons">
				<div class="fas fa-user" id="login-btn" onclick="openPopup()"></div>
			</div>
            <div class="logout" id="popup">
		<form >
            <h4>  <?php
            // Get the email from the query parameter
            if(isset($_GET['email'])){
                $email = $_GET['email'];
                echo $email;
                // Proceed with the rest of your code
            } else {
                echo "Email not provided";
            }
            ?></h4>
			<a href="home.php">Logout</a>
			<div class="button">
				<button  onclick="closePopup()">cancel</button>
		    </div>
	    </form>
	</div>
		</nav>
	</section>
<!--========tiket====-->
   <div class="ticket">
    <lable>Name</lable>
    <input type="text" name="name" placeholder="Enter tickert booking person name"><br>
    <label>From</label>
        <select>
            <option>galle</option>
            <option>hikkaduwa</option>
            <option>Ambalangoda</option>
            <option>Aluthgama</option>
            <option>Panadura</option>
            <option>Dehiwela</option>
            <option>Colombo Fort</option>
            <option>Beliatta</option>
            <option>Matara</option>
            <option>Ahangama</option>
            <option>Koggala</option>
            <option>Mirissa</option>
            <option>mardana</option>
            <option>kelaniya</option>
            <option>Polgahawela</option>
            <option>kurunegala</option>
            <option>Anuradapura</option>
        </select>
        <label>To</label>
        <select>
            <option>galle</option>
            <option>hikkaduwa</option>
            <option>Ambalangoda</option>
            <option>Aluthgama</option>
            <option>Panadura</option>
            <option>Dehiwela</option>
            <option>Colombo Fort</option>
            <option>Beliatta</option>
            <option>Matara</option>
            <option>Ahangama</option>
            <option>Koggala</option>
            <option>Mirissa</option>
            <option>mardana</option>
            <option>kelaniya</option>
            <option>Polgahawela</option>
            <option>kurunegala</option>
            <option>Anuradapura</option>
        </select><br>
    <lable>Ticker count</lable>
    <input type="text" name="count" placeholder="Enter how many tickert"><br>
    <select>
        <option name="1st">1st class</option>
        <option name="1st">2st class</option>
        <option name="1st">3st class</option>
    </select>
  </div>
       


	<footer id="footer">
		<section class="footer_wrapper mt-3 mb-md-0">
		  <div class="container px-5 px-lg-0">
			<div class="row">
			  <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
				<h5> Sri Lanka Railways</h5>
				<p class="mb-4 ps-0 company_details">Lorem ipsum dolor sit amet,consectetur adipiscing elit.duis dignissiim erat ut laorest</p>
				<div class="contact-info">
				  <ul class="list-unstyled">
					<li><a href="#"><i class="fa fa-home me-3"></i>WVJ6+J3Q, Olcott Mawatha, Colombo</a></li>
					<li><a href="#"><i class="fa fa-phone me-3"></i>154278925</a></li>
					<li><a href="#"><i class="fa fa-envelope me-3"></i>infoexample.com</a></li>
		
				  </ul>
				</div>
			  </div>
			
				  
			  <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
				<h5>Railways</h5>
				<ul class="link-widge p-0" >
				  <li><a href="#">About Us</a></li>
				  <li><a href="#">Privercy Policy</a></li>
				  <li><a href="#">Terms & Condition</a></li>
				  <li><a href="#">Product Return</a></li>
				  <li><a href="#">Wholesale Policy</a></li>
				</ul>
			  </div>
			 
			  <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
				<h5>Quck Links</h5>
				<ul class="link-widge p-0">
				  <li><a href="#">About Us</a></li>
				  <li><a href="#">Privercy Policy</a></li>
				  <li><a href="#">Terms & Condition</a></li>
				  <li><a href="#">Product Return</a></li>
				  <li><a href="#">Wholesale Policy</a></li>
				</ul>
			  </div>
			
			  <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
				<h5>News letter</h5>
				<div class="form-group mb-4">
				  <input type="email" class="form-control bg-transparent" placeholder="Enter your Email">
				  <button type="submit" class="btn main-btn">Subscribe</button>
				</div>
				
			  </div>
			</div>
		  </div>
		
		</section>
		</footer>
	<script>
		let popup = document.getElementById("popup");

		function openPopup(){
			popup.classList.add("open-popup1");
		}
		function closePopup(){
			popup.classList.remove("open-popup1");
		}
	</script>
   
	
    
</body>
</html>