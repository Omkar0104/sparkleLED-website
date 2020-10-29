<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $massage = $_POST['massage'];	
    $sql = "INSERT INTO `trip`.`trip` (`name`, `phone`,`email`,`massage`,`dt`) VALUES ('$name', '$phone','$email','$massage', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>
<!DOCTYPE html>
<html>

<head>

	<title>Business Website</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<!-- <style>
	body {
		background-color: aqua;
		color: black;

	}
</style> -->

<body>
	<!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
		<strong>Holy guacamole!</strong> You should check in on some of those fields below.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div> -->
	<!----------NavigationBar------------>
	<section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#"><img src="img/logow.png" width="180" height="83" important></a>
			<button class="navbar-toggler" type="" data-toggle="collapse" data-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link transition" href="#top">HOME</a>
					</li>
					<li class="nav-item">
						<a class="nav-link transition" href="#about">ABOUT US</a>
					</li>
					<li class="nav-item">
						<a class="nav-link transition" href="#services">SERVICES</a>
					</li>
					<li class="nav-item">
						<a class="nav-link transition" href="#products">PRODUCTS</a>
					</li>
					<li class="nav-item">
						<a class="nav-link transition" href="#price">PRICE PLANS</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#team">OUR TEAM</a>
					</li>
					<li class="nav-item">
						<a class="nav-link transition" href="#contact">CONTACT</a>
					</li>
				</ul>
			</div>
		</nav>
	</section>
	<!---------------Slider------------>
	<div id="slider">
		<div id="headerSlider" class="carousel slide carousel-fade" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#headerSlider" data-slide-to="0" class="active"></li>
				<li data-target="#headerSlider" data-slide-to="1"></li>
				<li data-target="#headerSlider" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block img-fluid" src="img/bulb3.png" style="width:100%">
					<div class="carousel-caption">

					</div>
					<!-- <div class="carousel-item">
						<img class="d-block img-fluid" src="img/logo6.jpg" style="width:100%">
						<div class="carousel-caption">

						</div>
					</div> -->
				</div>
				<div class="carousel-item">
					<img class="d-block img-fluid" src="img/led.jpeg" style="width:100%">
					<div class="carousel-caption">

					</div>
				</div>

				<div class="carousel-item">
					<img class="d-block img-fluid" src="img/bulb8.jfif" style="width:100%">
					<div class="carousel-caption">

					</div>
				</div>

			</div>
			<a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<!----------------------------ABOUT---------------------------->
	<section id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h5 style="font-size:30px"><b>ABOUT US</b></h5>
					<div class="about-content" style="font-size:20px">
						LED lights are free of all harsh chemicals and they do not emit UV rays. LED lights are also
						100% recyclable and can significantly reduce your carbon footprint. With one LED light able to
						do the work of roughly 25 incandescent light bulbs over its lifetime, LED lights also help save
						on materials and production.
					</div>
				</div>
				<div class="col-md-6 skills-bar">
					<p>Product Quality</p>
					<div class="progress">
						<div class="progress-bar" style="width: 100%;">100%</div>
					</div>
					<p>Product Design</p>
					<div class="progress">
						<div class="progress-bar" style="width: 100%;">100%</div>
					</div>
					<p>Product Color</p>
					<div class="progress">
						<div class="progress-bar" style="width: 100%;">100%</div>
					</div>
					<p>Product Availability</p>
					<div class="progress">
						<div class="progress-bar" style="width: 100%;">100%</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!---------------Services--------------->
	<section id="services">
		<div class="container">
			<h1 style="font-size:40px"><b>Services</b></h1>
			<div class="row services">
				<div class="col-md-3 text-center">
					<div class="icon">
						<i class="fa fa-desktop"></i>
					</div>
					<h3><i>Warm White Light</i></h3>
					<p>Create a warm, cosy atmosphere with LED lighting</p>
				</div>
				<div class="col-md-3 text-center">
					<div class="icon">
						<i class="fa fa-tablet"></i>
					</div>
					<h3><i>Quality Of Light</i></h3>
					<p>Enjoy perfect light quality,instant on with no warm up time</p>
				</div>
				<div class="col-md-3 text-center">
					<div class="icon">
						<i class="fa fa-line-chart"></i>
					</div>
					<h3><i>Energy Efficient</i></h3>
					<p>Longer lifetime and uses up to 90% less energy than traditional source</p>
				</div>
				<div class="col-md-3 text-center">
					<div class="icon">
						<i class="fa fa-paint-brush"></i>
					</div>
					<h3>Dimmable</h3>
					<p>Create the right atmosphere with dimmable LED lighting</p>
				</div>
			</div>
		</div>
	</section>
	<!------------------------------products---------------------------------->
	<section id="products">
		<div class="container">
			<h1><b>Products</b></h1>
			<p class="text-center"><strong>***************Light Beyond Electricity***************</strong></p>
			<div class="row">
				<div class="col-md-4 text-center">
					<div class="profile">
						<img src="img/l3.jpg" class="team">
						<blockquote>Cooler than incandescent bulbs in operation.Instant on, unlike compact fluorescent
							bulbs.Broad range of color possibilities.Customizable lights can be controlled through a
							Bluetooth connection.</blockquote>
						<h3>LED BULB<span> </span></h3>
					</div>
				</div>
				<div class="col-md-4 text-center">
					<div class="profile">
						<img src="img/l7.jpeg" class="team">
						<blockquote>LED tube is a type of LED lamp used in fluorescent tube luminaires with G5 and G13
							bases to replace traditional fluorescent tubes. As compared to fluorescent tubes, the most
							important advantages of LED tubes are energy efficiency and long service life.</blockquote>
						<h3>TUBELIGHT<span> </span></h3>
					</div>
				</div>
				<div class="col-md-4 text-center">
					<div class="profile">
						<img src="img/l8.jpg" class="team">
						<blockquote>Everyday LED Panel light are crafted for luxury. Their powder coated aluminum
							extrusion and smooth borders are a perfect solution for your high-end interior lighting.
							Their primary usage includes lighting up of homes, office cabins etc.</blockquote>
						<h3>SLIM PANNEL<span> </span></h3>
					</div>
				</div>
				<div class="col-md-4 text-center">
					<div class="profile">
						<img src="img/l9.jpg" class="team">
						<blockquote>LED Panel Lights are extremely energy efficient and feature high efficiency
							high-quality power LED driver giving outstanding lighting performance while being extremely
							low on energy consumption.</blockquote>
						<h3>SURFACE PANNEL<span> </span></h3>
					</div>
				</div>
				<div class="col-md-4 text-center">
					<div class="profile">
						<img src="img/l10.jpg" class="team">
						<blockquote>Lowest cost over ownership of all lights.No mercury and minimal toxic materials
							required.A single lamp represents a reduction of hundreds of pounds of CO2, compared to use
							of incandescents.Possible simultaneous use in data transfer with LiFi.</blockquote>
						<h3>STREET PANNEL<span> </span></h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-------------------------Price Plans---------------------------->
	<section id="price">
		<div class="container">
			<h1><b>Price Plans</b></h1>
			<div class="row">
				<div class="col-md-4">
					<div class="single-price">
						<div class="price-head">
							<h2>LED Bulb</h2>
							<p>Rs.65-Rs.240/<span>LED bulb</span></p>
						</div>
						<div class="price-content">
							<ul>
								<li><i class="fa fa-check-circle"></i>5 watt</li>
								<li><i class="fa fa-check-circle"></i>7 watt</li>
								<li><i class="fa fa-check-circle"></i>9 watt</li>
								<li><i class="fa fa-check-circle"></i>12 watt</li>
								<li><i class="fa fa-check-circle"></i>15 watt</li>
								<li><i class="fa fa-check-circle"></i>18 watt</li>
								<li><i class="fa fa-check-circle"></i>20 watt</li>
							</ul>
						</div>
						<div class="price-button">
							<a class="buy-btn" href="cart.php">Buy Now</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single-price">
						<div class="price-head">
							<h2>Tubelight</h2>
							<p>Rs.200-Rs.500/<span>tubelight</span></p>
						</div>
						<div class="price-content">
							<ul>
								<li><i class="fa fa-times-circle"></i>12 watt</li>
								<li><i class="fa fa-times-circle"></i>15 watt</li>
								<li><i class="fa fa-check-circle"></i>18 watt</li>
								<li><i class="fa fa-check-circle"></i>20 watt</li>
								<li><i class="fa fa-check-circle"></i>24 watt</li>
								<li><i class="fa fa-times-circle"></i>28 watt</li>
								<li><i class=></i> </li>
								<li><i class=></i> </li>
							</ul>
						</div>
						<div class="price-button">
							<a class="buy-btn" href="cart2.php">Buy Now</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single-price">
						<div class="price-head">
							<h2>Slim Panel</h2>
							<p>Rs.300-Rs.650/<span>slim panel</span></p>
						</div>
						<div class="price-content">
							<ul>
								<li><i class="fa fa-check-circle"></i>20 watt</li>
								<li><i class="fa fa-check-circle"></i>24 watt</li>
								<li><i class="fa fa-check-circle"></i>28 watt</li>
								<li><i class="fa fa-check-circle"></i>36 watt</li>
								<li><i class=></i> </li>
								<li><i class=></i> </li>
								<li><i class=></i> </li>
								<li><i class=></i> </li>
								<li><i class=></i> </li>
							</ul>
						</div>
						<div class="price-button">
							<a class="buy-btn" href="cart3.php">Buy Now</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single-price">
						<div class="price-head">
							<h2>Surface Panel</h2>
							<p>Rs.250-Rs.600/<span>surface panel</span></p>
						</div>
						<div class="price-content">
							<ul>
								<li><i class="fa fa-check-circle"></i>36 watt</li>
								<li><i class="fa fa-check-circle"></i>44 watt</li>
								<li><i class="fa fa-check-circle"></i>48 watt</li>
								<li><i class="fa fa-times-circle"></i>56 watt</li>
								<li><i class=></i> </li>
								<li><i class=></i> </li>
								<li><i class=></i> </li>
								<li><i class=></i> </li>
							</ul>
						</div>
						<div class="price-button">
							<a class="buy-btn" href="cart4.php">Buy Now</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single-price">
						<div class="price-head">
							<h2>Street Panel</h2>
							<p>Rs.1500-Rs.5000/<span>street panel</span></p>
						</div>
						<div class="price-content">
							<ul>
								<li><i class="fa fa-check-circle"></i>36 watt</li>
								<li><i class="fa fa-check-circle"></i>45 watt</li>
								<li><i class="fa fa-check-circle"></i>55 watt</li>
								<li><i class="fa fa-check-circle"></i>62 watt</li>
								<li><i class=></i> </li>
								<li><i class=></i> </li>
								<li><i class=></i> </li>
								<li><i class=></i> </li>
							</ul>
						</div>
						<div class="price-button">
							<a class="buy-btn" href="cart5.php">Buy Now</a>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-----------------------Team Members----------------->
	<section id="team">
			<h1>Our Team</h1>
			<div class="row">
				<div class="card mb-3 col mx-3" style="max-width: 540px;">
					<div class="row no-gutters">
						<div class="col-md-4">
							<img src="img/os2.jpg" class="card-img" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h3>Er.Omkar Sonawane</h3>
								<h5>Member</h5>
								<ul>
									<a href="#">
										<li><i class="fa fa-facebook"> Omkar Sonawane</i>
										<li>
									</a>
									<a href="#">
										<li><i class="fa fa-twitter"> omakrsonawane10</i>
										<li>
									</a>
									<a href="#">
										<li><i class="fa fa-linkedin"> omakrsonawane1</i>
										<li>
									</a>
								</ul>




							</div>
						</div>
					</div>
				</div>
				<div class="card mb-3 col mx-3" style="max-width: 540px;">
					<div class="row no-gutters">
						<div class="col-md-4">
							<img src="img/ps.jpg" class="card-img" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h3>Er.Prasad Sonawale</h3>
								<h5>Member</h5>
								<ul>
									<a href="#">
										<li><i class="fa fa-facebook"> Prasad Sonawale</i>
										<li>
									</a>
									<a href="#">
										<li><i class="fa fa-twitter"></i> prasadsonawale01
										<li>
									</a>
									<a href="#">
										<li><i class="fa fa-linkedin"></i> prasadsonawale01
										<li>
									</a>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="card mb-3 col mx-3 " style="max-width: 540px;">
					<div class="row no-gutters">
						<div class="col-md-4">
							<img src="img/sg1.jpg" class="card-img" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h3>Er.Soham Gaikwad</h3>
								<h5>Member</h5>
								<ul>
									<a href="#">
										<li><i class="fa fa-facebook"> Soham Gaikwad</i>
										<li>
									</a>
									<a href="#">
										<li><i class="fa fa-twitter"> sohamgaikwad6</i>
										<li>
									</a>
									<a href="#">
										<li><i class="fa fa-linkedin"> sohamgaikwad41</i>
										<li>
									</a>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="card mb-3 col mx-3" style="max-width: 540px;">
					<div class="row no-gutters">
						<div class="col-md-4">
							<img src="img/sp.jpg" class="card-img" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h3>Er.Sanjay Patil</h3>
								<h5>Member</h5>
								<ul>
									<a href="#">
										<li><i class="fa fa-facebook"> Sanjay Patil</i>
										<li>
									</a>
									<a href="#">
										<li><i class="fa fa-twitter"></i> sanjaypatil04
										<li>
									</a>
									<a href="#">
										<li><i class="fa fa-linkedin"> sanjaypatil04</i>
										<li>
									</a>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div> 

	</section>



	<!--------------------promo------------------>
	<section id="promo">
		<div class="container">
			<p>Get Discount Of Any Products</p>
			<a href="#contact" class="btn btn-primary">Contact Us</a>
		</div>
	</section>
	<!------------------------Get in Touch------------------------->
	<section id="contact">
		<div class="container">
			<h1>Get In Touch</h1>
			<?php
        if($insert == true){
        echo "<p class='submitMsg'>Massage successfully sent!	</p>";
        }
    ?>
			<div class="row">
				<div class="col-md-6">
					<form class="contact-form" action="index.php" method="post">
						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="Your Name">
						</div>
						<div class="form-group">
							<input type="digit" name="phone" class="form-control" placeholder="Phone no.">
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control" placeholder="Email id">
						</div>
						<div class="form-group">
							<input type="text" name="massage" class="form-control" rows="4" placeholder="Your Message">
						</div>
						<span>
							<button type="submit"  class="btn btn-primary">Send Message</button>
						</span>
					</form>
				</div>
				<div class="col-md-6 contact-info">
					<div class="follow"><b>Address:</b> Gat No. 160,Plot No. 15,Triveni Nagar, Talwade, Pune - 411 062
					</div>
					<div class="follow"><b>Phone:</b><i class="fa fa-phone"></i>+91 8390736494/ +91 8237528283</div>
					<div class="follow"><b>Email:</b><i class="fa fa-envelope-o"></i>sohamgaikwad41@gmail.com</div>
					<div class="follow">
						<lable><b>Get Social:</b></lable>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!---------------------Footer------------------->
	<section id="footer">
		<div class="container">
			<p>SPARKLE LIFE <i class="fa fa-heart-o"></i> MADE WITH SPARKLE LED</p>
			<h7>LIGHT BEYOND ELECTRICITY</h7>
		</div>
	</section>

	<!----------------Footer End--------------------->
	<script src="js/smooth-scroll.js"></script>
	<script>
		var scroll = new SmoothScroll('a[href*="#"]');
	</script>
</body>

</html>