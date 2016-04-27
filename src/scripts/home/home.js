var submitProcess = [document.getElementsByClassName('overlay-background')[0], document.getElementsByClassName('overlay')[0]];
var user;
var company;
var originalCompany = document.getElementById('originalCompany');
var copyCompany = document.getElementById('copyCompany');
var approved = ['test@test.com', 'gembarrett1986@gmail.com'];
function include(arr,obj) {
    return (arr.indexOf(obj) != -1);
}

document.getElementById("submit-report").addEventListener("click", function( event ) {
  event.preventDefault();
  submitProcess[0].style.display = "block";
  submitProcess[1].style.display = "block";
  document.getElementsByTagName('body')[0].style.overflow = "hidden";
  copyCompany.value = originalCompany.value;
}, false);

submitProcess[0].addEventListener("click", function( event ) {
  submitProcess[0].style.display = "none";
  submitProcess[1].style.display = "none";
  document.getElementsByTagName('body')[0].style.overflow = "initial";
  copyCompany.value = "";
}, false);

document.getElementById("to-form").addEventListener("click", function( event ) {
  event.preventDefault();
  var isApproved = include(approved, user);
  if (isApproved) {
    currentLoc = window.location;
    setTimeout(function () {
      window.location = currentLoc.origin+"/dest/submit-report-0.php";
    }, 1000);
  } else {
    alert("Sorry, your account hasn't been approved for data upload.");
  }
}, false);

function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId());
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  user = profile.getEmail();
}
