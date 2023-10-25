<?php
$current_page_name = 'home';
include 'inc/header.php';

$_SESSION['hasErr'] = 'null';
$_SESSION['isLoading'] = false;
?>

    <!-- home page starts here -->

    <!-- home branding section starts -->
    <div class="" id="homeBranding">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-12">
            <h6> A career oriented & student-industry connecting organization is </h6>
            <h1>RUET Career Forum</h1>
            <h4>Excellence is our obligation</h4>
            <br>
            <h6 class="title_text">
              We aim to skill up students, connect industry-student collaboration to make a pathway to achieve a good starting for the job life from the very beginning from & just after the campus life.
            </h6>
            <br>
            <!--<a href="<?php echo BASE_URL; ?>/careerfair" class="btn btn-primary">RCF Career Fair</a>-->
            <a href="<?php echo BASE_URL; ?>/8th_RCF_CareerFair" class="btn btn-primary">8th RCF Career Fair</a>
            <a href="https://ruetcareerforum.org/8th_RCF_CareerFair/cv_drop/" id="cv_drop_submit"class="btn btn-primary">
                        <i class="fa fa-paper-plane pr-1"></i><span id="submit_text">CV Submission</span>
                    </a>
            <!-- <a href="<?php echo BASE_URL; ?>/about" class="btn btn-outline-primary mr-2">About us</a> -->
          </div>
          <div class="col-md-4 col-12 d-none d-lg-block">
            <div class="brandingLogo">
              <img src="<?php echo BASE_URL; ?>/assets/img/logo/rcf_logo.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- home branding section ends -->

    <h1 class="font-weight-lighter text-center pt-5">
        What we do
    </h1>
    <div class="RCF-border-bottom"></div>

    <!-- about card starts here -->
    <div class="" id="aboutCard">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-12">
                    <i class="fa fa-briefcase fa-2x" aria-hidden="true"></i>
                    <span> Career development </span>
                    <p>
                        RUET Career Forum (RCF), a non-profit student organization works for the overall career development & corporate grooming through many career-oriented seminars, webinars, workshops, competitions.
                    </p>
                </div>

                <div class="col-md-4 col-12">
                    <i class="fa fa-snowflake-o fa-2x" aria-hidden="true"></i>
                    <span> Skill development </span>
                    <p>
                        RUET Career Forum is a blessing for personal and professional skill development and knowledge sharing for RUET students.
                    </p>
                </div>

                <div class="col-md-4 col-12">
                    <i class="fa fa-graduation-cap fa-2x" aria-hidden="true"></i>
                    <span> Higher study </span>
                    <p>
                        RCF arranges various events and inviting some previous applicants or higher scholarship graduates for their suggestions and guidelines.
                    </p>
                </div>

                <div class="col-md-4 col-12">
                    <i class="fa fa-briefcase fa-2x" aria-hidden="true"></i>
                    <span> Corporate jobs </span>
                    <p>
                        RUET Career Forum tries its best to build up its every member to an enthusiastic, versatile & substantial person who can easily fight the battle of the corporate world.
                    </p>
                </div>

                <div class="col-md-4 col-12">
                    <i class="fa fa-address-card fa-2x" aria-hidden="true"></i>
                    <span> Bank/ BCS jobs </span>
                    <p>
                        We consult about the career path and the ways to conquer them. We arrange webinars, seminars on Bank jobs & BCS.
                    </p>
                </div>

                <div class="col-md-4 col-12">
                    <i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i>
                    <span> Research paper </span>
                    <p>
                        We create a connection between the seeker & the master though different occasions so that they get a thorough idea and reference from the experienced researchers.
                    </p>
                </div>

            </div>
        </div>
    </div>
    <!-- about card ends here -->

    <!-- flagship starts here -->
    <div class="dark-bg" id="flagship">
        <div class="">
            <div class="row" style="padding: 0px; margin: 0px; width: 100%">
                <div class="col-md-7 col-12" style="padding: 0px; margin: 0px; width: 100%">
                    <div class="text" style="margin-top: -40px">
                        <h3>
                            Our flagship event
                        </h3>
                        <p>
                            RCF Career Fair is the signature event of the RUET Career Forum. RUET Career Forum is arranging career fairs since 2016. Our aim behind the Career fair is to
                            <b>Meet with HR, Face the Corporates, Create more flexible job options</b>. Companies participating in the Career Fair inspires fresh graduates & undergraduates to face the real corporate environment. HR summit, Seminars, workshops,
                            campus recruitment inaugurates a student with a wholesome corporate habitat.

                        </p>
                        <a href="<?php echo BASE_URL; ?>/careerfair" class="btn btn-primary">RCF Career Fair</a>
                    </div>
                </div>
                <div class="col-md-5 col-12 clipPath" style="padding: 0px; margin: 0px; width: 100%">
                    <img src="<?php echo BASE_URL; ?>/assets/img/theme1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- flagship ends here -->

    <!-- agenda section start -->
    <h1 class="font-weight-lighter text-center">
        Our agenda
    </h1>
    <div class="RCF-border-bottom"></div>

    <div class="" id="agendaSection">
      <div class="container">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="icon">
                <i class="fa fa-address-card fa-2x" aria-hidden="true"></i>
              </div>
              <div class="text">
                <p class="title">Career development</p>
                <p>
                  We arrange career oriented sessions & annual career fair for students career development
                </p>
              </div>
            </div>

            <div class="card">
              <div class="icon">
                <i class="fa fa-address-card fa-2x" aria-hidden="true"></i>
              </div>
              <div class="text">
                <p class="title">Skill development</p>
                <p>
                  Our members enhance their skills in communication, designing, web development with our specialized teams & much more
                </p>
              </div>
            </div>

            <div class="card">
              <div class="icon">
                <i class="fa fa-address-card fa-2x" aria-hidden="true"></i>
              </div>
              <div class="text">
                <p class="title">Industry-student connection</p>
                <p>
                  We try to connect students with industry arraning session/ visit in industry, arranging career fair & sharing career opportunities
                </p>
              </div>
            </div>

          </div>
          <!-- <div class="col-md-6 col-12">
            <p>
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/Ygn2cJzmIxI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/jxUhUuijbko" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </p>
          </div> -->
        </div>
      </div>
    </div>
    <!-- agenda section end -->

    <!-- thought section start -->
    <!-- <h1 class="font-weight-lighter text-center">
        What we say
    </h1>
    <div class="RCF-border-bottom"></div>

    <div class="bg-RCF-primary" id="thought">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-12 col-lg-6 thoughtCard">
                    <div class="imgBx">
                        <img src="<?php echo BASE_URL; ?>/assets/img/avatar.jpg" alt="">
                    </div>

                    <div class="textBx">
                        <h3> Tazbinur Rahaman </h3>
                        <h5>Project director, RCF devTeam</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-6 thoughtCard">
                    <div class="imgBx">
                        <img src="<?php echo BASE_URL; ?>/assets/img/test5.jpg" alt="">
                    </div>

                    <div class="textBx">
                        <h3> Tazbinur Rahaman </h3>
                        <h5>Project director, RCF devTeam</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div> -->
    <!-- thought section end -->

    <!-- counter starts here -->
    <!-- <div id="counter" class="dark-bg">
        <div class="container">
            <div class="row">

                <div class="col-6 col-md-3">
                    <h2> 34+ </h2>
                    <span>Events</span>
                </div>

                <div class="col-6 col-md-3">
                    <h2> 100+ </h2>
                    <span>Volunteers</span>
                </div>

                <div class="col-6 col-md-3">
                    <h2> 5 </h2>
                    <span>Career Fairs</span>
                </div>

                <div class="col-6 col-md-3">
                    <h2> 1000+ </h2>
                    <span>Members</span>
                </div>

            </div>
        </div>
    </div> -->
    <!-- counter ends here -->


    <!-- home page ends here -->

    <?php
include 'inc/footer.php';
?>
