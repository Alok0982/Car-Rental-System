
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
         
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
        
        <link rel ="stylesheet" type ="text/css" href ="style.css">
        <link rel="stylesheet" type ="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Find You Car</h2>
				<br>
				<h2 class="caption" style="text-align: center"><mark>Price in INR Per day</mark></h2>
		
			</section>
	</section><!--  end hero section  -->

	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE status = 'Available'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="500" height="250">
					</a>
					<span class="price"><?php echo '.'.$rws['hire_cost'];?></span>
					<div class="property_details">
						<h2>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"> <span class="property_size" style="color:orange" ><?php echo 'Car Make'.$rws['car_type'];?></a></h2>
						
						<h2 style ="color:yellow;">Car Name/Model: <span class="property_size" style="color:yellow" ><?php echo $rws['car_name'];?></span></h2>
					</div>
				</li>
			<?php
				}
			?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
                                                <li><a href ="index.php">First Page</a></li> 
						<li><a href="#">About Us</a></li>
						<li><a href="terms.html">Terms</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OUR CAR TYPES</li>
						<li><a href="#">Mercedes</a></li>
						<li><a href="#">BMW</a></li>
						<li><a href="#">Skoda</a></li>
						<li><a href="#">Others.</a></li>
					</ul>
				</li>

				<?php include_once "includes/footer.php"; ?>
				</body>
				</html>