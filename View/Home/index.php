<section id="home-properties" class="section home-properties">
	<div class="container">
		<h1 class="page-title">PROPERTIES FOR RENT</h1>

		<p class="subtitle">We have over 4,000 properties and over 20 years of experiance Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>



		<nav id="tabs" class="tabs text-center">
			<ul class="nav justify-content-center">
				<li class="nav-item active"><a class="nav-link">FEATURED</a></li>
				<li class="nav-item"><a class="nav-link">MOST RECENT</a></li>
				<li class="nav-item"><a class="nav-link">PET FRIENDLY</a></li>
				<li class="nav-item"><a class="nav-link">NEAR SCHOOLS</a></li>
				<li class="nav-item"><a class="nav-link">EMBASSY APPROVED</a></li>
			</ul>
		</nav>
		
		<style type="text/css">
			.products-grid{
				margin-top: 40px;
			}
			.products-grid .item{
				margin-bottom: 40px
			}
			.products-grid .item .inner{
				background-color: #fff;
				border-radius: 3px;
				position: relative;

				-webkit-box-shadow: 0px 0px 13px 0px rgba(82, 63, 105, 0.1);
    			box-shadow: 0px 0px 13px 0px rgba(82, 63, 105, 0.1);
			}
			.products-grid .item .pic{
				border-radius: 3px 3px 0 0;
				background-color: #000;
				
				/**/
			    
			}
			.products-grid .item .pic img{
				opacity: .7;
				-o-transition: opacity .23s, -o-transform .23s;
			    -ms-transition: opacity .23s, -ms-transform .23s;
			    -moz-transition: opacity .23s, -moz-transform .23s;
			    -webkit-transition: opacity .23s, -webkit-transform .23s;
			}
			.products-grid .item:hover .pic img{
				opacity: 1;
				-o-transform: scale(1.02);
			    -ms-transform: scale(1.02);
			    -moz-transform: scale(1.02);
			    -webkit-transform: scale(1.02);
			}
			.products-grid .item .content{
				padding: 2px 12px;
			}
			.products-grid .item .content>*{
				margin-top: 5px;
				margin-bottom: 5px;
			}
			.products-grid .item .title{
				font-weight: 600;
				font-size: 20px;

			}
			.products-grid .item .title>a{
				text-decoration: none;
			}
			.products-grid .item .code{
				
				color: #f7941e;
    			text-decoration: none;
			}
			.products-grid .item .meta{
				
			}
			.products-grid .item .meta>*{
				margin-right: 8px;
				line-height: 22px;
				display: inline-block;
				vertical-align: middle;
				font-weight: 600;
			}
			.products-grid .item .meta [class^="icon-"]{
				width: 18px;
				height: 18px;
				position: relative;
    			top: 3px;
			}
			.products-grid .item .meta .pet{
				width: 22px;
				height: 22px;
			}
			.products-grid .item .overlay-price{
				position: absolute;
				top: 12px;
				right: 0;
				background-color: #f7941e;
				padding: 4px 10px;
				color: #fff;
				text-align: right;
				font-weight: 600;
				line-height: 1;
				font-size: 20px;
				border-radius: 3px 0 0 3px;
				box-shadow: 0 1px 2px rgba(0,0,0,.3)
			}
			.products-grid .item .overlay-price .usd{
				font-size: 14px;
			}
			.products-grid .item .overlay-price .currency{
				font-size: 70%;
				position: relative;
				top: -2px;
				font-weight: 200
			}
			.products-grid .item .overlay-price .unit{
				font-size: 80%
			}
			.products-grid .item .buttons .btn{
				display: block;
				width: 100%
			}
		</style>

		<ul class="products-grid row">
			<?php for ($i=0; $i < 6; $i++) { ?>
			<li class="item col-4" ><div class="inner">
				<a href="product.html" class="pic">
					<img src="https://www.thaipropertyguide.com/gallery/property/apsu0545/a.jpg" alt="">
				</a>
				
				<div class="content">
					<h2 class="title"><a href="product.html">HOUSE WITH SHARED POOL FOR RENT IN SRINAKARIN</a></h2>
					<div class="desc">Single house in private gated community near Bangkok Patana School. Excellent community for families. Shopping mall, golf course. Very popular among the British families.</div>
					<div class="meta" >
						<a class="code" href="#">CODE : HSPSU0024</a>
						
					</div>
					<div class="meta clearfix" >
						<div><i class="icon-geometry mr-1"></i><span>400 SQM</span></div>
						<div><i class="icon-bathtub mr-1"></i><span>5 BATH</span></div>
						<div title=""><i class="icon-hotel-bed mr-1"></i><span>5 BED</span></div>

						<div><i class="icon-dog pet"></i></div>
						<div><i class="icon-cat pet"></i></div>
					</div>

					<div class="buttons"><a class="btn btn-mojo view-more" href="<?=URL?>product-detail.php">View Detail</a></div>
				</div>

				

				<div class="overlay-price">

					<span class="currency">฿</span>
					<span class="value">350K</span>
					<span class="unit">/mo</span>

					<p class="usd">≈ $5,588.24</p>
				</div>
					
			</div></li>
			<?php  } ?>
		</ul>

		<div class="text-center"><a class="btn btn-mojo view-more" href="<?=URL?>search.php">View More</a></div>
	</div>
</section>


<section id="home-about" class="home-about section parallax dark" style="background-image: url('<?=IMAGES?>home/home-about.jpg');display: none;">
	
	<div class="container">


		<h1 class="page-title">SEO TITLE ABOUT WHO WE ARE</h1>

		<p class="subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>

		<div class="text-center"><a class="btn btn-mojo view-more" href="<?=URL?>about-us.php">Read More</a></div>

	</div>
</section>


<section id="home-work" class="home-work section" style="display: none;">
	<div class="container">


		<h1 class="page-title">SEO TITLE ABOUT HOW WE WORK</h1>

		<div class="row mv-2 text-center">
			<div class="col">
				<img src="<?=IMAGES?>home/home-work-1.png" alt="" />
				<h3>SEO STEP 1</h3>

				<p>SEO opertunity here you should write about step 1. but be sure to add a keyword or 2. Then we’ll have more matching links to our home.</p>
			</div>
			<div class="col">
				<img src="<?=IMAGES?>home/home-work-2.png" alt="" />
				<h3>SEO STEP 2</h3>

				<p>SEO opertunity here you should write about step 1. but be sure to add a keyword or 2. Then we’ll have more matching links to our home.</p>

			</div>
			<div class="col">
				
				<img src="<?=IMAGES?>home/home-work-3.png" alt="" />
				<h3>SEO STEP 2</h3>

				<p>SEO opertunity here you should write about step 1. but be sure to add a keyword or 2. Then we’ll have more matching links to our home.</p>

			</div>
		</div>

		<p class="subtitle mt-5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>


		<div class="text-center"><a class="btn btn-mojo view-more" href="<?=URL?>about-us.php">Read More</a></div>
	</div>
</section>


<section id="home-life" class="home-life section parallax dark" style="background-image: url('<?=IMAGES?>home/home-life.jpg');">
	<div class="container">
		<h1 class="page-title">LIFE IN BANGKOK</h1>

		<p class="subtitle">Check out our Bangkok Life page where we give you an overview about whats in and around Bangkok. We show you where all best shopping malls are, where the best international schools for both Brithish and American systems, and everything you need to know about Bangkok Life</p>

		<div class="text-center"><a class="btn btn-mojo view-more" href="<?=URL?>expat.php">Bangkok Life</a></div>
	</div>
</section>


<section id="home-blog" class="home-blog section">
	<div class="container">
		<h1 class="page-title">LATEST NEWS</h1>

		

		<div class="text-center"><a class="btn btn-mojo view-more" href="<?=URL?>expat.php">More Latest News</a></div>
	</div>
</section>
