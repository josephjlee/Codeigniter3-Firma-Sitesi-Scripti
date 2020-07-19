<section class="material-half-bg">
    <div class="cover"></div>
</section>
<section class="login-content">
    <div class="logo">
        <h1>Yönetim Sistemi</h1>
    </div>
    <div class="login-box">
        <form class="login-form" action="<?php echo base_url("userop/do_login"); ?>" method="post">
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-forumbee"></i>YÖNETİCİ</h3>
            <div class="form-group">
                <label class="control-label">E-POSTA</label>
                <input class="form-control" type="text" name="user_email" placeholder="Eposta adresinizi giriniz" autofocus>
                <?php if(isset($form_error)){ ?>
                    <small class="pull-right input-form-error"> <?php echo form_error("user_email"); ?></small>
                <?php } ?>
            </div>
            <div class="form-group">
                <label class="control-label">ŞİFRE</label>
                <input class="form-control" type="password" name="user_password" placeholder="Şifrenizi Giriniz">
                <?php if(isset($form_error)){ ?>
                    <small class="pull-right input-form-error"> <?php echo form_error("user_password"); ?></small>
                <?php } ?>
            </div>
            <div class="form-group">
                <div class="utility">
                    <div class="animated-checkbox">
                        <label>
                            <input type="checkbox"><span class="label-text">Beni Hatırla</span>
                        </label>
                    </div>
                    <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Şifremi Unuttum ?</a></p>
                </div>
            </div>
            <div class="form-group btn-container">
                <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>GİRİŞ YAP</button>
            </div>
        </form>
        <form class="forget-form" action="<?php echo base_url("reset-password"); ?>" method="post">
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>ŞİFREMİ YENİLE ?</h3>
            <div class="form-group">
                <label class="control-label">EPOSTA</label>
                <input class="form-control" type="text" name="email" placeholder="Lütfen kayıtlı eposta adresinizi yazınız.">
            </div>
            <div class="form-group btn-container">
                <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>SIFIRLA</button>
            </div>
            <div class="form-group mt-3">
                <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Girişe Dön</a></p>
            </div>
        </form>
    </div>
</section>

