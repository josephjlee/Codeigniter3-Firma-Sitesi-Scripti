<?php $settings = get_settings(); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Balcı Oğlu">

    <!-- ========== Page Title ========== -->
    <title><?php if (isset($baslik)) {echo $baslik." | "; } echo $settings->company_name; ?></title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="<?php echo get_picture("settings_v", $settings->favicon, "32x32"); ?>">

    <!-- ========== Start Stylesheet ========== -->
    <link href="<?php echo base_url("assets");?>/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url("assets");?>/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?php echo base_url("assets");?>/css/flaticon-set.css" rel="stylesheet" />
    <link href="<?php echo base_url("assets");?>/css/magnific-popup.css" rel="stylesheet" />
    <link href="<?php echo base_url("assets");?>/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?php echo base_url("assets");?>/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="<?php echo base_url("assets");?>/css/animate.css" rel="stylesheet" />
    <link href="<?php echo base_url("assets");?>/css/bootsnav.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url("assets");?>/css/jquery.fancybox.css">
    <link href="<?php echo base_url("assets");?>/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url("assets");?>/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->
    <?php if(isset($opengraph)){ ?>

        <!--    OPENGRAPH-->
        <meta property="og:title" content="<?php echo $product->title; ?>"/>
        <meta property="og:description" content="<?php echo character_limiter(strip_tags($product->description), 200); ?>" />
        <meta property="og:type" content="video.movie" />
        <meta property="og:url" content="<?php echo base_url("$product->url"); ?>" />
        <?php
        $image = get_product_cover_image($product->id);
        $image = ($image) ? base_url("/uploads/product_v/$image") : base_url("assets/img/default.jpg");
        ?>
        <meta property="og:image" content="<?php echo  $image; ?>" />


    <?php } ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url("assets");?>/js/html5/html5shiv.min.js"></script>
    <script src="<?php echo base_url("assets");?>/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aladin&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap&subset=latin-ext" rel="stylesheet">

</head>
<body>

<!-- Preloader Start -->
<div class="se-pre-con"></div>
<!-- Preloader Ends -->