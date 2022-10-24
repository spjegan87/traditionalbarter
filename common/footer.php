<?php 
	include('../config/config.php');
	include('pagequery.php');
?>
	
	<!-- Footer Start -->
	<div class="footer footer-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="f-c1"> 
						<img src="images/logo.png" border="0" alt="" class="ft-logo">
						<p>We help businesses maximize their online presence with a personalized.</p>
						<span><i class="las la-phone-volume"></i> +91 78714 73559</span>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="f-c1 ft-infolink">
						<h4>Information</h4> 
						<a href="aboutus.php"><i class="las la-angle-right"></i> About us</a>
						<a href="actandrules.php"><i class="las la-angle-right"></i> Indian Spice Board Rules</a>
						<a href="javascript:;"><i class="las la-angle-right"></i> Privacy &amp; Policy</a>
						<a href="javascript:;"><i class="las la-angle-right"></i> Our Suppliers</a>
					</div>
				</div> 
				<div class="col-sm-3">
					<div class="ft-add">
						<h4>Contacts</h4>
						<p><span>Traditional Barter</span>No 103/2 Solamalai Ayyanar Kovil Street, Bangalamedu Theni Dist - 625 531. Tamilnadu</p>
						<span><i class="las la-envelope"></i> sudesh.feb3@gmail.com</span>
					</div>
				</div>
				<div class="col-sm-3 ft-loc">
					<h4>Locations</h4>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15716.594212680553!2d77.5858032273579!3d10.004585585567407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b073f97c1322905%3A0x13328653ac5260f2!2sSS%20Puram%2C%20Andipatti%20Jakkampatti%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1642929177882!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
				</div>
			</div>
		</div>
		<a href="javascript:;" title="Top" class="cd-top">Top</a>
		<div class="copyright">
			<span>copyright @ 2022 &nbsp;|&nbsp; Tradition Barter</span>
		</div>
	</div>
	<!-- Footer End -->
</div>
<!-- Header included -->
<?php 
	include('script.php');

	# To remove the feedback form values from the session
	if(isset($_SESSION['feedback']))
		unset($_SESSION['feedback']);
	# To remove the contact us form values from the session
	if(isset($_SESSION['contactus']))
		unset($_SESSION['contactus']);
?>
<!-- Header included -->
</body>
</html>

<!-- 
Service page:

Payment mode
Customize Shipping 
Customize packing
Easy Documentation methods
Safe and Secure product handling

-->