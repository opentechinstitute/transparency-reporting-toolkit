var submitProcess = [document.getElementsByClassName('overlay-background')[0], document.getElementsByClassName('overlay')[0]];

document.getElementById("submit-report").addEventListener("click", function( event ) {
  event.preventDefault();
  submitProcess[0].style.display = "block";
  submitProcess[1].style.display = "block";
}, false);

submitProcess[0].addEventListener("click", function( event ) {
  event.preventDefault();
  submitProcess[0].style.display = "none";
  submitProcess[1].style.display = "none";
}, false);

calculator('request-types', 6);

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