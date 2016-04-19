var submitProcess = [document.getElementsByClassName('overlay-background')[0], document.getElementsByClassName('overlay')[0]];
var user;
var approved = ['test@test.com', 'gembarrett1986@gmail.com'];

document.getElementById("submit-report").addEventListener("click", function( event ) {
  event.preventDefault();
  submitProcess[0].style.display = "block";
  submitProcess[1].style.display = "block";
  document.getElementsByTagName('body')[0].style.overflow = "hidden";
}, false);

submitProcess[0].addEventListener("click", function( event ) {
  submitProcess[0].style.display = "none";
  submitProcess[1].style.display = "none";
  document.getElementsByTagName('body')[0].style.overflow = "initial";
}, false);

document.getElementById("to-form").addEventListener("click", function( event ) {
  event.preventDefault();
  var isApproved = include(approved, user);
  if (isApproved) {
    currentLoc = window.location;
    setTimeout(function () {
      window.location = currentLoc.origin+"/dest/submit-report-0.html";
    }, 1000);
  } else {
    alert("Sorry, your account hasn't been approved for data upload.");
  }
}, false);

function include(arr,obj) {
    return (arr.indexOf(obj) != -1);
}

calculator('request-types', 6);

function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId());
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  user = profile.getEmail();
}


function calculator(section, maxNo) {
  // get section
  el = document.getElementsByClassName(section);
  console.log(el[0]);
  // get all inputs in that section
  allInputs = el[0].getElementsByTagName('input');
  console.log(allInputs);
  // get total box
  totalInput = allInputs[maxNo];
  total = 0;
  allInputs[maxNo].value = 0;
  // filter down to only required ones
  if (this.value != "") {
    for (var i=0; i<maxNo;i++){
      allInputs[i].oninput = function() {
        total = parseFloat(this.value+total);
        console.log(total);
        totalInput.value = total;
      }
    }
  }
}