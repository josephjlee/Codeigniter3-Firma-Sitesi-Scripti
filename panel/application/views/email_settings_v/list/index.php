<?php $this->load->view('includes/head.php'); ?>
<body class="app sidebar-mini rtl">
<!-- Navbar-->
<?php $this->load->view('includes/header.php'); ?>
<!-- Sidebar menu-->
<?php $this->load->view('includes/sidebar.php'); ?>
<!-- Content-->
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> E-Posta Ayarları Sayfası</h1>
            <p>E-posta ayarlarınızı gerçekleştirebilirsiniz.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Anasayfa</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body"><?php $this->load->view("{$viewFolder}/{$subViewFolder}/content"); ?></div>
            </div>
        </div>
    </div>
    <!-- APP FOOTER -->
    <?php $this->load->view("includes/footer"); ?>

</body>
</html>