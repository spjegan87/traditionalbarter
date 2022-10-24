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
			<h1 class="headingtxt"><span>Traditional Barter</span> Indian  Spices Board Act &amp; Rules</h1> 
			<div class="row"> 
				<div class="col-sm-12 act-rules">
					<ol>
						<li><a href="http://www.indianspices.com/sites/default/files/notification_21-jan22.pdf">Review of Spices Board Act,1986 and Draft Spices (PROMOTION AND DEVELOPMENT)Bill,2022- Comments/ Feedback of Stakeholders</a></li>
						<li><a href="http://www.indianspices.com/sites/default/files/SpicesBoardAct1986andSpicesBoardRules1987.pdf">Spices Board Act 1986 and Spices Board Rules 1987</a></li>
						<li><a href="http://www.indianspices.com/sites/default/files/Cardamom(LicensingandMarketingRules1987.pdf">Cardamom (Licensing and Marketing) Rules 1987</a></li>
						<li><a href="http://www.indianspices.com/sites/default/files/SpicesBoard(RegistrationofExporters)Regulations1989.pdf">Spices Board (Registration of Exporters) Regulations 1989</a></li>
						<li><a href="http://www.indianspices.com/sites/default/files/SpicesBoard(Meeting)Rules1992.pdf">Spices Board (Meeting) Rules 1992</a></li>
						<li><a href="http://www.indianspices.com/sites/default/files/SpicesBoard-(ClassificationControlandAppeal)Regulations1992.pdf">Spices Board Service (Classification, Control and Appeal) Regulations, 1992</a></li>
						<li><a href="http://www.indianspices.com/sites/default/files/SpicesBoard(QualityMarking)Regulations1992.pdf">Spices Board (Quality Marking) Regulations 1992</a></li>
						<li><a href="http://www.indianspices.com/sites/default/files/Spices%20Board%20(Registration%20of%20Exporters)%20%20Amendment%20Regulations%20up%20to%202004.pdf">Spices Board (Registration of Exporters)  Amendment Regulations up to 2004</a></li>
						<li><a href="http://www.indianspices.com/sites/default/files/Spices-Board(RegistrationofExporters)Amendment-Regulations2011.pdf">Spices Board (Registration of Exporters) Amendment Regulations 2011</a></li>
						<li><a href="http://www.indianspices.com/sites/default/files/Cardamom(LicensingandMarketing)AmendmentRules2014.pdf">Cardamom (Licensing and Marketing) Amendment Rules 2014</a></li>
						<li><a href="http://www.indianspices.com/sites/default/files/Amendment%20in%20order%20regarding%20Saffron%20Production%20and%20Export%20Development%20Agency.pdf">Amendment in order regarding Saffron Production and Export Development Agency</a></li>
						<li><a href="http://www.indianspices.com/sites/default/files/Gazette%20Notification%20of%20Exporters%20Registration2018.pdf">Spices Board (Registration of Exporters) Amendment Regulations, 2017</a></li>
						<li><a href="http://www.indianspices.com/sites/default/files/Cardamom%20(Licensing%20and%20Marketing)%20Amendment%20Rules%2c%202018.pdf">Cardamom (Licensing and Marketing) Amendment Rules, 2018</a></li>
						<li><a href="http://www.indianspices.com/sites/default/files/SB_Rules_2018.pdf">Spices Board (Amendment) Rules 2018</a></li>
						<li><a href="http://www.indianspices.com/sites/default/files/Secretary%2c%20(Spices%20Board)%20Recruitment%20Rules%2c%202018.pdf">Secretary, (Spices Board) Recruitment Rules, 2018</a></li>
						<li><a href="http://www.indianspices.com/sites/default/files/Spices%20Board%20cca%202018.pdf">Spices Board Service (Classification, control and Appeal) Amendment Regulations 2018</a></li>
						<li><a href="http://www.indianspices.com/sites/default/files/SHC_Notification_GSR_No.636_(E).pdf">SHC Notification GSR No.636 (E) Dated. 10.09.2002</a></li>
						<li><a href="http://www.indianspices.com/sites/default/files/CRES_amendment.pdf">Spices Board (Registration of Exporters)(Amendment) Regulations 2021</a></li>
					</ol>
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