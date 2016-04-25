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