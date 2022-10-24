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
<!-- Include header part end -->
	<!-- Header Container Start -->
		<?php include("common/menu.php") ?>
	<!-- Header Container End --> 
	<!-- Aboutus Container Start -->
	<div class="container">
		 <div class="aboutus-container">
			<p><img src="images/aboutus.png"  border="0" alt="" align="left">
			<h1><span>Traditional Barter</span> About Us</h1>We believe in helping brands create through strategy, story-telling, digital products, and integrated experiences on web, mobile, and in the world. And you're here, friends, because you also believe.<br><br>
			Our team has a passion for making things with real value. This has led us to assemble a multi-talented group that can do just about anything: from building sets to photographing food, crafting websites to developing apps, beautiful design to adventure cinematography. Designers, engineers, creatives, makers, developers, artists, unite. Let's do something real-special together.<br><br>
			Our team has a passion for making things with real value. This has led us to assemble a multi-talented group that can do just about anything: from building sets to photographing food, crafting websites.<br><br>
			Our team has a passion for making things with real value. This has led us to assemble a multi-talented group that can do just about anything: from building sets to photographing food, crafting websites to developing apps, beautiful design to adventure cinematography.crafting websites to developing apps, beautiful design to adventure cinematography.</p>
			<div class="row">
				<div class="col-sm-12">
					<div class="ourpartner">
						<h2>BEST FEATURES</h2>
						<p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="bf-cont">
						<i class="las la-headphones"></i>
						<p>24 X 7 Free Support <span class="">Online Support 24/7</span></p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="bf-cont">
						 <i class="las la-shipping-fast"></i>
						<p>Worldwide Shipping <span class="">To deliver best service</span></p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="bf-cont">
						<i class="lab la-rev"></i>
						<p>Our Services <span class="">Online Support 24/7</span></p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="bf-cont">
						<i class="las la-users"></i>
						<p>Best Partners<span class="">Comportable good partners</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Aboutus Container Start -->
<!-- Footer included -->
<?php 
	include('common/footer.php');
?>
<!-- Footer included -->