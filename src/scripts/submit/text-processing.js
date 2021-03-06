var chosenMonths;
var chosenYears;

if (formProcess() == 0) {
  var months = document.getElementsByClassName('months');
  months = months[0].getElementsByTagName('span');
  months = [].slice.call(months);
  var years = document.getElementsByClassName('years');
  years = years[0].getElementsByTagName('span');
  years = [].slice.call(years);
  var copyMonth = document.getElementById('copyMonths');
  var copyYear = document.getElementById('copyYears');
  addListeners(months);
  addListeners(years);
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
      }
      if (this.parentNode.classList == "months") {
        copyMonth.value = this.innerHTML;
      } else {
        copyYear.value = this.innerHTML;
      }
    }, false);
  }
}

function formProcess() {
  // what page are we on?
  var forms = document.forms;
  // get the name of the main form
  var thisForm = forms[0].name;
  return thisForm.match(/.$/);
}