<?php
include('header.php');
?>

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
	.product_page{
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
</style>
<div class="product_page pagewrapper">
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
<?php
include('footer.php');
?>