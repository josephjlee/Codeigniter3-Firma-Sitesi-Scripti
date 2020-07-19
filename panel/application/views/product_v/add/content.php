<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Ürün Ekle
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("product/save"); ?>" method="post">

                    <div class="form-group">
                        <label>Başlık</label>
                        <input class="form-control" placeholder="Başlık" name="title">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("title"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label>Açıklama</label>
                        <textarea name="description" class="mr-auto ml-auto mt-auto" id="summernote"></textarea>
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("description"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="col-md-4 float-right">
                        <div class="form-group">
                            <label>Fiyat</label>
                            <input class="form-control" placeholder="Ürün Fiyati" name="fiyat">
                            <?php if(isset($form_error)){ ?>
                                <small class="pull-right input-form-error"> <?php echo form_error("fiyat"); ?></small>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="col-md-4 float-right">
                    <div class="form-group">
                        <label>Bal Türü</label>
                        <input class="form-control" placeholder="Bal Türü" name="bal_turu">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("bal_turu"); ?></small>
                        <?php } ?>
                    </div>
                    </div>

                    <div class="col-md-4 float-left">
                    <div class="form-group">
                        <label>Paketleme</label>
                            <input class="form-control" placeholder="Koli,Kavonoz vb" name="paketleme">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("paketleme"); ?></small>
                        <?php } ?>
                    </div>
                    </div>

                    <div class="col-md-4 float-left">
                    <div class="form-group">
                        <label>Gramaj</label>
                        <input class="form-control" placeholder="Balın GR/KG" name="gramaj">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("gramaj"); ?></small>
                        <?php } ?>
                    </div>
                    </div>

                    <div class="col-md-4 float-left">
                    <div class="form-group">
                        <label>Üretim Yılı</label>
                        <input class="form-control" placeholder="Balın Üretim Yılı" name="uretim_yili">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("uretim_yili"); ?></small>
                        <?php } ?>
                    </div>
                    </div>

                    <div class="col-md-4 float-left">
                    <div class="form-group">
                        <label>Menşei</label>
                        <input class="form-control" placeholder="Bal Nerede Üretildi ?" name="mensei">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("mensei"); ?></small>
                        <?php } ?>
                    </div>
                    </div>

                    <div class="col-md-4 float-left">
                    <div class="form-group">
                        <label>Kullanım Alanı</label>
                        <input class="form-control" placeholder="Balın Kullanım alanını Giriniz" name="kullanim_alani">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("kullanim_alani"); ?></small>
                        <?php } ?>
                    </div>
                    </div>

                    <div class="col-md-4 float-left">
                    <div class="form-group">
                        <label>Paket Ebatları</label>
                        <input class="form-control" placeholder="Paket Ebatlarını Giriniz" name="paket_ebatlari">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("paket_ebatlari"); ?></small>
                        <?php } ?>
                    </div>
                    </div>

                    <div class="col-md-4 float-left">
                    <div class="form-group">
                        <label>Koli Ebatları</label>
                        <input class="form-control" placeholder="Koli Ebatları giriniz" name="koli_ebatlari">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("koli_ebatlari"); ?></small>
                        <?php } ?>
                    </div>
                    </div>

                    <div class="col-md-4 float-left">
                    <div class="form-group">
                        <label>Adet</label>
                        <input class="form-control" placeholder="Koli İçerisindeki Adet Sayısı" name="adet">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("adet"); ?></small>
                        <?php } ?>
                    </div>
                    </div>


                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php echo base_url("product"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>