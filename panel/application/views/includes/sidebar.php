<?php $user = get_active_user(); ?>
<?php $settings = get_settings(); ?>
<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <?php if ($settings->logo != "default") { ?>
            <img
                    width="70"
                    src="<?php echo get_picture("settings_v", $settings->favicon, "300x70"); ?>"
                    alt=""
                    class="app-sidebar__user-avatar">

        <?php } else { ?>

            <img
                    width="70"
                    src="<?php echo base_url("assets/img/default.png"); ?>"
                    alt=""
                    class="app-sidebar__user-avatar">

        <?php } ?>

        <div>
            <p class="app-sidebar__user-name"><?php echo $user->full_name; ?></p>
            <p class="app-sidebar__user-designation"><?php echo $user->email; ?></p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item" href="<?php echo base_url(); ?>"><i
                        class="app-menu__icon fa fa-dashboard"></i><span
                        class="app-menu__label">Anasayfa</span></a></li>
        <li><a class="app-menu__item" href="<?php echo base_url("settings"); ?>"><i
                        class="app-menu__icon fa fa-cogs"></i><span
                        class="app-menu__label">Ayarlar</span></a></li>
        <li><a class="app-menu__item" href="<?php echo base_url("emailsettings"); ?>"><i
                        class="app-menu__icon fa fa-cogs"></i><span
                        class="app-menu__label">E-posta Ayarları</span></a></li>
        <li><a class="app-menu__item" href="<?php echo base_url('product'); ?>"><i
                        class="app-menu__icon fa fa-cubes"></i><span
                        class="app-menu__label">Ürünler</span></a></li>
        <li><a class="app-menu__item" href="<?php echo base_url("slides"); ?>"><i
                        class="app-menu__icon fa fa-check"></i><span
                        class="app-menu__label">Slider</span></a></li>
        <li><a class="app-menu__item" href="<?php echo base_url("galleries"); ?>"><i
                        class="app-menu__icon fa fa-film"></i><span
                        class="app-menu__label">Galeri İşlemleri</span></a></li>


        <li><a class="app-menu__item" href="<?php echo base_url('popups'); ?>"><i
                        class="app-menu__icon fa fa-cubes"></i><span
                        class="app-menu__label">Duyurular</span></a></li>


        <li><a class="app-menu__item" href="<?php echo base_url("users"); ?>"><i
                        class="app-menu__icon fa fa-ravelry "></i><span
                        class="app-menu__label">Yönetici İşlemleri</span></a></li>


    </ul>
</aside>