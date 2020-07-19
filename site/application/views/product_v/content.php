<!-- Page Content -->
<div class="container iceriktepe">
    <div class="row">
        <div class="col-md-12">
            <h1><?php echo $product->title; ?></h1>
        </div>
        <div class="col-md-7">
                <?php foreach ($product_images as $image) { ?>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a href="<?php echo base_url("uploads/product_v/$image->img_url"); ?>" class="fancybox" rel="ligthbox">
                            <img  src="<?php echo base_url("uploads/product_v/$image->img_url"); ?>" class="zoom img-fluid "  alt="">
                        </a>
                    </div>
                <?php } ?>
            </div>
        <div class="col-md-5">
            <table id="customers">
                <tr>
                    <th>Özellik</th>
                    <th>Veri</th>
                </tr>
                <tr>
                    <td>Fiyat</td>
                    <td><?php echo $product->fiyat; ?> TL</td>
                </tr>
                <tr>
                    <td>Bal Türü</td>
                    <td><?php echo $product->bal_turu; ?></td>
                </tr>
                <tr>
                    <td>Paketleme</td>
                    <td><?php echo $product->paketleme; ?></td>
                </tr>
                <tr>
                    <td>Gramaj / Adet </td>
                    <td><?php echo $product->gramaj; ?> gr</td>
                </tr>
                <tr>
                    <td>Üretim Yılı</td>
                    <td><?php echo $product->uretim_yili; ?></td>
                </tr>
                <tr>
                    <td>Menşei</td>
                    <td><?php echo $product->mensei; ?></td>

                </tr>
                <tr>
                    <td>Kullanım Alanı</td>
                    <td><?php echo $product->kullanim_alani; ?></td>
                </tr>
                <tr>
                    <td>Paket Ebatları</td>
                    <td><?php echo $product->paket_ebatlari; ?></td>
                </tr>
                <tr>
                    <td>Koli Ebatları</td>
                    <td><?php echo $product->koli_ebatlari; ?></td>

                </tr>
                <tr>
                    <td>Koli içi adet</td>
                    <td><?php echo $product->adet; ?></td>

                </tr>
            </table>

            <div class="col-lg-12 siparis">
                <button type="button" class="btn btn-warning btn-lg btn-block "><i class="fab fa-forumbee"> Sipariş Ver</i>
                </button>
            </div>
            </div>
        <div class="col-md-12 ayrintilar">
            <div class="extra-title">
                <span>Ayrıntılar</span>
            </div>
            <div class="description">
                <?php echo $product->description; ?>
            </div>
        </div>
    </div>

</div>


