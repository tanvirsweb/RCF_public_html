<?php
$current_page_name = 'career_fair_6th';
include '../../inc/header.php';
?>

<!-- CV Assessment page starts here -->
<div id="innerHomeBranding">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-12 text">
                    <h1 class="">
                        CV Assessment 
                    </h1>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container pb-5" id="cv_assessment">
    <div class="row">
        <div class="col-12 col-md-6 mt-4 mt-md-0">
            <h3 class="mb-4">Fill out the form</h3>
            <div class="contact-form" id="contactForm" >
                <form id="cv_assessment_form" name="contactForm" onsubmit="return false" novalidate method="post" enctype="multipart/form-data" action="./cv_assessment_submit.php">
                    <div class="form-group">
                        <input class="form-control" type="text" name="Name" id="Name" placeholder="Full Name *" required>
                        <div class="invalid-feedback" id="nameInvalidText"></div>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="department" id="department" placeholder="Department*" required>
                        <div class="invalid-feedback" id="deptInvalidText"></div>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="university" id="university" placeholder="University*" required>
                        <div class="invalid-feedback" id="universityInvalidText"></div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="exp_year_grad" class="col-md-4 col-6 pl-4 pt-2">Phone Number:</label>
                        <div class="input-group mb-2 col-md-8 col-6">
                            <div class="input-group-prepend">
                                <div class="input-group-text">+880</div>
                            </div>
                            <input class="form-control" type="text" name="phone" id="phone">    
                            <div class="invalid-feedback col-12 pl-4" id="phoneInvalidText">
                            </div>
                        
                        </div>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="Email" id="Email" placeholder="Email Address *">
                        <div class="invalid-feedback" id="emailInvalidText"></div>
                    </div>
                    
                    <div class="custom-file d-block">
                        <input type="file" class="custom-file-input" name="cv_assessment_file" id="cv_assessment_file">
                        <label class="custom-file-label" for="cv_assessment_file">Upload CV</label>
                    </div>
                    <div class="pb-4 pl-1">
                        <span class="invalid-feedback d-block text-dark" id="cv_drop_invalid_text"> Only PDF are allowed</span>
                    </div>
                    <input type="hidden" name="cv_assessment_hidden" value="rcf">
                    <button id="cv_drop_submit" onclick="submitCvAssessment()" name="cv_assessment_submit" type="submit" class="btn btn-primary">
                        <i class="fa fa-paper-plane pr-1"></i>Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- CV Assessment page ends here -->

<?php
include '../../inc/footer.php';
?>
