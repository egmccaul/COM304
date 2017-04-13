
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
		//margin-top:75px;
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
		padding-top:75px;
	}
	
	#contact-us{
		position: relative;
		width: 100%;
		height: auto;
		background-size: cover;
		//background-color: #fff;
		background-image: url(img/cube_background.jpg);
		background-attachment: fixed;
		padding-bottom: 50px;
		height:150%;
		padding-top:75px;
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
	#about-us{
		margin-bottom: 225px;
	}
	#flavor{
	color: lilac;}
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

                <a class="navbar-brand" href="index.php"><img src="img/granola_bar_logo.png" alt="TrailMix" style="width:auto;height:20px;"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
                    <li><a id="GoToSplash" href="#splash-screen" onclick="hideContent('product_page'); hideContent('contact-us'); showContent('home_page');">Home</a></li>
                    <li><a id="GoToLearnMore" href="#learn-more" onclick="hideContent('product_page'); hideContent('contact-us'); showContent('home_page');">Learn More</a></li>
					<li><a id="GoToMission" href="#mission" onclick="hideContent('product_page'); hideContent('contact-us'); showContent('home_page');">Mission</a></li>
					<li><a id="GoToVision" href="#vision" onclick="hideContent('product_page'); hideContent('contact-us'); showContent('home_page');">Vision</a></li>
                    <li><a id="GoToAboutUs" href="#about-us" onclick="hideContent('product_page'); hideContent('contact-us'); showContent('home_page');">About Us</a></li>
                </ul>
				<ul class="nav navbar-nav navbar-right">
					<li><button class="btn btn-trailmix" id="product_button" onclick="showContent('contact-us'); hideContent('home_page'); hideContent('product_page');">Contact Us <span class="glyphicon glyphicon-comment"></span></button></a></li>
					<li><button class="btn btn-trailmix" id="product_button" onclick="showContent('product_page'); hideContent('home_page'); hideContent('contact-us');">Products <span class="glyphicon glyphicon-apple"></span></button></a></li>
				</ul>
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
				<div class="col-md-5 feature-text-left">
					<p>Are you sick of the same old plain granola? Why not craft a flavor specific to your tastes.</p>
					<br>
					<p>Well now you can!</p>
				</div> 
				<!-- end of learn-more div class -->
				<div class ="col-md-5 feature-img">
					<img src="img/white_horse.jpg" alt="Idea of Business Interior" />
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
	<div id="mission">
		<div class="row">
			<div class="container feature-section">
		  <div class="col-md-6 feature-img">
					<img src="img/GranolaBase.jpg" alt ="Pile of Granola" />
				</div>
				<div class="col-md-6 feature-text-right">
					<p>We pride ourselves on providing our customers with a quality product while growing 
						our brand with the same organic integrity that is found in our granola.</p>
					
				</div> 
			</div> <!-- end feature secion div -->
		</div>
	<!-- end row div -->
	</div>


  <div id="feature2-photo" class="row content-section photo-section">
    <!-- #feature2-photo background-image will be video in gif format of a recording of a deer passing by from a fish-eye camera's point-of-view -->
		<div class="container">

		</div>
	</div>
	
	<div id="vision">
	  <div class="row">
			<div class="container feature-section">
				<div class="col-md-6 feature-text-left">
					<p>The Granola Bar’s vision is to promote a healthy lifestyle and to provide quick,
					effective, and friendly service.</p>
				</div> <!-- end of about class -->
				
				<div id="scrollDiv" class="col-md-6 feature-img">
					<img src="img/beachFire.jpeg" alt="Night-time beach photo" />
				</div>
			</div>
	  </div>
	</div>

	
	<div id="feature3-photo" class="row content-section photo-section">
		<div id="about-us">
			<h2>About Us</h2>
			<p class="p"> We are The Granola Bar. We are an organization that strives to live by what we sell.</p>
			<p class="p"> The Granola Bar is a place where a healthy lifestyle and food come together, and like any other 
			organization or business we have many working parts. Some of these parts include our organizational 
			concept, vision and mission, culture, and conflict management.</p>
			<p class="p last"> We are a place that works to create an environment that employees and customers want to visit every day.</p>
			<!--<p class="p"> We source organic ingredients, which will have the most benefits possible to help you thrive during your healthy lifestyle.
			Paired with a relaxing atmosphere to allow you to melt away stress when time allows.</p>
			<p class="p last"> You pick the flavor combinations, grains, supplement, and glue to hold it all together.
			Find a combination that matches your personality.</p>-->
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
					<h3>Flavor of the Month:</h3>
					<h4 id="flavor">Orange you glad it's Spring!</h4>
					<ul>
						<li>Oranges</li>
						<li>Almonds</li>
						<li>Chocolate</li>
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
<div class="container" id="contact-us" style="display:none;">
	<div class="row content">
		<br>
		<br>
		<!--Add the header to the top of the page.-->
		<h1 id="page_title" class="contactTitle">Contact Us</h1>
	</div>
	<div class="row content">
		<div class="col-sm-8 col-sm-push-2 contact-form" id="form_layout">
		
			<form class="form-horizontal" action="mailer.php" method="post" name="form1" id="form1" onsubmit="MM_validateForm('from','','RisEmail','subject','','R','verif_box','','R','message','','R');return document.MM_returnValue">
				<br>
				<div class="form-group">
					<label class="control-label col-sm-4" for="name">Your Name:</label>
					<div class="col-sm-7">
						<input class="form-control" name="name" type="text" id="name" value="<?php echo $_SESSION['lname'] . ", " . $_SESSION['name'];?>"/>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4" for="from">Your e-mail:</label>
					<div class="col-sm-7">
						<input class="form-control" name="from" type="text" id="from" value="<?php echo $_SESSION['email'];?>"/>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4" for="subject">Subject:</label>
					<div class="col-sm-7">
						<input class="form-control" name="subject" type="text" id="subject"/>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4" for="verif_box">Type verification image:</label>
					<div class="col-sm-6">
						<input class="form-control" name="verif_box" type="text" id="verif_box" style=""/>
					</div>
					<div class="col-sm-1 ">
						<img src="verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image, type it in the box" width="50" height="24" align="absbottom" />
					</div>
				</div>
				
				<!-- if the variable "wrong_code" is sent from previous page then display the error field -->
				<?php if(isset($_GET['wrong_code'])){?>
				<div class="form-group" id="wrong_verify">
					<label>Wrong verification code</label>
				</div>
				<?php ;}?>
				
				<div class="form-group">
					<label class="control-label col-sm-4" for="message">Message:</label>
					<div class="col-sm-7">
						<textarea name="message" id="message"></textarea>
					</div>
				</div>
				<input name="Submit" type="submit" id="submit" class="btn btn-trailmix contactSubmitBtn" value="Send Message"/>
			</form>
		</div>
	</div>
	<br>
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
