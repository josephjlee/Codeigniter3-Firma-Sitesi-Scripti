<?php $settings = get_settings(); ?>
<div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(<?php echo base_url("assets"); ?>/img/banner/23.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>İletişim</h1>
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>"><i class="fas fa-home"></i> Anasayfa</a></li>
                    <li class="active">İletişim</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="contact-area default-padding">
    <div class="container">
        <div class="row">
            <div class="contact-items bg-contain" style="background-image: url(<?php echo base_url("assets"); ?>/img/map.svg);">
                <div class="col-md-4 address">
                    <div class="address-items">
                        <ul class="info">
                            <li>
                                <h4>Adresimiz</h4>
                                <div class="icon"><i class="fas fa-map-marked-alt"></i></div>
                                <span><?php echo strip_tags($settings->address); ?> <br></span>
                            </li>

                            <li>
                                <h4>Phone</h4>
                                <div class="icon"><i class="fas fa-phone"></i></div>
                                <span><?php echo strip_tags($settings->phone_1); ?><br><?php echo strip_tags($settings->fax_1); ?></span>
                            </li>
                            <li>
                                <h4>Email</h4>
                                <div class="icon"><i class="fas fa-envelope-open"></i> </div>
                                <span><?php echo strip_tags($settings->email); ?><br></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 contact-form">
                    <h2>İstek & Öneri & Şikayet</h2>
                    <p>
                        Bu form mail hizmetini kullanır. Forma yazmış olduğunuz mail üzerinden tarafınıza geri dönüş yapılacaktır.
                    </p>
                    <form method="post" action="<?php echo base_url("mesaj-gonder"); ?>" class="contact-form">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Adınız Soyadınız" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email Adresiniz" type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="subject" name="subject" placeholder="İletişim Başlığı ?" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="message" name="message" placeholder="Konu Nedir *"></textarea>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

                        <div class="col-md-12">
                            <div class="row">
                                <button type="submit" name="submit" id="submit">
                                    Send Message <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-md-12 alert-notification">
                            <div id="bilgi" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>