<!-- Include header part -->
<?php 
	include('config/config.php');
	include('common/header.php');
	include('common/pagequery.php');
	if(isset($_SESSION['username']))
	{
		header('location:'.$localpath.'/admin/templates/index.php');
	}

?>

<!-- Notification banner Start-->
<div class="notify-container <?php echo $nrows['status'] ?>">
	<div class="notify-center">
		<span class="nclose">x</span>
		<h1><?php echo $nrows['ntitle'] ?></h1>
		<p><?php echo $nrows['ncontent'] ?><br /><br />
		<span class="pull-left">நாள்: <?php echo $nrows['date'] ?> </span> <span class="pull-right">நேரம்: <?php echo $nrows['ntime'] ?></span><br />
		<span class="pull-left">இடம்: <?php echo $nrows['nplace'] ?>. </span>
		</p>
	</div>
</div>
<!-- Notification banner End -->
	<!-- Header Container Start -->
	<?php include("common/menu.php") ?>
	<!-- Header Container End -->
	<!-- Body Container -->
	<!-- Header Container -->
	<div class="container-fluid custom-banner-fluid"> 
		<div id="myCarousel" class="carousel slide custom-carousel" data-ride="carousel">
			<div class="carousel-inner">
				<div class="item active">
					<div class="carousel-caption">
						Welcome to 
						<h3>Traditional <span class="">Barter</span></h3>
						<p>Our store offers you always fresh vegetables all year round, Buy from a wide range of high quality organic vegetables.</p>
						<a href="javascript:;" class="btn custom-btn btn-anim">Contact us</a>
					</div>
					<div class="banner-img">
						<img src="images/slider1.png" border="0" alt="">
					</div>
				</div>
				<div class="item">
					<div class="carousel-caption">
						Pure Organic
						<h3>Organic <span class="">Foods</span></h3>
						<p>Our store offers you always fresh vegetables all year round, Buy from a wide range of high quality organic vegetables.</p>
						<a href="javascript:;" class="btn custom-btn btn-anim">Contact us</a>
					</div>
					<div class="banner-img">
						<img src="images/vegetables-and-spices.png" border="0" alt="">
					</div>
				</div>
				<div class="item">
					<div class="carousel-caption">
						Pure Organic
						<h3>Fresh <span class="">Fruits</span></h3>
						<p>Our store offers you always fresh vegetables all year round, Buy from a wide range of high quality organic vegetables.</p>
						<a href="javascript:;" class="btn custom-btn btn-anim">Contact us</a>
					</div>
					<div class="banner-img">
						<img src="images/healthy-food.png" border="0" alt="">
					</div>
				</div>
			</div>
			<a class="left custom-left carousel-control las la-chevron-circle-left" href="#myCarousel" data-slide="prev"> 
			</a>
			<a class="right carousel-control las la-chevron-circle-right" href="#myCarousel" data-slide="next"> 
			</a>
		</div>
	</div>
	<div class="body-container">
		<div class="bg-gray">
			<div class="container">
				<h2>We use only <span>organic products</span> grown on private farms, without nitrates and additives</h2>
				<div class="prod-main">
					<div class="row">
						<div class="col-sm-3">
							<div class="prod-overview">
								<div class="prod-img">
									<img src="images/cardamom-trade-500x500.png" border="0" alt="">
								</div>
							</div>
							<h3>Caradamom</h3>
							<p>Curabitur pulvinar ex felis, quis suscipit ligula malesuada at.</p>
						</div>
						<div class="col-sm-3">
							<div class="prod-overview">
								<div class="prod-img"> 
									<img src="images/tomoto.jpg" border="0" alt="">
								</div>
							</div>
							<h3>Tomota</h3>
							<p>Curabitur pulvinar ex felis, quis suscipit ligula malesuada at.</p>
						</div>
						<div class="col-sm-3">
							<div class="prod-overview">
								<div class="prod-img"> 
									<img src="images/onion.jpg" border="0" alt="">
								</div>
							</div>
							<h3>Onion</h3>
							<p>Curabitur pulvinar ex felis, quis suscipit ligula malesuada at.</p>
						</div>
						<div class="col-sm-3">
							<div class="prod-overview">
								<div class="prod-img">
									<img src="images/keerai.jpg" border="0" alt="">
								</div>
							</div>
							<h3>Keerai</h3>
							<p>Curabitur pulvinar ex felis, quis suscipit ligula malesuada at.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 ourf-img">
					<img src="images/women.png" border="0" alt="">
				</div>
				<div class="col-sm-6">
					<div class="ourfeature">
						<span class="">Our Feature</span>
						<h2>Explore Our Traditional <span>Barter</span> Gardern Features</h2>
						<p>Natural products for lovers of healthy food. Organic Foods and Café is a family run company founded in 2004 that runs organic supermarkets</p>
						<p>Every day fresh and quality products. Organic Foods and Café is a family run company founded in 2004 that runs organic supermarkets</p>
						<a href="javascript:;" class="btn custom-btn btn-anim">Know more</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Future Products -->
		<div class="container-fluid sky-bg">
			<div class="container">
				<div class="future-prod">
					<span>Future products</span>
					<h2>Show case of Traditional <span class="">barter</span> our future products </h2>
					<div class="row fp-inner">
						<div class="col-sm-3">
							<div class="fp-disp">
								<h4><i class="lab la-canadian-maple-leaf"></i> 100% Organic</h4>
								<p>Suspendisse ultricies nisi vel quam suscipit, et rutrum odio porttitor.</p>
							</div>
							<div class="fp-disp">
								<h4><i class="las la-leaf"></i>100% Organic</h4>
								<p>Suspendisse ultricies nisi vel quam suscipit, et rutrum odio porttitor.</p>
							</div>
							<div class="fp-disp">
								<h4>100% Organic</h4>
								<p>Suspendisse ultricies nisi vel quam suscipit, et rutrum odio porttitor.</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="fp-disp-img">
								<img src="images/future-prod.png" border="0" alt="">
							</div>
						</div>
						<div class="col-sm-3"> 
							<div class="fp-disp">
								<h4><i class="lab la-canadian-maple-leaf"></i> 100% Organic</h4>
								<p>Suspendisse ultricies nisi vel quam suscipit, et rutrum odio porttitor.</p>
							</div>
							<div class="fp-disp">
								<h4>100% Organic</h4>
								<p>Suspendisse ultricies nisi vel quam suscipit, et rutrum odio porttitor.</p>
							</div>
							<div class="fp-disp">
								<h4>100% Organic</h4>
								<p>Suspendisse ultricies nisi vel quam suscipit, et rutrum odio porttitor.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Future Products End-->
		<!-- Testimonial start -->
		<div class="container">
			<div class="future-prod">
				<span>Testimonials</span>
				<h2>Our clients says about Traditional <span>Barter</span> products &amp; Services</h2> 
				<div id="mytestiCarousel" class="carousel slide moni-carousel" data-ride="carousel">
					<div class="carousel-inner">
						<div class="item active"> 
							<div class="testimonial-cond">
								<div class="testimonial-img">
									<img src="images/testi1.png" border="0" alt="">
								</div>
							</div>
							<h5>Steve John<br><span>Vice President of Hub Australia</span></h5>
							<p>I rarely write reviews for products but with the EngoCreative, I am more than grateful. The site is fully customizable and you can really feel like playing while designing the site! Thanks again for having made such a convenient, yet fully-functional theme.</p>
						</div> 
						<div class="item"> 
							<div class="testimonial-cond">
								<div class="testimonial-img">
									<img src="images/testi2.png" border="0" alt="">
								</div>
							</div>
							<h5>Jonathan Vancy<br><span>CEO & Founder</span></h5>
							<p>I rarely write reviews for products but with the EngoCreative, I am more than grateful. The site is fully customizable and you can really feel like playing while designing the site! Thanks again for having made such a convenient, yet fully-functional theme.</p>
						</div> 
						<div class="item"> 
							<div class="testimonial-cond">
								<div class="testimonial-img">
									<img src="images/testi3.png" border="0" alt="">
								</div>
							</div>
							<h5>Fred Williams<br><span>Framer of South Africa</span></h5>
							<p>I rarely write reviews for products but with the EngoCreative, I am more than grateful. The site is fully customizable and you can really feel like playing while designing the site! Thanks again for having made such a convenient, yet fully-functional theme.</p>
						</div> 
						<div class="item"> 
							<div class="testimonial-cond">
								<div class="testimonial-img">
									<img src="images/testi4.png" border="0" alt="">
								</div>
							</div>
							<h5>Kyle Fedrick<br><span>Vice President of Hub Uuited Kingdom</span></h5>
							<p>I rarely write reviews for products but with the EngoCreative, I am more than grateful. The site is fully customizable and you can really feel like playing while designing the site! Thanks again for having made such a convenient, yet fully-functional theme.</p>
						</div> 
					</div> 
					<a class="left carousel-control las la-angle-left" href="#mytestiCarousel" data-slide="prev"> 
					</a>
					<a class="right carousel-control las la-angle-right" href="#mytestiCarousel" data-slide="next"> 
					</a>
				</div> 
			</div>
		</div>
		<!-- Testimonial End -->
	</div>
	<!-- Body Container -->
<!-- Footer included -->
<?php 
	include('common/footer.php');
?>
<!-- Footer included -->