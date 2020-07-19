<!-- Start Banner
  ============================================= -->
<div class="banner-area">
    <div id="bootcarousel" class="carousel slide animate_text" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner heading-uppercase text-dark">
            <?php foreach ($slides as $slide) { ?>
            <div class="item <?php echo $slide->rank == '0' ? 'active' : '';?> bg-fixed" style="background-image: url(<?php echo get_picture("slides_v",$slide->img_url,"1920x650"); ?>);">
                <div class="box-table">
                    <div class="box-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="content">
                                        <h1 data-animation="animated slideInLeft"><?php echo $slide->title; ?></h1>
                                        <p data-animation="animated slideInUp">
                                            <?php echo strip_tags($slide->description); ?>
                                        </p>
                                        <?php if($slide->allowButton) { ?>
                                        <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="<?php echo $slide->button_url; ?>"><?php echo $slide->button_caption; ?></a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!-- End Wrapper for slides -->

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#bootcarousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- End Banner -->