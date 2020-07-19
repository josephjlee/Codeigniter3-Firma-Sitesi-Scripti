<?php $settings = get_settings(); ?>
<!-- Header
============================================= -->
<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky bootsnav">

        <!-- Start Top Search -->
        <div class="container">
            <div class="row">
                <div class="top-search">
                    <div class="input-group">
                        <form action="<?= base_url("arama-sonuc") ;?>" method="post">
                            <input type="text" name="search" class="form-control" placeholder="Ürün Ara" >
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                            <button type="submit" name='submit' value='Submit'>
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container">
            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    <li class="quote-btn"><a href="<?php echo base_url("iletisim"); ?>">İletişim</a></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">
                    <img src="<?php echo  base_url("assets/img/")."logo-1.png";?>" class="logo" alt="<?php echo $settings->company_name; ?>">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                    <li>
                        <a href="<?php echo base_url(); ?>">Anasayfa</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("hakkimizda"); ?>">Hakkımızda</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("urun-listesi"); ?>">Ürünlerimiz</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Galeri</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url("fotograf-galerisi"); ?>">Resim Galerisi</a></li>
                            <li><a href="<?php echo base_url("video-galerisi"); ?>">Video Galerisi</a></li>
                            <li><a href="<?php echo base_url("dosya-galerisi"); ?>">Dosya Galerisi</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

    </nav>
    <!-- End Navigation -->

</header>
<!-- End Header -->