<?php
include('header.php');
?>

<style>
	.products .content{
		top:75px;
		background-color:rgba(22,25,26, 0.8);
		padding:20px;
	}
	#ingr{
		//max-width: 1080px;
		width:100%;
		height:auto;
	}
	.product_page{
	position: absolute;
    width: 100%;
    height: 100%;
    background-image: url(img/cube_background.jpg);
    background-size: cover;
    //background-color: #fff;
	background-attachment: fixed;
	}
</style>
<div class="product_page">
	<div class="col-lg-8 col-md-10 col-md-push-1 col-lg-push-2">
		<div class="products">
			<div class="col-md-12 content">
				<div class="text-center">
					<img id="ingr" src="img/Ingredients.png">
				</div>
				<!--<br>
				<div>
					<h2>Ingredients</h2>
					<ul>
						<li>Grains</li>
						<li>Fruit</li>
						<li>Nuts</li>
					</ul>
				</div>-->
			</div>
		</div>
	</div>
</div>
<?php
include('footer.php');
?>