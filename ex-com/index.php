<?php
$current_page_name = 'committee';
include '../inc/header.php';
?>

<!-- about page starts here -->
<div id="homeHeader parallax-window" data-parallax="scroll" data-speed=".5"
    data-image-src="<?php echo BASE_URL; ?>/assets/img/test1.jpg">
    <div id="innerHomeBranding">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 text">
                        <h1 class="">
                            Executive Committee
                        </h1>
                        <p>
                            The team that currently running this organization keeping it active & benifitial for the
                            studnets
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about page ends here -->

<h1 class="font-weight-lighter text-center pt-5">
    Current Executive Committee
</h1>
<div class="RCF-border-bottom"></div>

<!-- COMITTEE CONTENT  NEW-->
<div class="container hallOfFame" id="ex-com">
    <?php include 'ex-com-list.php'; ?>
</div>
<!-- COMITTEE CONTENT NEW END -->


<!-- committee cards starts here -->
<!-- <div id="committeeCards">
        <div class="container">
            <div class="row"> -->

<!-- <div class="col-12 col-md-4 col-lg-3">
            <div class="card">
              <div class="innerCard">
                <img src="<?php echo BASE_URL; ?>/assets/img/ex-com/avatar.jpg" alt="">

                <div class="textBx">
                  <h3> Md. Tazbinur Rahaman </h3>
                  <h5> Project Director, RCF devTeam </h5>
                </div>

                <ul>
                  <li>
                    <a href="#">
                      <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                    <a href="#">
                      <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="#">
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>

              </div>
            </div>
          </div> -->

<!-- <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/01_Advisor.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/02_President.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/03_Vice_President.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/04_Vice_President.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/05_Vice_President.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/06_General Secretary.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/07_Joint Secretary.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/08_Joint Secretary.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/09_Joint_Secretary.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/10_Human_Resource_Secretary.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/11_Office_Secretary.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/12_Treasurer.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/13_Publication_Secretary.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/14_Development_Planning_Secretary.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/15_IT_Secretary.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/16_Organizing_Secretary.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/17_Student_Coordinator.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/18_Asst_HR_Secretary.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/19_Asst_HR_Secretary.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/20_Asst_Office_Secretary.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/21_Asst_Office_Secretary.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/22_Asst_Treasurer.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/23_Asst_Treasurer.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/24_Asst_Publication_Secretary.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/25_Asst_Publication_Secretary.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/26_Asst_Development_Planning_Secretary.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/27_Asst_IT_Secretary.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/28_Event_Management_Secretary.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/29_Event_Management_Secretary.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/30_Event_Management_Secretary.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/31_Corporate_Alliance_Secretary.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/32_Design_Content_Dev_Secretary.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/33_Asst_Development_Planning_Secretary.jpg" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card imgCard">
                        <img class="lazy" src="<?php echo BASE_URL; ?>/assets/img/loading.gif" data-src="<?php echo BASE_URL; ?>/assets/img/ex-com/34_Press_Secretary.jpg" alt="">
                    </div>
                </div> -->
<!-- 
            </div>
        </div>
    </div> -->
<!-- Committee cards ends here -->

<?php
include '../inc/footer.php';
?>