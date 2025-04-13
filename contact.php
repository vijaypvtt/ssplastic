
<body>

			<?php include_once('header.php');
			
			//body contents go here
			
			?>
<!-------------->
<div class="inner-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-head">
					<h1>CONTACT US</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!-------------->
<div class="inn-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="contact-head">
					<h4>WE ARE VERY PLEASED TO ANSEWER YOUR QUERY THROUGH MAIL</h4>
					<!-- <h4>We will be very obliged to receive your inquiry !!</h4> -->
					<p>We are pleased to introduce ourselves, engaged in design, manufacture and supply of various items made of FRP,PP FRP ,HDPE ETC.</p>
				</div>
			</div>
				<div class="col-md-6 col-sm-6">
					Please properly fill the contact form for any kind of solution <br /><br />					<div class="contact-left">
<form class="cbform" method="post" action="https://formspree.io/f/mrgndnpn" enctype="multipart/form-data" onsubmit="return validate()">
							<div class="col-md-12">
								<input type="text" placeholder="Enter Your Name :-" name="name" >
							</div>
							<!-- <div class="col-md-12">
								<input type="text" placeholder="Enter Your Company Name :-" name="company">
							</div> -->
							<div class="col-md-12">
								<input type="text" placeholder="Enter Your Email Address :-" name="email" required="">
							</div>
							<!-- <div class="col-md-12">
								<input type="text" placeholder="Enter Your Number :-" name="mobilenumber" required="">
							</div> -->
							<div class="col-md-12">
								<textarea type="text" placeholder="Message :" name="message" required=""></textarea>
							</div>
							<div class="col-md-12">
								<button type="Submit" name="send" value="Submit">Submit</button>
							</div>
						</form>
					</div>
				</div>
			<div class="col-md-6 col-sm-6">
				<div class="cont-left">
					<div class="cont-inn-head">
						<h2>Get In Touch</h2>
					</div>
					<!-- <div class="add">
						<h4>SS PLASTIC</h4>
						<i class="fa fa-location-arrow" aria-hidden="true"></i>
						<span>Head Office :-</span>
						<p</p>
					</div> -->
					<div class="phone">
						<i class="fa fa-mobile" aria-hidden="true"></i>
						<!--<p>912228864879 </p>-->
						<p>9825850501,9879950501</p>
					</div>
					<div class="add">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						<span>Manufacturing Unit: Gala No.-1, Survey No.-282,Nr DamanGanga Ind. Park,Gate No.-2, Patia Mora, karvad, Vapi-396191.</span>
						<p></p>
					</div>
					<!-- <div class="add">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						<span>Manufacturing Unit No.2 :-</span>
						<p>Plot No. 62 & 63, New Expansion Area <br>G.I.D.C Umergaon, Dist: Valsad, Gujarat - 396171, India</p>
					</div> -->
					<!-- <div class="phone">
						<i class="fa fa-mobile" aria-hidden="true"></i>
						<p></p>
					</div> -->
					<!-- <div class="phone">
						<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
						<p>  <b>(Sales & Marketing)</b></p>
						<p>  <b>(Sales & Marketing)</b></p>
						<p>  <b>(Engineering Technician)</b></p>
					</div> -->
					<div class="email">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						
						<p><a href="mailto:info@ss-plasic.com"> info@ss-plastic.com</a></p>
					</div>
				</div>
			</div>
		</div>
		<!----------------->
			<div class="row">
				<hr class="tall">
			</div>
		<!----------------->
		<div class="row">
			<div class="col-md-12">
				<div class="cont-inn-head">
					<h2>GSTIN: 24BlRPS4800G2Z3</h2>
				</div>
				<div class="gst-para">
					<p></p>
				</div>
			</div>
		</div>
		<!----------------->
			<div class="row">
				<hr class="tall">
			</div>
		<!----------------->
		<!-- <div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="map">
					<iframe src="" width="100%" height="300px" frameborder="0" style="border:1px solid #ccc; border-radius:5px;" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="map">
					<iframe src="" width="100%" height="300px" frameborder="0" style="border:1px solid #ccc; border-radius:5px;" allowfullscreen></iframe>
				</div>
			</div> -->
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