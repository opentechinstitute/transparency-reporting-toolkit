// overlay elements
var submitProcess = [document.getElementsByClassName('overlay-background')[0], document.getElementsByClassName('overlay')[0]];
var submitLink = document.getElementById("submit-link");

var user;
var copyCompany = document.getElementById('copyCompany');

/* nav link:
- if home page then validate main box value, show overlay, copy to 2nd box and hide it
- otherwise show overlay, show copy box and validate it

button link (only home page):
- validate main box value, show overlay, copy to 2nd box and hide it
*/

// function to check for element existence
function itLives(el) {
  if(document.getElementById(el)) {
    return true;
  } else {
    return false;
  }
}

// get inputted name from textbox, if it exists, else empty for now
if (itLives('originalCompany')) {
  var originalCompany = document.getElementById('originalCompany');
} else {
  var originalCompany = '';
}

// TODO: hook this up to Directory API to check against group member list
var approved = ['gembarrett1986@gmail.com'];
function include(arr,obj) {
    return (arr.indexOf(obj) != -1);
}

// if we're on the home page, check for company name before proceeding
if (itLives("submit-report")) {
  var homeButton = document.getElementById("submit-report");
  homeButton.addEventListener("click", function(event) {
    // is there an entry in the text box?
    if (originalCompany.checkValidity()) {
      // show overlay and copy inputted value to hidden text box
      showOverlay();
      copyCompany.value = originalCompany.value;
    }
  }, false);
}

function showOverlay() {
  event.preventDefault();
  submitProcess[0].style.display = "block";
  submitProcess[1].style.display = "block";
  document.getElementsByTagName('body')[0].style.overflow = "hidden";
}

submitProcess[0].addEventListener("click", function( event ) {
  submitProcess[0].style.display = "none";
  submitProcess[1].style.display = "none";
  document.getElementsByTagName('body')[0].style.overflow = "initial";
  copyCompany.value = "";
}, false);

document.getElementById("to-form").addEventListener("click", function( event ) {
  var isApproved = include(approved, user);
  if (isApproved) {
    currentLoc = window.location;
    setTimeout(function () {
      window.location = currentLoc.origin+"/submit-report-0.php";
    }, 1000);
  } else {
    alert("Sorry, your account hasn't been approved for data upload.");
    event.preventDefault();
  }
}, false);

function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  user = profile.getEmail();
}