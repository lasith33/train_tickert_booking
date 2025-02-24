<?php require('connection.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
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
			<!--loging window-->
	<div class="loging" id="popup">
		<form method="POST"  action="loging_register.php">
			<h3>Loging</h3>
			<lable>Email</lable><br>
			<input type="text" name="email"> <div class=" fas fa-envelope" id="envelope-btn">  </div><br>
			<lable>Password</lable><br>
			<input type="password" name="password"> <div class=" fas fa-key" id="key-btn">  </div><br>
			<p>fogot password</p>
			<p>Don't have an account? <a href="register.php">register</a></p> 
			<div class="button">
				<button name="loging" onclick="closePopup()">loging</button>
		    </div>
	    </form>
	</div>
		</nav>
	</section>
	

	<section class="banner">
		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
				<h1>Welcome to Sri Lanka Railways</h1><br><br>
			
			<div class="carousel-indicators">
				
			  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
			  <div class="carousel-item active">
				<img src="images/1.png" class="d-block w-100" alt="...">
			  </div>
			  <div class="carousel-item">
				<img src="images/2.png" class="d-block w-100" alt="...">
			  </div>
			  <div class="carousel-item">
				<img src="images/3.png" class="d-block w-100" alt="...">
			  </div>
			</div>
			
		  </div>
	</section>
  
	<section>
		<h1>See Sri Lanka by train</h1>
    <p>Sri Lanka is a fabulous place, safe, friendly and remarkably hassle-free.  Sri Lanka's railways are 
        a great way to get around and a real cultural experience.  The most scenic routes will be highlights of your visit, in 
        particular the wonderful journey from Colombo to Kandy and up into Tea Country and the coastal train from Colombo to Dutch 
        colonial Galle.  British visitors will find the stations, signal boxes and old red semaphore signals very familiar!  This page is 
        a beginner's guide to train travel in Sri Lanka.</p>


    <div class="grid-container" >
        <div class="words">
            <img src="images/lanka.png" alt="sri lanka railway map">
        </div>
        <div  class="eee">
            <p>On this page you'll find timetables & fares for the most popular trains, stations & routes:</p>
            <ul>
                <li>Colombo - Kandy - Hatton - Nuwara Eliya - Elle - Badulla</li>
                <li>Colombo - Galle - Matara</li>
                <li>Colombo - Galoya - Polonnaruwa, Batticaloa, Trincomalee</li>
                <li>Colombo - Anuradhapura - Talaimannar/Vavuniya - Jaffna</li>
                <li>Colombo commuter:  Negombo, Mt Laviniya, Kalutara, Puttalam, Avissawella</li>
            </ul>

            <h2>Colombo Fort station</h2>
                <p>Opened in 1917, Colombo Fort is Colombo's main station, right in the heart of the historic Fort area, walking distance from all
                     the sights.  All mainline & commuter trains go from here.  Colombo has a second main station one stop (2 km) to the east
                      called Maradana, most but not all trains stop here, but Colombo Fort is the best-located station to use.  See a map of 
                      Colombo showing stations.</p>

            <img src="images/colombo fort railway.png" alt="colombo fort railway"  style="padding-top: 60px;">
            
        </div>
    </div>
	</section>
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
			popup.classList.add("open-popup");
		}
		function closePopup(){
			popup.classList.remove("open-popup");
		}
	</script>
   
	
    
</body>
</html>