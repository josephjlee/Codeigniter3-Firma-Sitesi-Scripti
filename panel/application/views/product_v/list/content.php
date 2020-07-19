<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Ürün Listesi
            <a href="<?php echo base_url('product/new_form'); ?>" class="btn btn-outline btn-primary btn-xs pull-right">
                <i class="fa fa-plus"></i> Yeni Ekle</a>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php if (empty($items)) { ?>

                <div class="col-sm-10 alert alert-info text-center ml-auto mr-auto">
                    <p>Burada herhangi bir veri bulunmamaktadır. Eklemek için lütfen <a
                                href="<?php echo base_url('product/new_form'); ?>">tıklayınız</a></p>
                </div>

            <?php } else { ?>

                <table id="example" class="table table-hover table-bordered table-striped content-container">
                    <thead>
                    <tr>
                    <th><i class="fa fa-reorder"></i></th>
                    <th class="w50">#id</th>
                    <th>Başlık</th>
                    <th>url</th>
                    <th>Açıklama</th>
                    <th>Durumu</th>
                    <th>İşlem</th>
                    </tr>
                    </thead>
                    <tbody class="sortable" data-url="<?php echo base_url("product/rankSetter"); ?>">

                    <?php foreach ($items as $item) { ?>
                        <tr id="ord-<?php echo $item->id; ?>">
                            <td class="order"><i class="fa fa-reorder"></i></td>
                            <td class="w50 text-center">#<?php echo $item->id; ?></td>
                            <td><?php echo $item->title; ?></td>
                            <td><?php echo $item->url; ?></td>
                            <td><?php echo character_limiter(strip_tags($item->description), 100); ?></td>

                            <td class="w50">
                                <div class="toggle lg">
                                    <label>
                                        <input
                                                data-url="<?php echo base_url("product/isActiveSetter/$item->id"); ?>"
                                                class="isActive switchery"
                                                type="checkbox"
                                                data-switchery
                                                data-color="#10c469"
                                            <?php echo ($item->isActive) ? "checked" : ""; ?>
                                        /><span class="button-indecator"></span>
                                    </label>
                                </div>
                            </td>
                            <td class="text-center w-25">
                                <button
                                        data-id="<?php echo $item->id ?>"
                                        data-url="<?php echo base_url("product/delete/$item->id"); ?>"
                                        class="btn btn-sm btn-danger btn-outline  demoSwal">
                                    <i class="fa fa-trash"></i> Sil
                                </button>
                                <a href="<?php echo base_url("product/update_form/$item->id"); ?>"
                                   class="btn btn-sm btn-info  btn-outline"><i
                                            class="fa fa-pencil-square-o"></i> Düzenle</a>
                                <a href="<?php echo base_url("product/image_form/$item->id"); ?>"
                                   class="btn btn-sm btn-dark  btn-outline"><i class="fa fa-image"></i> Resimler</a>
                            </td>
                        </tr>

                    <?php } ?>

                    </tbody>


                </table>

            <?php } ?>

        </div><!-- .widget -->
    </div><!-- END column -->
</div>