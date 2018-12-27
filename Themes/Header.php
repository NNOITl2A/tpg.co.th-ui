<?php

$hotline = array();
$hotline[] = array('name'=>'consult@thaipropertyguide.com', 'link'=>'mailto:consult@thaipropertyguide.com', 'type'=>'email', 'icon'=>'envelope-o');
$hotline[] = array('name'=>'(+66) 02 730 3722-23(EN)', 'link'=>'tel:+66027303723', 'icon'=>'phone');
$hotline[] = array('name'=>'081-359-3327(TH)', 'link'=>'tel:0813593327', 'icon'=>'phone');
$hotline[] = array('name'=>'Client\'s Review', 'link'=> URL. 'review.php', 'icon'=>'thumbs-o-up');
// $hotline[] = array('name'=>'Contact Us', 'link'=> URL. 'contact-us', 'icon'=>'user');


$navigation = array();
// $navigation[] = array('id'=>'', 'name'=> 'Home', 'link'=> URL);
$navigation[] = array('id'=>'', 'name'=> 'For Rent', 'link'=>URL.'search.php?for=rent');
// $navigation[] = array('id'=>'', 'name'=> 'For Sale', 'link'=>URL.'search.php?for=sale');
$navigation[] = array('id'=>'', 'name'=> 'Expat Center', 'link'=>URL.'expat.php');
$navigation[] = array('id'=>'', 'name'=> 'Property Center', 'link'=>URL.'search.php');
$navigation[] = array('id'=>'', 'name'=> 'Latest News', 'link'=>URL.'new.php');
$navigation[] = array('id'=>'', 'name'=> 'About Us', 'link'=> URL.'about-us.php');
$navigation[] = array('id'=>'', 'name'=> 'Contact Us', 'link'=>URL.'contact-us.php');


$social = array();
$social[] = array('id'=>'facebook', 'name'=> 'facebook', 'link'=>'#');
$social[] = array('id'=>'instagram', 'name'=> 'instagram', 'link'=>'#');
// $social[] = array('id'=>'twitter', 'name'=> 'twitter');

// FOR RENT EXPAT CENTERPROPERTY CENTERLATEST 

?><header id="header-primary" class="page-header">
	
	<div id="page-header-top" class="page-header-top">
		<div class="container" >
			<div class="navbar navbar-expand flex-column flex-md-row">
				<nav class="">
					<ul class="navbar-nav bd-navbar-nav flex-row">
						<?php foreach ($hotline as $key => $value) {

							$type = isset($value['type']) ? $value['type']: '';
							$icon = isset($value['icon']) ? '<i class="mr-1 fa fa-'.$value['icon'].'"></i>': '';

						?>
						<li class="nav-item <?=$type?>">
					        <a class="nav-link" href="<?=$value['link']?>"><?=$icon?><span><?=$value['name']?></span></a>
					    </li>
						<?php } ?>
					</ul>
				</nav>

				<nav class="navbar-nav flex-row ml-md-auto d-none d-md-flex nav-social">
					<?php foreach ($social as $key => $value) {

							$icon = isset($value['id']) ? '<i class="icon-'.$value['id'].'"></i>': '';

						?>
						<li class="nav-item">
					        <a class="nav-link" href="<?=$value['link']?>"><?=$icon?><span class="sr-only"><?=$value['name']?></span></a>
					    </li>
						<?php } ?>
				</nav>
			</div>
			
		</div>
	</div>

	<div id="topbar" class="topbar">
		<div id="global-nav" class="global-nav">
			<div class="container global-nav-inner">
				
				<!-- class="logo-fill"  -->
				<div class="navbar navbar-expand flex-column flex-md-row">
					<a class="navbar-brand" href="<?=URL?>">
						<svg class="logo-icon"  version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-5022 3293.6 500 500" xml:space="preserve"><path fill="currentColor" d="M-5022,3293.6v265c101.7-123.3,125.2-253.3,125.2-253.3c61.7,235.3,214.7,363.2,227.6,367.7 	c26.9,12.9,40.9,1.7,38.9-14c-2.7-15.9-23.5-23.6-43.1-40.4c-41.1-36.9-22.9-93.3-22.9-93.3c10.6,27.7,28,48.7,70.5,71 	c52,30.8,58.7,69.9,58.7,83.9s-5.3,78.3,3.1,95.6c0,0-184.3,0-333.3-294.8l-1.9-3.8c-30.4,86.7-122.8,176.2-122.8,176.2v140.2h500 v-500H-5022z"/></svg>
						<div class="logo-text">
							<span class="d-block" style="line-height: 1;">Thai Property <br>Guide.com</span>
						</div>
					</a>
					<nav class="" role="navigation">
						<ul class="navbar-nav bd-navbar-nav flex-row" id="global-actions">
							<?php foreach ($navigation as $key => $value) { ?>
								<li class="nav-item"><a class="nav-link " href="<?=$value['link']?>"><?=$value['name']?></a></li>
							<?php } ?>
							
						</ul>
					</nav>

					<nav class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
						<li class="nav-item">
					        <a class="nav-link nav-link-wishlist" href="<?=URL?>wishlist.php"><i class="icon-wishlist mr-1"></i><span class="d-inline-block mr-1">Wishlist</span><span class="countVal">10</span></a>
					    </li>
					</nav>
				</div>
			</div>
		</div>
	</div>

</header>