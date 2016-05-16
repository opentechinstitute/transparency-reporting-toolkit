calculator('request-types', 6);

function calculator(section, maxNo) {
  // get section
  el = document.getElementsByClassName(section);
  // get all inputs in that section
  allInputs = el[0].getElementsByTagName('input');
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
// function reqListener () {
//   console.log(this.responseText);
// }
//
// var oReq = new XMLHttpRequest();
// oReq.onload = function() {
//     alert(this.responseText);
// };
// oReq.open("GET", "scripts/submit-0.php");
// oReq.send();
var months = document.getElementsByClassName('months');
months = months[0].getElementsByTagName('span');
months = [].slice.call(months);
var years = document.getElementsByClassName('years');
years = years[0].getElementsByTagName('span');
years = [].slice.call(years);
addListeners(months);
addListeners(years);
var selection;

function addListeners(period) {
  for (var i=0; i<period.length; i++) {
    period[i].addEventListener("click", function( event ) {
      for (var j=0; j<period.length; j++) {
        if (period[j] == this) {
          this.classList.toggle('selected');
        }
        else {
          period[j].classList.remove('selected');
        }
        // else if (j.classList.contains('selected')) {
        //   j.classList.remove('selected');
        //   console.log(j);
        // } else {
        //   console.log(j);
        // }
      }
    }, false);
  }
}