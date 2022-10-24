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
			<h1 class="headingtxt"><span>Traditional Barter</span> Contact Us</h1> 
			<div class="row">
				<div class="col-sm-6 text-center">
					<img src="images/contacts.png" border="0" alt="">
					<p>Send your queries via mail.</p>
				</div>
				<div class="col-sm-6">
					<form action="/action_page.php" class="contact-frm">
						<h2>Get in touch</h2>
						<div class="form-group">
							<label for="email">Name</label>
							<input type="email" class="form-control" id="email" placeholder="Enter your name">
						</div>
						<div class="form-group">
							<label for="email">Email address</label>
							<input type="email" class="form-control" id="email" placeholder="Enter your mail id">
						</div>
						<div class="form-group">
							<label for="pwd">Message</label>
							<textarea class="form-control" id="message" placeholder="Enter your comments here"></textarea>
						</div> 
						<button type="submit" class="btn custom-btn btn-anim">Submit</button>
					</form>
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