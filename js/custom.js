$(document).ready(function () {
  // owl-carousel
  $(".owl-carousel").owlCarousel({
    loop: true,
    // margin: 10,
    dots: true,
    autoplay: true,
    autoplayTimeout: 1500,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      },
      500: {
        items: 3,
      },
      1000: {
        items: 5,
      },
    },
  });
  // owl-carousel

  // Gallery lazyload
  var lazyLoadableImages;

  if ("IntersectionObserver" in window) {
    lazyLoadableImages = document.querySelectorAll(".lazy");
    var imageObserver = new IntersectionObserver(function (entries, observer) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          var image = entry.target;
          image.src = image.dataset.src;
          image.classList.remove("lazy");
          imageObserver.unobserve(image);
        }
      });
    });

    lazyLoadableImages.forEach(function (image) {
      imageObserver.observe(image);
    });
  } else {
    var lazyloadThrottleTimeout;
    lazyLoadableImages = document.querySelectorAll(".lazy");
    var loadedImages = 0;

    function lazyload() {
      if (lazyloadThrottleTimeout) {
        clearTimeout(lazyloadThrottleTimeout);
      }

      lazyloadThrottleTimeout = setTimeout(function () {
        lazyLoadableImages.forEach(function (img) {
          if (img.classList.contains("lazy") && isElementInViewport(img)) {
            img.src = img.dataset.src;
            img.classList.remove("lazy");
            loadedImages += 1;
          }
        });

        if (lazyLoadableImages.length === loadedImages) {
          // All images loaded.
          document.removeEventListener("scroll", lazyload);
          window.removeEventListener("resize", lazyload);
          window.removeEventListener("orientationChange", lazyload);
        }
      }, 20);
    }

    if (lazyLoadableImages.length > 0) {
      // First time image loading.
      lazyload();
      document.addEventListener("scroll", lazyload);
      window.addEventListener("resize", lazyload);
      window.addEventListener("orientationChange", lazyload);
    }
  }

  function isElementInViewport(el) {
    // Checks if Element is visible in current viewport
    var top =
      el.getBoundingClientRect().top + el.ownerDocument.defaultView.pageYOffset;

    return top < window.pageYOffset + window.innerHeight;
  }
  // Gallery lazyload

  // Magnific Popup
  $(".gallery-image").magnificPopup({
    type: "image",
    closeOnContentClick: false,
    closeBtnInside: false,
    mainClass: "mfp-with-zoom mfp-img-mobile",
    image: {
      verticalFit: true,
    },
    gallery: {
      enabled: true,
    },
    preload: [0, 1],

    zoom: {
      enabled: true,
      duration: 300, // Duration must be same as css
      opener: function (element) {
        return element.find("img");
      },
    },
  });
  // Magnific Popup

  // Contact Form Live Validation

  $("#Name").on("input", validateName);
  $("#Email").on("input", validateEmail);
  $("#Subject").on("input", validateSubject);
  $("#Message").on("input", validateMessage);

  // Contact Form Live Validation

  //CV Drop validation invoke
  $("#cv_drop #Name").on("input", validateName);
  $("#cv_drop #department").on("input", validateDept);
  $("#cv_drop #university").on("input", validateUniversity);
  $("#cv_drop #company").on("input", validateCompany);
  $("#cv_drop #exp_year_grad").on("input", validateGradYear);
  $("#cv_drop #Email").on("input", validateEmail);
  $("#cv_drop #phone").on("input", validatePhone);
  $("#cv_drop #cv_drop_file").on("input", validateCvDropFile);

  //CV Assessment validation invoke
  $("#cv_assessment #Name").on("input", validateName);
  $("#cv_assessment #department").on("input", validateDept);
  $("#cv_assessment #university").on("input", validateUniversity);
  $("#cv_assessment #phone").on("input", validatePhone);
  $("#cv_assessment #Email").on("input", validateEmail);
  $("#cv_assessment #cv_drop_file").on("input", validateCvDropFile);
});

// Contact Form Live Validation Functions
function validateName() {
  if (this.value == "") {
    this.classList.remove("is-valid");
    this.classList.add("is-invalid");
    document.getElementById("nameInvalidText").innerHTML =
      "Name should not be empty.";
  } else {
    var name = this.value;
    var charMatch = name.match(/[a-z]/gi);
    var spaceMatch = name.match(/[ ]/g);
    var chars = charMatch ? charMatch.length : 0;
    var spaces = spaceMatch ? spaceMatch.length : 0;
    if (chars + spaces < name.length) {
      this.classList.remove("is-valid");
      this.classList.add("is-invalid");
      document.getElementById("nameInvalidText").innerHTML =
        "Name can only contain characters and spaces.";
    } else if (chars + spaces == name.length) {
      this.classList.remove("is-invalid");
      this.classList.add("is-valid");
    }
  }
}

function validateEmail() {
  if (this.value == "") {
    this.classList.remove("is-valid");
    this.classList.add("is-invalid");
    document.getElementById("emailInvalidText").innerHTML =
      "Email should not be empty.";
  } else {
    var email = this.value;
    var separator = email.match(/[@]/g);
    if (!separator || (separator && separator.length != 1)) {
      this.classList.remove("is-valid");
      this.classList.add("is-invalid");
      document.getElementById("emailInvalidText").innerHTML =
        "Invalid Email Format.";
    } else if (separator && separator.length == 1) {
      var sepIdx = email.indexOf("@");
      var fullstopIdx = email.lastIndexOf(".");
      if (
        sepIdx == 0 ||
        sepIdx > fullstopIdx ||
        fullstopIdx == email.length - 1
      ) {
        this.classList.remove("is-valid");
        this.classList.add("is-invalid");
        document.getElementById("emailInvalidText").innerHTML =
          "Invalid Email Format.";
      } else {
        this.classList.remove("is-invalid");
        this.classList.add("is-valid");
      }
    }
  }
}

function validateSubject() {
  if (this.value == "") {
    this.classList.remove("is-valid");
    this.classList.add("is-invalid");
    document.getElementById("subjectInvalidText").innerHTML =
      "Subject should not be empty.";
  } else {
    this.classList.remove("is-invalid");
    this.classList.add("is-valid");
  }
}

function validateMessage() {
  if (this.value == "") {
    this.classList.remove("is-valid");
    this.classList.add("is-invalid");
    document.getElementById("messageInvalidText").innerHTML =
      "Message should not be empty.";
  } else {
    this.classList.remove("is-invalid");
    this.classList.add("is-valid");
  }
}
// Contact Form Live Validation Functions

//Validation for CV Drop
function validateDept() {
  if (this.value == "") {
    this.classList.remove("is-valid");
    this.classList.add("is-invalid");
    document.getElementById("deptInvalidText").innerHTML =
      "Department should not be empty.";
  } else {
    var dept = this.value;
    var charMatch = dept.match(/[a-z]/gi);
    var spaceMatch = dept.match(/[ ]/g);
    var chars = charMatch ? charMatch.length : 0;
    var spaces = spaceMatch ? spaceMatch.length : 0;
    if (chars + spaces < dept.length) {
      this.classList.remove("is-valid");
      this.classList.add("is-invalid");
      document.getElementById("deptInvalidText").innerHTML =
        "Department can only contain characters and spaces.";
    } else if (chars + spaces == dept.length) {
      this.classList.remove("is-invalid");
      this.classList.add("is-valid");
    }
  }
}
function validateUniversity() {
  if (this.value == "") {
    this.classList.remove("is-valid");
    this.classList.add("is-invalid");
    document.getElementById("universityInvalidText").innerHTML =
      "University should not be empty.";
  } else {
    var university = this.value;
    var charMatch = university.match(/[a-z]/gi);
    var spaceMatch = university.match(/[ ]/g);
    var chars = charMatch ? charMatch.length : 0;
    var spaces = spaceMatch ? spaceMatch.length : 0;
    if (chars + spaces < university.length) {
      this.classList.remove("is-valid");
      this.classList.add("is-invalid");
      document.getElementById("universityInvalidText").innerHTML =
        "University can only contain characters and spaces.";
    } else if (chars + spaces == university.length) {
      this.classList.remove("is-invalid");
      this.classList.add("is-valid");
    }
  }
}

function validateGradYear() {
  //document.getElementById("msg").innerHTML = `YEAR VALUE = ${this.value}`;
  if (this.value == "") {
    this.classList.remove("is-valid");
    this.classList.add("is-invalid");
    //document.getElementById("grad_invalid_text").innerHTML = "Date should not be empty.";
  } else {
    var name = this.value;
    //console.log(this.value)
    var charMatch = name.match(
      /^((((19|[2-9]\d)\d{2})\-(0[13578]|1[02])\-(0[1-9]|[12]\d|3[01]))|(((19|[2-9]\d)\d{2})\-(0[13456789]|1[012])\-(0[1-9]|[12]\d|30))|(((19|[2-9]\d)\d{2})\-02\-(0[1-9]|1\d|2[0-8]))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))\-02\-29))$/g
    );
    var chars = charMatch ? true : false;
    if (chars === false) {
      this.classList.remove("is-valid");
      this.classList.add("is-invalid");
      //document.getElementById("grad_invalid_text").innerHTML = "Please select a valid date";
    } else {
      this.classList.remove("is-invalid");
      this.classList.add("is-valid");
    }
  }
}

function validatePhone() {
  if (this.value == "+880") {
    this.classList.remove("is-valid");
    this.classList.add("is-invalid");
    document.getElementById("phoneInvalidText").innerHTML =
      "Phone Number should not be empty.";
  } else {
    var phone = this.value;
    var charMatch = phone.match(/^\d{10}$/);
    var chars = charMatch ? true : false;
    if (chars === false) {
      this.classList.remove("is-valid");
      this.classList.add("is-invalid");
      document.getElementById("phoneInvalidText").innerHTML =
        "Please type a valid phone ";
    } else {
      this.classList.remove("is-invalid");
      this.classList.add("is-valid");
    }
  }
}

function validateCompany() {
  if (this.value == "") {
    this.classList.remove("is-valid");
    this.classList.add("is-invalid");
    document.getElementById("companyInvalidText").innerHTML =
      "You must select a company.";
  } else {
    var name = this.value;
    var charMatch = name.match(/[a-z]/gi);
    var spaceMatch = name.match(/[ ]/g);
    var chars = charMatch ? charMatch.length : 0;
    var spaces = spaceMatch ? spaceMatch.length : 0;
    if (chars + spaces < name.length) {
      this.classList.remove("is-valid");
      this.classList.add("is-invalid");
      document.getElementById("companyInvalidText").innerHTML =
        "You must select a company.";
    } else if (chars + spaces == name.length) {
      this.classList.remove("is-invalid");
      this.classList.add("is-valid");
    }
  }
}

function validateCvDropFile() {
  if (this.value == "") {
    this.classList.remove("is-valid");
    this.classList.add("is-invalid");
    document.getElementById("cv_drop_invalid_text").innerHTML =
      "Please Upload a PDF";
  } else {
    var name = this.value;

    if (name.split(".").pop() == "pdf") {
      document.getElementById("cv_drop_invalid_text").innerHTML = "";
      this.classList.remove("is-invalid");
      this.classList.add("is-valid");
    } else {
      document.getElementById("cv_drop_invalid_text").innerHTML =
        "Please Upload a PDF";
      this.classList.remove("is-valid");
      this.classList.remove("text-dark");
      this.classList.add("is-invalid");
    }
  }
}
//CV Drop form submittion
function submitCvDrop() {
  const form = document.forms["cv_drop_form"];
  const name = document.forms["cv_drop_form"]["Name"];
  const email = document.forms["cv_drop_form"]["Email"];
  const department = document.forms["cv_drop_form"]["department"];
  const company = document.forms["cv_drop_form"]["company"];
  const university = document.forms["cv_drop_form"]["university"];
  const grad = document.forms["cv_drop_form"]["exp_year_grad"];
  const phone = document.forms["cv_drop_form"]["phone"];
  const cv = document.forms["cv_drop_form"]["cv_drop_file"];
  const submit = document.getElementById("cv_drop_submit");
  const submitText = document.getElementById("submit_text");

  validateName.call(name);
  validateEmail.call(email);
  validateDept.call(department);
  validateUniversity.call(university);
  validateCompany.call(company);
  validateGradYear.call(grad);
  validatePhone.call(phone);
  validateCvDropFile.call(cv);
  //form.append("cv_drop_file", cv);
  let canSubmit =
    name.classList.contains("is-valid") &&
    email.classList.contains("is-valid") &&
    department.classList.contains("is-valid") &&
    company.classList.contains("is-valid") &&
    university.classList.contains("is-valid") &&
    grad.classList.contains("is-valid") &&
    phone.classList.contains("is-valid") &&
    cv.classList.contains("is-valid");
  if (!canSubmit) {
    Swal.fire({
      title: "Error!",
      text: "Please fill out every field correctly.",
      icon: "error",
    });
  } else {
    //submit.click();
    submit.setAttribute("disabled", "");
    submitText.innerHTML = "Submitting...";
    //console.log(submit);
    form.submit();
  }
}

//CV drop success
const successModal = (success, text) => {
  if (success) {
    Swal.fire({
      title: "Done!",
      text: text,
      icon: "success",
      showConfirmButton: false,
      timer: 3000,
      //onAfterClose: location.reload()
    });
  } else {
    Swal.fire({
      title: "Error!",
      text: text,
      icon: "error",
    });
  }
};

//CV drop MODAL
const queryString = window.location.search;
//console.log(queryString);
let submitSuccess = queryString.includes("cv_drop=success");
let submitFail = queryString.includes("cv_drop=fail");
let extFail = queryString.includes("cv_drop=exterror");
if (submitSuccess) {
  successModal(true, "Your CV Droped");
}
if (submitFail) {
  successModal(false, "Something Went Wrong");
}
if (extFail) {
  successModal(false, "Invalid File Format");
}

//CV assessment modal
let assessmentSubmitSuccess = queryString.includes("cv_assessment=success");
let assessmentSubmitFail = queryString.includes("cv_assessment=fail");
if (assessmentSubmitFail) {
  successModal(false, "Something Went Wrong");
}
if (assessmentSubmitSuccess) {
  successModal(true, "CV submitted for assessment");
}

//CV Assessment Form submission
function submitCvAssessment() {
  const form = document.forms["cv_assessment_form"];
  const name = document.forms["cv_assessment_form"]["Name"];
  const email = document.forms["cv_assessment_form"]["Email"];
  const department = document.forms["cv_assessment_form"]["department"];
  const university = document.forms["cv_assessment_form"]["university"];
  const phone = document.forms["cv_assessment_form"]["phone"];
  const cv = document.forms["cv_assessment_form"]["cv_assessment_file"];

  validateName.call(name);
  validateEmail.call(email);
  validateDept.call(department);
  validateUniversity.call(university);
  validatePhone.call(phone);
  validateCvDropFile.call(cv);
  //form.append("cv_assessment_file", cv);
  let canSubmit =
    name.classList.contains("is-valid") &&
    email.classList.contains("is-valid") &&
    department.classList.contains("is-valid") &&
    university.classList.contains("is-valid") &&
    phone.classList.contains("is-valid") &&
    cv.classList.contains("is-valid");
  if (!canSubmit) {
    Swal.fire({
      title: "Error!",
      text: "Please fill out every field correctly.",
      icon: "error",
    });
  } else {
    //submit.click();
    form.submit();
  }
}

// Contact Form Submission
function submitForm() {
  const form = document.forms["contactForm"];
  const name = document.forms["contactForm"]["Name"];
  const email = document.forms["contactForm"]["Email"];
  const subject = document.forms["contactForm"]["Subject"];
  const message = document.forms["contactForm"]["Message"];
  validateName.call(name);
  validateEmail.call(email);
  validateSubject.call(subject);
  validateMessage.call(message);
  const canSubmit =
    name.classList.contains("is-valid") &&
    email.classList.contains("is-valid") &&
    subject.classList.contains("is-valid") &&
    message.classList.contains("is-valid");
  if (!canSubmit) {
    Swal.fire({
      title: "Error!",
      text: "Please fill out every field correctly.",
      icon: "error",
    });
  } else {
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        const respText = this.responseText.toString();
        const resp = JSON.parse(respText);

        if (resp.status == 1) {
          Swal.fire({
            title: "Done!",
            text: resp.reply,
            icon: "success",
            showConfirmButton: false,
            timer: 3000,
            onAfterClose: location.reload(),
          });
        } else if (resp.status == 0) {
          Swal.fire({
            title: "Error!",
            text: resp.reply,
            icon: "error",
          });
        }
      }
    };
    xhttp.open("POST", "../contact/form_submitted.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(
      "submitted=true&name=" +
        name.value +
        "&email=" +
        email.value +
        "&subject=" +
        subject.value +
        "&message=" +
        message.value
    );
  }
}

// Contact Form Submission

//Navbar hover dropdown start here
const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function () {
  if (this.matchMedia("(min-width: 768px)").matches) {
    $dropdown.hover(
      function () {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
        $this.find($dropdownMenu).addClass(showClass);
      },
      function () {
        const $this = $(this);
        $this.removeClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "false");
        $this.find($dropdownMenu).removeClass(showClass);
      }
    );
  } else {
    $dropdown.off("mouseenter mouseleave");
  }
});
//Navbar hover dropdown ends here

//Upload CV file name show
$("#cv_drop_file").on("change", function () {
  //get the file name
  var fileName = $(this).val();
  //replace the "Choose a file" label
  $(this)
    .next(".custom-file-label")
    .html(fileName.split("/").pop().split("\\").pop());
});

$("#cv_assessment_file").on("change", function () {
  //get the file name
  var fileName = $(this).val();
  //replace the "Choose a file" label
  $(this)
    .next(".custom-file-label")
    .html(fileName.split("/").pop().split("\\").pop());
});
