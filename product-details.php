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
		<div class="product-container"> 
			<h1 class="headingtxt"><span>Products Details</span> Allspices</h1>
			<p class="quotes">Allspice trees are evergreen medium sized, grow up to a height of 8 to 10 meters and with a slender upright trunk and smooth greyish bark. The mail trees produce only few fruits. The male and female trees are similar in appearance and cannot be identified till flowering commences. </p>
			<div class="row">
				<div class="col-sm-4">
					<div class="prod-list">
						<h2>All Traditional Products</h2>
						<div class="prod-lnks">
							<a href="javascript:;"><i class="las la-angle-right"></i> Allspice</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Aniseed</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Asafoetida</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Basil</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Bay Leaf</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Bishop's Weed</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Cambodge</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Caper</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Caraway Seed</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Cardamom (large)</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Cardamom (small)</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Cassia</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Celery</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Chilli</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Cinnamon</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Clove</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Coriander</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Cumin</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Curry Leaf</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Dill</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Fennel</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Fenugreek</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Garlic</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Ginger</a> 
							<a href="javascript:;"><i class="las la-angle-right"></i>Pomegranate</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Poppy Seed</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Rosemary</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Saffron</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Sage</a> 
							<a href="javascript:;""><i class="las la-angle-right"></i>Star Anise</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Sweet Flag</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Tamarind</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Tarragon</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Tejpat</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Thyme</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Turmeric</a>
							<a href="javascript:;"><i class="las la-angle-right"></i>Vanilla</a> 
						</div>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="prod-cnt">
						<div class="prod-cntimg">
							<span class=""><img src="images/Allspice.jpg" border="0" alt=""></span> 
							<ul>
								<li><strong class="">Product name</strong>All Spices</li>
								<li><strong class="">Myfamily name</strong>Myrtaceae</li>
								<li><strong class="">Commercial Part</strong>Fruit &amp; Seed Myrtaceae</li> 
							</ul> 
						</div>
						<h3>Orgin and distribution</h3>
						<p>The tree is indigenous to West Indies (Jamaica) but is also found in Central America. Attempts to introduce into countries in tropical regions didn't succeed fully. In India, there are few trees in Maharashtra, Tamil Nadu, Karnataka and Kerala. The dried berries range in size (6.5 to 9.5 mm in diameter) and there are 13 to 14 berries per gram. The quality of pimento is affected by factors like growing area, stage of maturity of berries at harvest and storage conditions.</p>
						<h3>Uses</h3>
						<p>The major use of allspice is in food industry (65 to 70%) in domestic use (5% to 10%), production of berry oil (20% to 25%), extraction of oleoresin (1% to 2%) and pharmaceutical and perfume industry. Berry, berry oil, oleoresin, leaf oil are products of economic use. It is used mostly in Western cooking and less suitable for Eastern cooking. It has medicinal, anti-microbial, insecticidal, nematicidal, anti-oxidant and deodorant properties.</p>
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