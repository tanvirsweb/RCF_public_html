<?php
$current_page_name = 'teams';
include '../../inc/header.php';
?>
<!-- home branding section starts -->
<div class="creative" id="teamBranding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <h6>Formed Year: 2020 </h6>
                <h1>Creative Design Team</h1>
                <h4>RUET Career Forum</h4>
                <br>
                <h6 class="title_text d-block">
                The Creative Design team of RUET Career Forum (RCF) is an experienced graphic design team with over 4 years. During this time, we have completed over 700+ designs for over 63+ events, all with complete satisfaction of all members of RCF. The multidisciplinary team at RUET Career Forum (RCF) is made up of graphic designers, illustrators, web designers  who can fulfill any of your design needs. From creating logos to stationery, the team is able to provide the visual design work.
                </h6>
                <br>
            </div>
            <div class="col-lg-4 col-12 d-none d-lg-block">
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
<div class="" id="">
    <div class="container">
        <!-- SERVICES SECTION -->
        <div class="section-block-grey" id="services">
            <div class="container">
                <div class="row mt-60 pb-4">
                    <div class="mx-md-auto col-md-8 col-12 mt-3">
                        <div class="serv-section-2">
                            <div class="serv-section-2-icon"><i class="fa fa-briefcase"></i></div>
                            <div class="serv-section-desc">
                                <h4>Design</h4>
                                <h5 class="font-weight-lighter">
                                Design the creative digital and printable promotion materials throughout the whole year.
                                </h5>
                            </div>
                            <div class="section-heading-line-left"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- SERVICES SECTION END -->
    </div>
</div>

<!-- agenda section start -->
<!-- <h1 class="font-weight-lighter text-center pt-5">
    Achievements
</h1>
<div class="RCF-border-bottom"></div>

<div class="" id="agendaSection">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">

                <div class="card">
                    <div class="icon">
                        <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <p class="title">“Presentaction 1.0”</p>
                        <p>
                        The team has written the contents for the Website of RCF with the collaboration with RCF Dev Team. Communication skills, researching skills, team management skills, branding strategy, productivity skills are accomplished here through content writing performances.
                        </p>
                    </div>
                </div>

                <div class="card">
                    <div class="icon">
                        <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <p class="title">“Crackerjack 1.0”</p>
                        <p>
                        One of our noteworthy projects is the yearly magazine. The execution of Yearly magazine & souvenir is undertaken by RCF Content Team.
                        </p>
                    </div>
                </div>

                <div class="card">
                    <div class="icon">
                        <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <p class="title">Business Case Competition By Torun</p>
                        <p>
                        RCF Content Team has established a strong process for our content strategy and created an organized & effective content team of 10 members from 3 content writers. Through the past year, Content Team has successfully organized many sessions and given a promising writing development platform along with an intellectual management framework.
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-12 text-center my-auto">
                <img src="<?php echo BASE_URL; ?>/assets/img/trophy.jpg" class="trophy-img" alt="">
            </div>
        </div>
    </div>
</div> -->
<!-- agenda section end -->

<!-- TEAM MEMBERS SECTION START -->
<div class="container-fluid pb-5" id="team-section">
    <div class="container">
        <h1 class="font-weight-lighter text-center text-black pt-5">
            TEAM MEMBERS
        </h1>
        <div class="RCF-border-bottom"></div>
        
        <?php include './teamMembers.php'; ?>
    </div>
</div>
<!-- TEAM MEMBERS SECTION END -->
<!-- about card ends here -->

<!-- flagship starts here -->
<!-- <div class="dark-bg" id="flagship">
    <div class="">
        <div class="row" style="padding: 0px; margin: 0px; width: 100%">
            <div class="col-md-7 col-12" style="padding: 0px; margin: 0px; width: 100%">
                <div class="text" style="margin-top: -40px">
                    <h3>
                        Our flagship event
                    </h3>
                    <p>
                        RCF Career Fair is the signature event of the RUET Career Forum. RUET Career Forum is arranging
                        career fairs since 2016. Our aim behind the Career fair is to
                        <b>Meet with HR, Face the Corporates, Create more flexible job options</b>. Companies
                        participating in the Career Fair inspires fresh graduates & undergraduates to face the real
                        corporate environment. HR summit, Seminars, workshops,
                        campus recruitment inaugurates a student with a wholesome corporate habitat.

                    </p>
                    <a href="<?php echo BASE_URL; ?>/careerfair/fifth" class="btn btn-primary">RCF Career Fair</a>
                </div>
            </div>
            <div class="col-md-5 col-12 clipPath" style="padding: 0px; margin: 0px; width: 100%">
                <img src="<?php echo BASE_URL; ?>/assets/img/theme.jpg" alt="">
            </div>
        </div>
    </div>
</div> -->
<!-- flagship ends here -->


<?php
include '../../inc/footer.php';
?>