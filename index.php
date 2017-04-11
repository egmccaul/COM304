
<head>
        <title>COM 304 Project</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Our file css -->
        <link rel="stylesheet" href="style.css" />
</head>

<style>
	.content{
		margin-top:75px;
		background-color:rgba(22,25,26, 0.8);
		padding:20px;
	}
	.content2{
		background-color:rgba(22,25,26, 0.8);
		padding-left:20px;
		padding-bottom:10px;
		padding-right:20px;
		margin-bottom:155px;
	}
	#ingr{
		//max-width: 1080px;
		width:100%;
		height:auto;
	}
	#bag_size{
		width:100%;
		height:auto;
		padding:20px 0;
	}
	#product_page{
		position: relative;
		width: 100%;
		height: auto;
		background-size: cover;
		//background-color: #fff;
		background-image: url(img/cube_background.jpg);
		background-attachment: fixed;
		padding-bottom: 50px;
		height:150%;
	}
	.blank{
		height: 20px;
	}
	.blank2{
		margin-bottom:100px;
		position:relative;
	}
	/*body{
	
		background-image: url(img/cube_background.jpg);
	}*/
	#product_button{
		margin-top:10px;
		margin-right:10px;
	}
</style>

<body id="general_page">

		
   <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" onclick="hideContent('product_page'); showContent('home_page');"><img src="img/granola_bar_logo.png" alt="TrailMix" style="width:auto;height:20px;"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
                    <li><a id="GoToSplash" href="#splash-screen">Home</a></li>
                    <li><a id="GoToLearnMore" href="#learn-more">Learn More</a></li>
                    <li><a id="GoToAboutUs" href="#about-us">About Us</a></li>
                </ul>
				<ul class="nav navbar-nav navbar-right">
					<li><button class="btn btn-trailmix" id="product_button" onclick="showContent('product_page'); hideContent('home_page');">Products <span class="glyphicon glyphicon-tags"></span></button></a></li>
				</ul>
				</div>
            </div>
        </div>
    </nav>

<div id="home_page" class="pagewrapper">
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

</div><!-------- END PAGE_WRAPPER --------> 

<div id="product_page" class="pagewrapper" style="display:none;">
	<div class="col-lg-8 col-md-10 col-md-push-1 col-lg-push-2">
		<div class="products">
			<div class="col-md-12 content">
				<div class="text-center">
					<img id="ingr" src="img/Ingredients.png">
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-8 col-md-10 col-md-push-1 col-lg-push-2 blank">
	</div>
	<div class="col-lg-8 col-md-10 col-md-push-1 col-lg-push-2">
		<div class="products">
			<div class="col-md-12 content2">
				<div class="col-sm-6 col-md-3">
					<h3>Sizes:</h3>
					<ul>
						<li>Smanola</li>
						<li>Nola</li>
						<li>Lanola</li>
						<li>Megnola</li>
					</ul>
				</div>
				<div class="col-sm-6 col-md-9">
					<img id="bag_size" src="img/Sizes.png">
				</div>
			</div>
		</div>
	</div>
	<!--<div class="col-lg-8 col-md-10 col-md-push-1 col-lg-push-2 blank2">
	</div>-->
</div>

<script>
function showContent(id){
    document.getElementById(id).style.display = "block";
  }
  function hideContent(id){
    document.getElementById(id).style.display = "none";
  }
</script>

<?php
/* Adds in the footer at the bottom of the page.*/
include('footer.php');
?>
