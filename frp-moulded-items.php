
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
					<h1>CHEMICAL STORAGE ROOM & OTHER ITEMS</h1>
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
				<form class="wrapper" method="post" action="frp-moulded-items.php#.php">
                    <input class="inputbox" type="text" name="search" id="search" placeholder="Interested in ">
                    <input class="submit-btn" type="submit1" value="Search" name="searchbtn">
                </form>
			</div>
		</div>
			<div class="col-md-12">
				<div class="prod-main">
					<h2 class="block">
						<span class="sub-title">SS PLASTIC</span>
						<span class="main-title1">Chemical Storage Room </span>
					</h2>
				</div>
			</div>
		<div class="row prod-gap">
			<div class="col-sm-9 col-sm-push-3">
				<div class="row">
					<div class="col-md-12">
						<div class="prod-inn-para">
							<p>We manufacture and supply FRP Moulded Items?such as statues, decorative dustbins, non-corrosive doors, panels, pyramids, domes and idols etc. We design them keeping in mind their usability. These are most suitable for playgrounds, gardens, hotels, children parks, lawns etc. Recent product twin colour FRP awnings are moulded out of fibre glass with high precision finish. We offer various coloured awnings according to customers preference. </p>
							<p>These are fixed with use of pre-fabricated structures. Normal size: 29" projection with 6" drop and length as per customer requirement. Advantages ~ high impact strength ~ easily washable ~ colours fixing: 2" slot should be made in the wall by the party's stonecutter. FRP panels will be inserted in this. Pre-fabricated structures will be fixed with wall using anchor fasteners.</p>
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
								<h5>Chemical storage Room</h5>
							</div>
							<div class="prod-box">
								<img src="images/product/moulded/frp1.webp" class="img-responsive" />
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="prod-img-main">
							<div class="prod-img-head">
								<h5>PP / FRP Chamber</h5>
							</div>
							<div class="prod-box">
								<img src="images/product/moulded/duct.webp"  class="img-responsive" />
							</div>
						</div>
					</div>
					<!-- <div class="col-md-4 col-sm-4">
						<div class="prod-img-main">
							<div class="prod-img-head">
								<h5>FRP Moulded Items</h5>
							</div>
							<div class="prod-box">
								<img src="images/product/moulded/mould-02.webp" class="img-responsive" />
							</div>
						</div>
					</div> -->
					<!-- <div class="col-md-4 col-sm-4">
						<div class="prod-img-main">
							<div class="prod-img-head">
								<h5>FRP Moulded Items</h5>
							</div>
							<div class="prod-box">
								<img src="images/product/moulded/hoods.webp" class="img-responsive" />
							</div>
						</div>
					</div> -->
					<div class="col-md-4 col-sm-4">
						<div class="prod-img-main">
							<div class="prod-img-head">
								<h5>FRP Moulded Items</h5>
							</div>
							<div class="prod-box">
								<img src="images/product/moulded/frp5.webp" class="img-responsive" />
							</div>
						</div>
					</div>
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