
	<?php

	$PageTitle="SS PLASTIC";
	
	function customPageHeader(){?>
	  <!--Arbitrary HTML Tags-->
	<?php }
	
	include_once('header.php');
	
	//body contents go here
	
	?>
	<!-------------->
	<div class="inner-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="inner-head">
						<h1>INDUSTRIAL VESSELS</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-------------->
	<div class="inn-client">
		<div class="container">
			<div class="row prod-inn-gap">
				<div class="col-md-offset-6 col-sm-offset-6 col-md-6 col-sm-6">
					<form class="wrapper" method="post" action="frp-industrial-vessels-manufacturers.php#.php">
						<input class="inputbox" type="text" name="search" id="search" placeholder="Interested in ">
						<input class="submit-btn" type="submit1" value="Search" name="searchbtn">
					</form>
				</div>
			</div>
			<div class="col-md-12">
				<div class="prod-main">
					<h2 class="block">
						<span class="sub-title">SS PLASTIC</span>
						<span class="main-title1">FRP Industrial Vessels Manufacturers</span>
					</h2>
				</div>
			</div>
			<div class="row prod-gap">
				<div class="col-sm-9 col-sm-push-3">
					<div class="row">
						<div class="col-md-12">
							<div class="prod-inn-para">
								<p>SS Plastic , your trusted manufacturer, exporter, and supplier of premium FRP (Fiber Reinforced Plastic) pipes  With a steadfast commitment to reliability and excellence, we offer a diverse range of FRP pipes and ducting tailored to meet a multitude of application requirements.</p>
								<p>Our products stand out for their exceptional quality, versatility, and durability. Available in a variety of dimensions and specifications, our FRP pipes and ducting are crafted to deliver superior performance across a wide range of industries and applications. Whether you require pipes for industrial processes, water treatment facilities, chemical handling, or infrastructure projects, we have the solution to meet your needs.</p>
							</div>
						</div>
					</div>
					<!----------------->
					<div class="row">
						<hr class="tall">
					</div>
					<!----------------->
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<div class="prod-img-main">
								<div class="prod-img-head">
									<h5>FRP Vessels</h5>
								</div>
								<div class="prod-box">
									<img src="images/indutrial-vessels/PIC1.webp" class="img-responsive" />
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="prod-img-main">
								<div class="prod-img-head">
									<h5>FRUS Vessels</h5>
								</div>
								<div class="prod-box">
									<img src="images/indutrial-vessels/vessel.webp" class="img-responsive" />
								</div>
							</div>
						</div>
						<!--<div class="col-md-4 col-sm-4">
						<div class="prod-img-main">
							<div class="prod-img-head">
								<h5>Agitator Vessels</h5>
							</div>
							<div class="prod-box">
								<img src="images/indutrial-vessels/industrial-vessel-3.webp" class="img-responsive" />
							</div>
						</div>
					</div>-->
						<div class="col-md-4 col-sm-4">
							<div class="prod-img-main">
								<div class="prod-img-head">
									<h5>Industrial Vessels</h5>
								</div>
								<div class="prod-box">
									<img src="images/indutrial-vessels/vessel1.webp" class="img-responsive" />
								</div>
							</div>
						</div>
						<!--<div class="col-md-4 col-sm-4">
						<div class="prod-img-main">
							<div class="prod-img-head">
								<h5>PP / FRP Vessels</h5>
							</div>
							<div class="prod-box">
								<img src="images/indutrial-vessels/industrial-vessel-4.webp" class="img-responsive" />
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="prod-img-main">
							<div class="prod-img-head">
								<h5>PUDF Vessels</h5>
							</div>
							<div class="prod-box">
								<img src="images/indutrial-vessels/industrial-vessel-5.webp" class="img-responsive" />
							</div>
						</div>
					</div>-->
					</div>
				</div>

				<div class="col-sm-3 col-sm-pull-9">
					<div class="prod-menu">
						<ul>
							<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="frp-tank-manufacturers.php">Storage Tanks</a></li>
							<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="frp-pipe-fittings-manufacturers.php">FRP Pipes / Fittings</a></li>
							<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="frp-duct-manufacturers.php"> Ductings</a></li>
							<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="frp-industrial-vessels-manufacturers.php">Industrial Vessels</a></li>
				
							<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="frp-scrubbers-manufacturers.php">Packed Column Scrubber</a></li>
							<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="frp-moulded-items.php">Chemical Storage Room & Other Items</a></li>
				
							<li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="frp-anolyte-catholyte-headers.php">FRP Headers</a></li>
				
						</ul>
					</div>
				</div>
				</div>
				</div>
				</div>
				<!-------------->
				<?php 
include_once('footer.php');
?>
				<!-------------->
				</body>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
				<script>
				$(document).ready(function(){
				$('.customer-logos').slick({
				slidesToShow: 6,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 1500,
				arrows: false,
				dots: false,
				pauseOnHover: false,
				responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 4
					}
				}, {
					breakpoint: 520,
					settings: {
						slidesToShow: 2
					}
				}]
				});
				});
				</script>	
				
				</html>