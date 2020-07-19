<?php $settings = get_settings(); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <?php if($settings->logo == "default") {

        $favicon_image = base_url("assets") . "/assets/images/logo.png";

    } else {

        $favicon_image = get_picture("settings_v", $settings->favicon, "32x32");

    }
    ?>
    <link rel="shortcut icon" sizes="196x196" href="<?php echo $favicon_image; ?>">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title><?php echo $settings->company_name; ?> | Yönetim </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets');?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets');?>/css/summernote-bs4.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets');?>/css/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets');?>/css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets');?>/css/dropzone.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets');?>/css/iziToast.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets');?>/css/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets');?>/css/style.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>