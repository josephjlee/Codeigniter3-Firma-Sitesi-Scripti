<div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(<?php echo base_url("assets"); ?>/img/banner/22.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1><?php echo $gallery->title; ?> Video Galerisi</h1>
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>/"><i class="fas fa-home"></i> Anasayfa</a></li>
                    <li class="active"><?php echo $gallery->title; ?> Galerisi</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-area inc-colum default-padding">
    <div class="container">
        <div class="portfolio-items-area text-center">
            <div class="row">
                <div class="col-md-12 portfolio-content">
                    <!-- End Mixitup Nav-->

                    <div class="row magnific-mix-gallery text-center masonary">
                        <div id="portfolio-grid" class="portfolio-items col-4" style="position: relative; height: 585.656px;">
                            <!-- Single Item -->
                            <?php if(!empty($videos)) { ?>

                            <?php foreach ($videos as $video) { ?>
                                <div class="pf-item development capital" style="position: absolute; left: 0%; top: 0px;">
                                    <div class="effect-left-swipe">
                                        <iframe class="embed-responsive-item " src="//www.youtube.com/embed/<?php echo $video->url; ?>">
                                        </iframe>
                                        <a href="https://www.youtube.com/watch?v=<?php echo $video->url; ?>" class="popup-youtube light video-play-button item-center">
                                            <i class="fa fa-play"></i>
                                        </a>


                                    </div>
                                </div>
                            <?php }
                            } ?>
                            <!-- End Single Item -->
                        </div>
                        <div class="row pull-left">
                            <a href="<?php echo base_url("video-galerisi"); ?>" class="btn btn-default">
                                <i class="fa fa-arrow-left"></i> Geri Dön
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>