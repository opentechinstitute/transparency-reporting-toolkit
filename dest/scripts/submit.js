var percAC = true;
function calculator(section, maxNo) {
  // get section containing the input boxes
  el = document.getElementsByClassName(section);
  // get all inputs in that section
  allInputs = el[0].getElementsByTagName('input');
  // get total input box from that list of inputs
  totalInput = allInputs[maxNo-1];
  // initialise the total to 0
  total = parseInt(0);
  // set the value of the total
  totalInput.value = 0;
  // for each input
  for (var i=0; i<maxNo-1;i++){
    // when a value is entered
    allInputs[i].oninput = function() {
      // recalculate the total
      newTotal = getTotal(maxNo, allInputs);
      totalInput.value = newTotal;
    }
  }
}

function getTotal(maxNo, allInputs) {
  currentTotal = 0;
  // for each input
  for (var i=0;i<maxNo-1;i++) {
    if (allInputs[i].value != "") {
      // add each input's value together
      currentTotal += parseInt(allInputs[i].value);
      if (percAC) {
        getPercs(maxNo, allInputs);
      }
    }
  }
  return currentTotal;
}

function getPercs(maxNo, allInputs) {
  currentPerc = 0;
  for (var j=0; j<maxNo-1; j++) {
    p = j+maxNo;
    currentPerc = (allInputs[j].value/currentTotal)*100;
    allInputs[p].value = currentPerc;
  }
}

// what page are we on?
var forms = document.forms;
// get the name of the main form
var thisForm = forms[0].name;
// TODO: this is terrible, clean it up
switch (thisForm) {
  case "submitSection0":
    calculator('request-types', 8);
    percAC = false;
    break;
  case "submitSection1":
    calculator('outcomes', 5);
    break;
  case "submitSection2":
    calculator('outcomes', 5);
    break;
  case "submitSection3":
    calculator('outcomes', 5);
    break;
  case "submitSection4":
    calculator('outcomes', 5);
    break;
  case "submitSection5":
    calculator('outcomes', 5);
    break;
  case "submitSection6":
    calculator('outcomes', 5);
    break;
  case "submitSection7":
    calculator('outcomes', 5);
    break;
  case "submitSection9":
    calculator('notifications', 4);
    break;
  case "submitSection10":
    calculator('request-types', 3);
    percAC = false;
    break;
  case "submitSection11":
    calculator('outcomes', 5);
    break;
  case "submitSection12":
    calculator('notifications', 4);
    break;
  default:

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
// document.submitSection0.submit();

var submitButton;

function isInPage(node) {
  return (node === document.body) ? false : document.body.contains(node);
}

// find out what page we're on
for (var i=0;i<=12;i++) {
  if (isInPage(document.getElementById('submitSectionButton'+i))) {
    submitButton = document.getElementById('submitSectionButton'+i);
    clickTrigger(submitButton);
  }
}

function clickTrigger(el) {
  el.addEventListener("click", function(event) {
    document.submitButton.submit();
  }, false);
}
if (isInPage(document.getElementsByName('submitSection0'))) {
  var months = document.getElementsByClassName('months');
  months = months[0].getElementsByTagName('span');
  months = [].slice.call(months);
  var years = document.getElementsByClassName('years');
  years = years[0].getElementsByTagName('span');
  years = [].slice.call(years);
  addListeners(months);
  addListeners(years);
  var selection;  
}

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