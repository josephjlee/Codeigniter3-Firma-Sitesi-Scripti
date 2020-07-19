<div class="breadcrumb-area shadow dark bg-fixed text-center text-light"
         style="background-image: url(<?php echo base_url("assets"); ?>/img/banner/2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1> <?php echo $this->session->search; ?> Kelimesine ait Sonuçlar</h1>
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>"><i class="fas fa-home"></i> Anasayfa</a></li>
                        <li class="active">Veriler</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-area default-padding">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-content">
                                <div class="search-results-list">

                                    <?php
                                    $sno = $row+1;
                                    foreach ($result as $data) { ?>
                                        <div class="row search-item">
                                            <div class="col-md-10">
                                                <a href="<?php echo base_url("urun-detay/") .$data['url']; ?>"
                                                   class="search-title"><h5
                                                            class="alert alert-success alert-dismissable"><?php echo $data['title']; ?></h5>
                                                </a>
                                                <p><?php $content = substr($data['description'],0, 180)." ...";?></p>
                                                <!--<p><?php /*echo character_limiter(strip_tags($search_show->description), 200); */?></p>-->
                                            </div>
                                        </div>
                                    <?php }if(count($result) == 0){
                                        echo "<div class=\"alert alert-danger alert-dismissable\">";
                                        echo "<strong>Üzgünüz!</strong> Aradığınız Veri Bulunamadı.";
                                        echo "</div>";
                                    } ?>
                                </div>



                                <?php echo $pagination; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


