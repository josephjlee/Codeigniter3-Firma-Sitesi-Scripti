<section class="material-half-bg">
    <div class="cover"></div>
</section>
<section class="login-content">
    <div class="logo">
        <h1>Şifre Sıfırlama Bölgesi</h1>
    </div>
    <div class="page-wrap d-flex flex-row align-items-center">
        <div class="container">
            <div class="row rounded">
                <div class="col-md-3">
                    <img src="<?php echo base_url('assets/img');?>/ilker.jpg" class="img-fluid rounded-circle shadow-sm" alt="" />
                </div>
                <div class="col-md-9">
                    <h2 class="font-weight-bold text-white">Parolanızı mı unuttunuz ??</h2>
                    <p style="color: #000;">Endişe etmeyin. Aşağıya e-posta adresinizi girmeniz yeterlidir; kurtarma için size bir talimat e-postası göndeririz.</p>
                    <form action="<?php echo base_url("reset-password"); ?>" method="post" class="mt-3">
                        <input
                                type="email"
                                class="form-control"
                                placeholder="E-posta Adresi"
                                name="email"
                                value="<?php echo isset($form_error) ? set_value("email") : ""; ?>">

                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error text-white"> <?php echo form_error("email"); ?></small>
                        <?php } ?>

                        <div class="text-right my-3">
                            <a href="<?php echo base_url('login'); ?>" class="btn btn-group-lg  btn-outline-info">Girişe Dön</a>
                            <button type="submit" class="btn btn-group-lg btn-success btn-outline-primary">Şifremi Sıfırla</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    body {
        background: #ddd;
    }
    .page-wrap {
        min-height: 100vh;
        max-width: 900px;
    }
    .container {

        max-width: 900px;
    }
</style>

