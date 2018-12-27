<?php

$items = array();
$items[] = array('src'=> IMAGES.'banner/slide1.jpg', 'alt'=>'First slide [800x400]');
$items[] = array('src'=> IMAGES.'banner/slide2.jpg', 'alt'=>'Second slide [800x400]');
$items[] = array('src'=> IMAGES.'banner/slide3.jpg', 'alt'=>'Third slide [800x400]');


?>

  <section id="hero" class="carousel" data-ride="carousel">

    <!-- <ol class="carousel-indicators">
      <?php foreach ($items as $key => $value) { ?>
      <li data-target="#hero" data-slide-to="<?=$key?>" class="<?=$key==0 ?'active':''?>"></li>
      <?php } ?>
    </ol> -->

    <div class="carousel-inner">
    <?php foreach ($items as $key => $value) { ?>

      <div class="carousel-item<?=$key==0 ?' active':''?>">
        <div class="pic">
          <img class="d-block w-100" alt="<?=$value['alt']?>" src="<?=$value['src']?>">
        </div>
        <div class="overlay"></div>
      </div>

    <?php } ?>
    </div>
    <a class="carousel-control-prev" href="#hero" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#hero" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

    <div class="search-box-wrap">
      <?php include_once WWW_COMPONENTS .'SiteSearch/index.php'; ?>
    </div>

  </section>