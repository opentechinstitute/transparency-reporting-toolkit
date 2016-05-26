// overlay elements
var submitProcess = [document.getElementsByClassName('overlay-background')[0], document.getElementsByClassName('overlay')[0]];
// submission link
var submitLink = document.getElementById("submit-link");
// check if we're on home page
function isHome() {
  if(document.getElementById('originalCompany')) {
    return true;
  } else {
    return false;
  }
}
// second company name input box
var copyCompany = document.getElementById('copyCompany');
// if home
if (isHome()) {
  // hide second box
  copyCompany.style.visibility = "hidden";
  // grab first box
  var originalCompany = document.getElementById('originalCompany');
  // grab submit report button
  var submitButton = document.getElementById("submit-report");
  // add click trigger to submit report button and nav link
  clickTrigger(submitButton);
  clickTrigger(submitLink);
}

// not sure where I was going with this
var element = document.getElementById("to-form");

// function to add click listener
function clickTrigger(el) {
  el.addEventListener("click", function(event) {
    event.preventDefault();
    console.log(originalCompany.validationMessage);
    // is there an entry in the text box?
    if (originalCompany.checkValidity()) {
      console.log('yep');
      // show overlay and copy inputted value to hidden text box
      showOverlay();
      copyCompany.value = originalCompany.value;
    } else {
      originalCompany.focus();
    }
  }, false);
}

/* nav link:
- if home page then validate main box value, show overlay, copy to 2nd box and hide it
- otherwise show overlay, show copy box and validate it

button link (only home page):
- validate main box value, show overlay, copy to 2nd box and hide it
*/

// does what it says on the tin
function showOverlay() {
  submitProcess[0].style.display = "block";
  submitProcess[1].style.display = "block";
  document.getElementsByTagName('body')[0].style.overflow = "hidden";
}

// the yin to showOverlay()'s yang
submitProcess[0].addEventListener("click", function( event ) {
  submitProcess[0].style.display = "none";
  submitProcess[1].style.display = "none";
  document.getElementsByTagName('body')[0].style.overflow = "initial";
  copyCompany.value = "";
}, false);

// sign-in and authentication
var user;
// TODO: hook this up to Directory API to check against group member list
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  user = profile.getEmail();
}

// input to link user to submitted data
var userInput = document.getElementById("submitting-user");

function isApproved() {
  // does user have an OTI email address?
  if (user.match(/@opentechinstitute.org/) != null) {
    return true;
  }
}

document.getElementById("to-form").addEventListener("click", function( event ) {
  if (isApproved()) {
    userInput.value = user;
    currentLoc = window.location;
    setTimeout(function () {
      window.location = currentLoc.origin+"/submit-report-0.php";
    }, 1000);
  } else {
    alert("Sorry, your account hasn't been approved for data upload. Please <a href='mailto:addme@opentechinstitute.org'>contact us</a> to be approved");
    event.preventDefault();
  }
}, false);