<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Site Ayarı Ekle
        </h4>
    </div><!-- END column -->


    <div class="col-md-12">
        <form action="<?php echo base_url("settings/save"); ?>" method="post" enctype="multipart/form-data">
            <div class="widget">
                <div class="m-b-lg nav-tabs-horizontal">
                    <!-- tabs list -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab-1" aria-controls="tab-3" role="tab"
                                                                  data-toggle="tab">Site Bilgileri</a></li>
                        <li role="presentation"><a href="#tab-6" aria-controls="tab-6" role="tab" data-toggle="tab">Adres
                                Bilgisi</a></li>
                        <li role="presentation"><a href="#tab-2" aria-controls="tab-1" role="tab" data-toggle="tab">Hakkımızda</a>
                        </li>

                        <li role="presentation"><a href="#tab-5" aria-controls="tab-4" role="tab" data-toggle="tab">Sosyal
                                Medya</a></li>
                    </ul><!-- .nav-tabs -->

                    <!-- Tab panes -->

                    <div class="tab-content p-md">
                        <?php $this->load->view("$viewFolder/$subViewFolder/tabs/site_info"); ?>

                        <?php $this->load->view("$viewFolder/$subViewFolder/tabs/address"); ?>

                        <?php $this->load->view("$viewFolder/$subViewFolder/tabs/about_us"); ?>

                        <?php $this->load->view("$viewFolder/$subViewFolder/tabs/social_media"); ?>




                    </div><!-- .tab-content  -->
                </div><!-- .nav-tabs-horizontal -->
            </div><!-- .widget -->

            <button type="submit" class="btn btn-primary btn-md">Kaydet</button>
            <a href="<?php echo base_url("settings"); ?>" class="btn btn-md btn-danger">İptal</a>
        </form>
    </div><!-- END column -->
</div>