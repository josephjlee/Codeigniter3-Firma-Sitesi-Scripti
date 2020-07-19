<div class="portfolio-area inc-colum default-padding">
    <div class="container">
        <div class="portfolio-items-area text-center">
            <div class="row">
                <div class="col-md-12 portfolio-content">
                    <!-- End Mixitup Nav-->
                    <div class="row magnific-mix-gallery text-center masonary">
                        <div id="portfolio-grid" class="portfolio-items col-4" style="position: relative; height: 519.703px;">
                            <!-- Single Item -->
                            <?php foreach($c1 as $product) { ?>
                            <div class="pf-item capital" style="position: absolute; left: 50%; top: 292px;">
                                <div class="effect-left-swipe">
                                    <?php
                                    $image = get_product_cover_image($product->id);
                                    $image = ($image) ? base_url("/uploads/product_v/$image") : base_url("assets/img/default.jpg");
                                    ?>
                                    <img src="<?php echo $image; ?>" alt="thumb">
                                    <a href="<?php echo base_url("urun-detay/$product->url"); ?>" class="item"></a>
                                    <div class="icons">
                                        <h4><a href="<?php echo base_url("urun-detay/$product->url"); ?>"><?php echo character_limiter($product->title,15); ?></a></h4>

                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="achivement-area bg-fixed shadow dark text-light default-padding" style="background-image: url(assets/img/banner/9.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12 info">
                <h2>Ballarımız %100 organik ve Ürünlerimizde Asla Katkı Maddesi Kullanmıyoruz.</h2>
                <p>
                   Arılarımız %100 doğal ortamlarında Üretim Yapmaktadır.Profesyonel Ekiplerimiz Tarafından Denetimleri Yapılmaktadır.

                </p>
            </div>

        </div>
    </div>
</div>

