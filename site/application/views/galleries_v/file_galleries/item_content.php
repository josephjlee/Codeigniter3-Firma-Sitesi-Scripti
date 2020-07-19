<div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(<?php echo base_url("assets"); ?>/img/banner/22.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1><?php echo $gallery->title; ?> İndirme Galerisi</h1>
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>/"><i class="fas fa-home"></i> Anasayfa</a></li>
                    <li class="active"><?php echo $gallery->title; ?> Galerisi</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-area inc-colum default-padding">
<div class="container">
    <h1 class="text-center"><?php echo $gallery->title; ?></h1>
    <div class="row col-md-12 col-md-offset-2 custyle">
        <?php if (!empty($files)) { ?>
        <table class="table table-hover table-striped table-bordered table-colored">
            <thead>
            <tr>
                <th>Dosya Adı</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <?php foreach ($files as $file) { ?>
            <tr>
                <td><?php echo $file->url; ?></td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="<?php echo base_url("uploads/galleries_v/files/$gallery->folder_name/$file->url"); ?>"><span class="far fa-arrow-alt-circle-down"></span> İndir</a></td>
                <?php } ?>
            </tr>
        </table>
        <?php } else { ?>
            <div class="col-md-12">
                <div class="alert alert-warning text-center">
                    Maalesef burada bir veri bulunamadı!!!
                </div>
            </div>

        <?php } ?>
    </div>
</div>
</div>






