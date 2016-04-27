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