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
		<div class="contactus-container"> 
			<h1 class="headingtxt"><span>Traditional Barter</span> Services</h1> 
			<div class="row">
				<div class="col-sm-6">
					<div class="serv-img">
						<img src="images/services.png" border="0" alt="">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="serv-cont"> 
						<h1>We have everything for you,</h1>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<ul>
							<li><i class="las la-chevron-circle-right"></i> Lorem Ipsum is simply dummy text</li>
							<li><i class="las la-chevron-circle-right"></i> Many desktop publishing packages and web page editors</li>
							<li><i class="las la-chevron-circle-right"></i> There are many variations of passages of Lorem Ipsum</li>
							<li><i class="las la-chevron-circle-right"></i> Internet tend to repeat predefined chunks as necessary</li>
							<li><i class="las la-chevron-circle-right"></i> Contrary to popular belief, Lorem Ipsum is not simply</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="serv-cont"> 
						<h1>Our formers on garden</h1>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<ul>
							<li><i class="las la-chevron-circle-right"></i> Lorem Ipsum is simply dummy text</li>
							<li><i class="las la-chevron-circle-right"></i> Many desktop publishing packages and web page editors</li>
							<li><i class="las la-chevron-circle-right"></i> There are many variations of passages of Lorem Ipsum</li>
							<li><i class="las la-chevron-circle-right"></i> Internet tend to repeat predefined chunks as necessary</li>
							<li><i class="las la-chevron-circle-right"></i> Contrary to popular belief, Lorem Ipsum is not simply</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="serv-img">
						<img src="images/gardengirl.png" border="0" alt="">
					</div>
				</div> 
				<div class="col-sm-6">
					<div class="serv-img">
						<img src="images/grapes.png" border="0" alt="">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="serv-cont"> 
						<h1>Ready to export a Graphes</h1>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<ul>
							<li><i class="las la-chevron-circle-right"></i> Lorem Ipsum is simply dummy text</li>
							<li><i class="las la-chevron-circle-right"></i> Many desktop publishing packages and web page editors</li>
							<li><i class="las la-chevron-circle-right"></i> There are many variations of passages of Lorem Ipsum</li>
							<li><i class="las la-chevron-circle-right"></i> Internet tend to repeat predefined chunks as necessary</li>
							<li><i class="las la-chevron-circle-right"></i> Contrary to popular belief, Lorem Ipsum is not simply</li>
						</ul>
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