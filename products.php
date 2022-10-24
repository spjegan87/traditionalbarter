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
			<h1 class="headingtxt"><span>Traditional Barter</span> Products</h1> 
			<div class="prod-inner">
				<span><img src="images/products-1.png" border="0" alt="" ></span>
				<p>India produces a wide range of spices and holds a prominent position in world spice production. Because of the varying climates - from tropical to sub-tropical to temperate-almost all spices grow splendidly in India.In reality almost all the states and union territories of India grow one or the other spices.Under the act of Parliament, a total of 52 spices are brought under the purview of Spices Board.However 109 spices are notified in the ISO list. </p>
				<p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which...</p>
			</div>
			<div class="row">
				<div class="col-sm-3">
					<div class="prods">
						<p class="img"><img src="images/Allspice.jpg" border="0" alt=""></p>
						<h1>Allspice</h1>
						<p>Allspice trees are evergreen medium sized, grow up to a height of 8 to 10 meters and with a slender upright trunk and smooth greyish bark. The mail trees produce only few fruits. The male and fema...</p>
						<a href="product-details.php"><i class="las la-angle-double-right"></i> Read more</a> 
					</div>
				</div>
				<div class="col-sm-3">
					<div class="prods">
						<p class="img"><img src="images/Aniseed.jpg" border="0" alt=""></p>
						<h1>Aniseed</h1>
						<p>Aniseed is an annual plant with an average height of 30 to 50 cm. The plant is completely covered with fine hairs. Aniseed is ground-grey to greyish brown in colour,3 to 5mm in length, oval in shap...</p>
						<a href="javascript:;"><i class="las la-angle-double-right"></i> Read more</a> 
					</div>
				</div>
				<div class="col-sm-3">
					<div class="prods">
						<p class="img"><img src="images/Asafoetida.jpg" border="0" alt=""></p>
						<h1>Asafoetida</h1>
						<p>Asafoetida is the dried latex (gum oleoresin) exuded from the living underground rhizome or tap root of several species of Ferula (three of which grow in India), which is a perennial herb (1 to 1.5..</p>
						<a href="javascript:;"><i class="las la-angle-double-right"></i> Read more</a> 
					</div> 
				</div>
				<div class="col-sm-3">
					<div class="prods">
						<p class="img"><img src="images/basil.jpg" border="0" alt=""></p>
						<h1>Basil</h1>
						<p>Basil also known as French Basil or Sweet Basil or Tulsi is an erect glabrous herb, 30-90 cm high is indigenous to India. The leaves of basil have numerous oil glands with aromatic volatile oil. Th..</p>
						<a href="javascript:;"><i class="las la-angle-double-right"></i> Read more</a> 
					</div> 
				</div>
				<div class="col-sm-3">
					<div class="prods">
						<p class="img"><img src="images/bayleaf1.jpg" border="0" alt=""></p>
						<h1>Basil</h1>
						<p>Basil also known as French Basil or Sweet Basil or Tulsi is an erect glabrous herb, 30-90 cm high is indigenous to India. The leaves of basil have numerous oil glands with aromatic volatile oil. Th..</p>
						<a href="javascript:;"><i class="las la-angle-double-right"></i> Read more</a> 
					</div> 
				</div>
				<div class="col-sm-3">
					<div class="prods">
						<p class="img"><img src="images/bisopweed.jpg" border="0" alt=""></p>
						<h1>Basil</h1>
						<p>Basil also known as French Basil or Sweet Basil or Tulsi is an erect glabrous herb, 30-90 cm high is indigenous to India. The leaves of basil have numerous oil glands with aromatic volatile oil. Th..</p>
						<a href="javascript:;"><i class="las la-angle-double-right"></i> Read more</a> 
					</div> 
				</div>
				<div class="col-sm-3">
					<div class="prods">
						<p class="img"><img src="images/cambodge3aa5.jpg" border="0" alt=""></p>
						<h1>Basil</h1>
						<p>Basil also known as French Basil or Sweet Basil or Tulsi is an erect glabrous herb, 30-90 cm high is indigenous to India. The leaves of basil have numerous oil glands with aromatic volatile oil. Th..</p>
						<a href="javascript:;"><i class="las la-angle-double-right"></i> Read more</a> 
					</div> 
				</div>
				<div class="col-sm-3">
					<div class="prods">
						<p class="img"><img src="images/Capere151.jpg" border="0" alt=""></p>
						<h1>Basil</h1>
						<p>Basil also known as French Basil or Sweet Basil or Tulsi is an erect glabrous herb, 30-90 cm high is indigenous to India. The leaves of basil have numerous oil glands with aromatic volatile oil. Th..</p>
						<a href="javascript:;"><i class="las la-angle-double-right"></i> Read more</a> 
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