<?php
$current_page_name = 'contact';
include '../inc/header.php';
?>

    <!-- contact page starts here -->
    <div id="homeHeader parallax-window">
        <div id="innerHomeBranding">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text">
                            <h1 class="">
                                Contact Us
                            </h1>
                            <p>
                              Get in touch with us
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contactPage">
        <div class="container mt-5">
            <div class="row">

                <div class="col-12 col-md-4 contactText">
                    <h3 class="mb-4">You're always welcome!</h3>
                    <p class="text-justify find">
                        Contact us for any kind or query, proposal or agreements. We really look forward to listen from you & as we say, you are always welcome!
                    </p>
                    <h3 class="mt-4 mb-3">Contact info</h3>
                    <p class="location">
                    RUET, Rajshahi - Dhaka Highway<br> Mobile: +880 1721538616<br> E-mail: ruetcf.official@gmail.com
                    <br> <br>

                </p>
                </div>
                <div class="d-none d-md-block col-md-1"></div>
                <div class="col-12 col-md-6 mt-4 mt-md-0">
                    <h3 class="mb-4">Get in Touch</h3>
                    <div class="contact-form">
                        <form id="contactForm" name="contactForm" onsubmit="return false" novalidate>
                            <div class="form-group">
                                <input class="form-control" type="text" name="Name" id="Name" placeholder="Full Name *" required>
                                <div class="invalid-feedback" id="nameInvalidText"></div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="Email" id="Email" placeholder="Email Address *">
                                <div class="invalid-feedback" id="emailInvalidText"></div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="Subject" id="Subject" placeholder="Message Subject *">
                                <div class="invalid-feedback" id="subjectInvalidText"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="Message" id="Message" rows="5" placeholder="Write your messages here *"></textarea>
                                <div class="invalid-feedback" id="messageInvalidText"></div>
                            </div>
                            <button onclick="submitForm()" class="btn btn-primary">
                                <i class="fa fa-paper-plane pr-1"></i>Send
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row second-row">
                        <div class="col-12 col-lg-4 fb-page">
                            <!-- <h3 class="mb-4">Our Facebook Page</h3> -->
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FRUET.Career.Forum&tabs=timeline&width=320&height=450&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="450"
                                style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                        </div>
                        <div class="col-12 col-lg-8 g-map">
                            <!-- <h3 class="mb-4 mt-4 mt-lg-0">Our Location</h3> -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7268.92957903422!2d88.62832120370484!3d24.3651295459596!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbefd0a55ea957%3A0x2f9cac3357d62617!2sRajshahi%20University%20of%20Engineering%20and%20Technology!5e0!3m2!1sen!2sbd!4v1599317553078!5m2!1sen!2sbd"
                                width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="false" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- contact page ends here -->

    <?php
include '../inc/footer.php';
?>
