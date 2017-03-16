<?php
/* Adds in the navigation bar the top of the page.*/
include('header.php');
?>

<!-- Enter HTML here -->

<div id="splash-screen" class="splash-screen">
    <!--<div class="col-md-12 text-center splash-logo">-->

      <div id="splash-text" class="text-center">
          <h2>Getting Hungry?</h2>
          <h1>Eat some Granola at the Bar.</h1>

          <a id="GoToLearnMore" href="#learn-more" class="btn btn-trailmix cta">Learn More</a>

      </div>
    <!--</div>-->
</div>

<div id="learn-more">
	<div class="row">
		<div class="container feature-section">
			<div class="col-md-6 feature-text-left">
				<p>We pride ourselves on providing our customers with a quality product while growing 
				our brand with the same organic integrity that is found in our granola.</p>
			</div> 
			<!-- end of learn-more div class -->
			<div class ="col-md-6 feature-img">
				<img src="img/GranolaBase.jpg"
				alt ="Pile of Granola" />
			</div>
		</div>
	</div>
</div>

	<div id="feature1-photo" class="row content-section photo-section">
    <!-- #feature1-photo background-image will be a deer walking past a tree-mounted camera and activating it -->
		<div class="container">

		</div>
	</div>
	<!-- end feature1-photo div -->

  <div class="row">
		<div class="container feature-section">
      <div class="col-md-6 feature-img">
				<img src="img/hunterphone.jpg" alt="hunter receiving notification on phone" />
			</div>
			<div class="col-md-6 feature-text-right">
				<p>Receive an instant notification on your phone or tablet as soon as movement is detected</p>
			</div> 
		</div> <!-- end feature secion div -->
	</div>
	<!-- end row div -->


  <div id="feature2-photo" class="row content-section photo-section">
    <!-- #feature2-photo background-image will be video in gif format of a recording of a deer passing by from a fish-eye camera's point-of-view -->
		<div class="container">

		</div>
	</div>

  <div class="row">
        <div class="container feature-section">
			<div class="col-md-6 feature-text-left">
				<p>View your map when you arrive to select the area of your trail that has the most activity</p>
			</div> <!-- end of about class -->
			
			<div id="scrollDiv" class="col-md-6 feature-img">
				<img src="img/beachFire.jpeg" alt="Heat map of deer activity" />
			</div>
		</div>
  </div>

	
	<div id="feature3-photo" class="row content-section photo-section">
    <div id="about-us">
				<h2>About Us</h2>
				<p class="p"> We at Inspired are a team of developers who love technology and are commited to providing our customers quality products.
				</p>
				<p class="p"> We are looking to innovate different aspects of technology and hopefully allow these innovations to benefit the people that use them.
				</p>
				<p class="p"> TrailMix is a little project we decided to create to help bring to light the hobby of hunting and wildlife capture.
				</p>
				<p class="p last"> With TrailMix hunters and wildlife enthusiassts can now remotely manage their trail cameras without tediously visiting them daily.
				</p>
			</div> <!-- end of about class -->
		<!-- <div class="container">

		</div> -->
	</div>

	<!-- <div class="row content-section">
		<div class="container"> -->

			<!-- </div> --><!-------- END PAGE_WRAPPER --------> 


<?php
/* Adds in the footer at the bottom of the page.*/
include('footer.php');
?>
