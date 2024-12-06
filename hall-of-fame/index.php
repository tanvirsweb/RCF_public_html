<?php
$current_page_name = 'committee';
include '../inc/header.php';
?>

<!-- about page starts here -->
<div id="homeHeader parallax-window" data-parallax="scroll" data-speed=".5" data-image-src="<?php echo BASE_URL; ?>/assets/img/test1.jpg">
    <div id="innerHomeBranding">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 text">
                        <h1 class="">
                            Hall of fame
                        </h1>
                        <p>
                            The previous committee members who worked hard to reach this organization to this place
                            today
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about page ends here -->

<h1 class="font-weight-lighter text-center pt-5">
    Session Based ExCom
</h1>
<div class="RCF-border-bottom"></div>

<!-- Hall of fame starts here -->
<div class="" id="hallOfFame">
    <div class="container">
        <!-- Nav tabs buttuons starts here -->
        <ul class="nav nav-tabs-gallary justify-content-center" role="tablist">
            <li class="nav-item">
                <a class="nav-link mr-2 active" data-toggle="tab" href="#e-2022-23" role="tab" aria-controls="e-2022-23" aria-selected="true">2022-23</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-2" data-toggle="tab" href="#e-2021-22" role="tab" aria-controls="e-2021-22" aria-selected="false">2021-22</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-2" data-toggle="tab" href="#e-2020-21" role="tab" aria-controls="e-2020-21" aria-selected="false">2020-21</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-2" data-toggle="tab" href="#e-2019-20" role="tab" aria-controls="e-2019-20" aria-selected="false">2019-20</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-2" data-toggle="tab" href="#e-2018-19" role="tab" aria-controls="e-2018-19" aria-selected="false">2018-19</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-2" data-toggle="tab" href="#e-2017-18" role="tab" aria-controls="e-2017-18" aria-selected="false">2017-18</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-2" data-toggle="tab" href="#e-2016-17" role="tab" aria-controls="e-2016-2017" aria-selected="false">2016-17</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-2" data-toggle="tab" href="#e-2015-16" role="tab" aria-controls="e-2015-2016" aria-selected="false">2015-16</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-2" data-toggle="tab" href="#e-2014-15" role="tab" aria-controls="e-2014-2015" aria-selected="false">2014-15</a>
            </li>
        </ul>
        <!-- nav tabs buttons ends here -->
        <hr>

        <!-- Tab content panes starts here -->
        <div class="tab-content row justify-content-center">

            <div class="col-lg-12 text-center tab-pane active" id="e-2022-23" role="tabpanel">
                <?php include 'hall-of-fame-2022-23.php'; ?>
            </div>
            <div class="col-lg-12 text-center tab-pane active" id="e-2021-22" role="tabpanel">
                <?php include 'hall-of-fame-2021-22.php'; ?>
            </div>
            <div class="col-lg-12 text-center tab-pane" id="e-2020-21" role="tabpanel">
                <?php include 'hall-of-fame-2020-21.php'; ?>
            </div>
            <div class="col-lg-12 text-center tab-pane" id="e-2019-20" role="tabpanel">
                <?php include 'hall-of-fame-2019-20.php'; ?>
            </div>

            <div class="col-lg-12 text-center tab-pane" id="e-2018-19" role="tabpanel">
                <?php include 'hall-of-fame-2018-19.php'; ?>
            </div>

            <div class="col-lg-12 text-center tab-pane" id="e-2017-18" role="tabpanel">
                <?php include 'hall-of-fame-2017-18.php'; ?>
            </div>

            <div class="col-lg-12 text-center tab-pane" id="e-2016-17" role="tabpanel">
                <?php include 'hall-of-fame-2016-17.php'; ?>
            </div>

            <div class="col-lg-12 text-center tab-pane" id="e-2015-16" role="tabpanel">
                <?php include 'hall-of-fame-2015-16.php'; ?>
            </div>

            <div class="col-lg-12 text-center tab-pane" id="e-2014-15" role="tabpanel">
                <?php include 'hall-of-fame-2014-15.php'; ?>
            </div>

        </div>
        <!-- Tab content panes ends here -->
    </div>
</div>

<!-- Hall of fame ends here -->

<?php
include '../inc/footer.php';
?>