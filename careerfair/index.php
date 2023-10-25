<?php
$current_page_name = 'career fair';
include '../inc/header.php';
?>

<!-- fair page started -->
<div id="homeHeader parallax-window" data-parallax="scroll" data-speed=".5"
    data-image-src="<?php echo BASE_URL; ?>/assets/img/test1.jpg">
    <!-- <div id="homeBranding" class="innerfairBrands"> -->
    <div id="innerHomeBranding">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 text">
                        <h1 class="fairTittle">
                            RCF Career Fair
                        </h1>
                        <p>
                            The annual iconic event of RCF where fresh graduates meet the industry
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" id="innerAllFairs">
    <div class="row">
        <div class="col-lg-3 d-lg-block d-none topSideNav">
            <div class="nav flex-column nav-pills mb-5" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="nav-link active" style="flex: 1"
                    id="v-pills-home-tab" data-toggle="pill" href="#v-pills-8" role="tab" aria-controls="v-pills-home"
                    aria-selected="true"> 8 <sup>th</sup> Career Fair </a>                
                <a onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="nav-link" style="flex: 1"
                    id="v-pills-home-tab" data-toggle="pill" href="#v-pills-7" role="tab" aria-controls="v-pills-home">
                    7 <sup>th</sup> Career Fair </a>
                <a onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="nav-link" style="flex: 1"
                    id="v-pills-home-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-home">
                    6 <sup>th</sup> Career Fair </a>
                <a onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="nav-link" id="v-pills-home-tab"
                    data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-home" aria-selected="false">
                    5 <sup>th</sup> Career Fair </a>
                <a onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="nav-link" id="v-pills-profile-tab"
                    data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-profile"
                    aria-selected="false"> 4 <sup>th</sup> Career Fair </a>
                <a onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="nav-link" id="v-pills-messages-tab"
                    data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-messages"
                    aria-selected="false"> 3 <sup>rd</sup> Career Fair </a>
                <a onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="nav-link" id="v-pills-settings-tab"
                    data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-settings"
                    aria-selected="false"> 2 <sup>nd</sup> Career Fair </a>
                <a onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="nav-link" id="v-pills-settings-tab"
                    data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-settings"
                    aria-selected="false"> 1 <sup>st</sup> Career Fair </a>
            </div>
        </div>
        <div class="col-lg-9 col-12">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-8" role="tabpanel"
                    aria-labelledby="v-pills-home-tab">
                    <?php include 'eighth/index.php'; ?>
                </div>
                <div class="tab-pane fade" id="v-pills-7" role="tabpanel"
                    aria-labelledby="v-pills-home-tab">
                    <?php include 'seventh/index.php'; ?>
                </div>
                <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <?php include 'sixth/index.php'; ?>
                </div>
                <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <?php include 'fifth/index.php'; ?>
                </div>
                <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <?php include 'fourth/index.php'; ?>
                </div>
                <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <?php include 'third/index.php'; ?>
                </div>
                <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    <?php include 'second/index.php'; ?>
                </div>
                <div class="tab-pane fade" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    <?php include 'first/index.php'; ?>
                </div>
            </div>

            <!-- tab bottom buttons -->
            <div class="d-block d-lg-none buttonNav" id="innerAllFairs">
                <p> View other career fairs - </p>
                <div class="nav flex-row nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="nav-link active" style="flex: 1"
                        id="v-pills-home-tab" data-toggle="pill" href="#v-pills-8" role="tab" aria-controls="v-pills-home"
                        aria-selected="true"> 8 <sup>th</sup> Career Fair </a>
                    <a onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="nav-link"
                        id="v-pills-home-tab" data-toggle="pill" href="#v-pills-7" role="tab"
                        aria-controls="v-pills-home" aria-selected="false"> 7 <sup>th</sup> Career Fair </a>
                    <a onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="nav-link"
                        id="v-pills-home-tab" data-toggle="pill" href="#v-pills-6" role="tab"
                        aria-controls="v-pills-home" aria-selected="false"> 6 <sup>th</sup> Career Fair </a>
                    <a onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="nav-link" id="v-pills-home-tab"
                        data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-home"
                        aria-selected="false"> 5 <sup>th</sup> Career Fair </a>
                    <a onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="nav-link" id="v-pills-profile-tab"
                        data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-profile"
                        aria-selected="false"> 4 <sup>th</sup> Career Fair </a>
                    <a onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="nav-link"
                        id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-3" role="tab"
                        aria-controls="v-pills-messages" aria-selected="false"> 3 <sup>rd</sup> Career Fair </a>
                    <a onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="nav-link"
                        id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-2" role="tab"
                        aria-controls="v-pills-settings" aria-selected="false"> 2 <sup>nd</sup> Career Fair </a>
                    <a onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="nav-link"
                        id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-1" role="tab"
                        aria-controls="v-pills-settings" aria-selected="false"> 1 <sup>st</sup> Career Fair </a>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- fair page ended -->


<?php
include '../inc/footer.php';
?>