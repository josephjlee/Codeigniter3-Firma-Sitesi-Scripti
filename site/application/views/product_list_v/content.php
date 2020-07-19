<div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(<?php echo base_url("assets"); ?>/img/banner/22.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Yeni Mahsüllerimiz</h1>
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>/"><i class="fas fa-home"></i> Anasayfa</a></li>
                    <li class="active">Ürünlerimiz</li>
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
                            <?php foreach($products as $product) { ?>
                                <div class="pf-item development capital" style="position: absolute; left: 0%; top: 0px;">
                                    <div class="effect-left-swipe">
                                        <?php
                                        $image = get_product_cover_image($product->id);
                                        $image = ($image) ? base_url("/uploads/product_v/$image") : base_url("assets/img/default.jpg");
                                        ?>
                                        <img src="<?php echo $image; ?>" alt="thumb">
                                        <div class="icons">
                                            <h4><a href="<?php echo base_url("urun-detay/$product->url"); ?>"><?php echo character_limiter($product->title,15); ?></a></h4>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- End Single Item -->
                        </div>
                    </div>
                    <?php echo $links; ?>
                </div>
            </div>
        </div>
    </div>
</div>

