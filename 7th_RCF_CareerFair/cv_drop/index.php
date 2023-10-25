<?php
$current_page_name = 'career_fair_6th';
include '../../inc/header.php';
//echo $_SESSION['hasErr'];
?>

<!-- CV DROP page starts here -->
<div id="innerHomeBranding">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-12 text">
                    <h1 class="">
                        CV DROP
                    </h1>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container pb-5" id="cv_drop">
    <div class="row">
        <div id="cv_drop" class="col-12 col-md-6 mt-4 mt-md-0">
            <h3 class="mb-4">Fill out the form</h3>
            <div class="contact-form" id="contactForm" >
                <form id="cv_drop_form" name="contactForm" onsubmit="return false" novalidate method="post" enctype="multipart/form-data" action="./cv_drop_submit.php">
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
                        <div class="col-6 pl-4 pt-2">
                        <label for="exp_year_grad">Expected Year of Graduation:</label>
                        </div>
                        <div class="col-6">
                        <input class="form-control" type="date" name="exp_year_grad" id="exp_year_grad" required>
                        </div>
                        <div class="col-12">
                            <div class="invalid-feedback" id="grad_invalid_text"></div>
                        </div>
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
                    <div class="form-group">
                        <!-- <input class="form-control" type="text" name="company" id="company" placeholder="Company*"> -->

                        <label for="company" class="">Select a Company</label>
                        <select class="form-control border px-2" id="company"  name="company">
                            <option disabled selected value="">No Company selected...</option>
                            <option value="walton">Walton</option>
                            <option value="rfl">RFL</option>
                            <option value="datasoft">DataSoft</option>
                            <option value="staffasia">Staff Asia</option>
                            <option value="banglalink">Banglalink</option>
                            <option value="bat">BAT</option>
                        </select>
                        <div class="invalid-feedback" id="companyInvalidText"></div>
                    </div>
                    <div class="custom-file" id="cv_drop">
                        <input type="file" class="custom-file-input" name="cv_drop_file" id="cv_drop_file">
                        <label class="custom-file-label" for="cv_drop_file">Upload CV</label>
                    </div>
                    <div class="pb-4 pl-1">
                        <span class="invalid-feedback d-block" id="cv_drop_invalid_text"> <span class="text-dark">Only PDF are allowed</span></span>
                    </div>
                    <input type="hidden" name="cv_drop_hidden" value="rcf">
                    <button id="cv_drop_submit" onclick="submitCvDrop()" name="cv_drop_submit" type="submit" class="btn btn-primary">
                        <i class="fa fa-paper-plane pr-1"></i><span id="submit_text">Submit</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- CV DROP page ends here -->

<?php
include '../../inc/footer.php';

if( $_SESSION['hasErr'] == 'fail' ) {

  ?>
  <script type="text/javascript">
  Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Something went wrong! Pleas try again...',
  footer: 'Getting this error for a while? Contact 01728091199'
});
  </script>
  <?php

  $_SESSION['hasErr'] = 'null';

} elseif( $_SESSION['hasErr'] == 'success' ) {

  ?>
  <script type="text/javascript">
    successModal(true, "Your CV Droped");
  </script>
  <?php

  $_SESSION['hasErr'] = 'null';

}

//echo $_SESSION['hasErr'];

?>
