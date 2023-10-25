<?php
$current_page_name = 'gallery';
include '../inc/header.php';
?>

    <!-- gallery page starts here -->
    <div id="homeHeader parallax-window" data-parallax="scroll" data-speed=".5" data-image-src="<?php echo BASE_URL; ?>/assets/img/test1.jpg">
        <div id="innerHomeBranding">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text">
                            <h1 class="">
                                Gallery
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- title & buttons -->
    <h1 class="font-weight-lighter text-center pt-5">
        Some of Our Moments
    </h1>
    <div class="RCF-border-bottom"></div>

    <div class="" id="gallery">
        <div class="container">
            <!-- Nav tabs buttuons starts here -->
            <ul class="nav nav-tabs-gallary justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link mr-2 active" data-toggle="tab" href="#e-2019-20" role="tab" aria-controls="e-2019-20" aria-selected="false">Year 2020</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-2" data-toggle="tab" href="#e-2018-19" role="tab" aria-controls="e-2018-19" aria-selected="false">Year 2019</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-2" data-toggle="tab" href="#e-2017-18" role="tab" aria-controls="e-2017-18" aria-selected="false">Year 2018</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-2" data-toggle="tab" href="#e-2016-17" role="tab" aria-controls="e-2016-2017" aria-selected="false">Year 2017</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-2" data-toggle="tab" href="#e-2015-16" role="tab" aria-controls="e-2015-2016" aria-selected="false">Year 2016</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-2" data-toggle="tab" href="#e-2014-15" role="tab" aria-controls="e-2014-2015" aria-selected="false">Year 2015</a>
                </li>
            </ul>
            <!-- nav tabs buttons ends here -->
            <hr>

            <!-- Tab content panes starts here -->
            <div class="tab-content row justify-content-center">

                <div class="col-lg-12 text-center tab-pane active" id="e-2019-20" role="tabpanel">
                    <?php include 'g-2019-20.php'; ?>
                </div>

                <div class="col-lg-12 text-center tab-pane" id="e-2018-19" role="tabpanel">
                    <?php include 'g-2018-19.php'; ?>
                </div>

                <div class="col-lg-12 text-center tab-pane" id="e-2017-18" role="tabpanel">
                    <?php include 'g-2017-18.php'; ?>
                </div>

                <div class="col-lg-12 text-center tab-pane" id="e-2016-17" role="tabpanel">
                    <?php include 'g-2016-17.php'; ?>
                </div>

                <div class="col-lg-12 text-center tab-pane" id="e-2015-16" role="tabpanel">
                    <?php include 'g-2015-16.php'; ?>
                </div>

                <div class="col-lg-12 text-center tab-pane" id="e-2014-15" role="tabpanel">
                    <?php include 'g-2014-15.php'; ?>
                </div>

            </div>
            <!-- Tab content panes ends here -->
        </div>
    </div>

    <!-- gallery page ends here -->

    <?php
include '../inc/footer.php';
?>
