function calculator(section, maxNo) {
  // get section containing the input boxes
  el = document.getElementsByClassName(section);
  // get all inputs in that section
  allInputs = el[0].getElementsByTagName('input');
  // get total input box from that list of inputs
  totalInput = allInputs[maxNo-1];
  // initialise the total to 0
  total = 0;
  // set the value of the
  totalInput.value = 0;
  // filter down to only required ones
  // if (this.value != "") {
  //   for (var i=0; i<maxNo;i++){
  //     allInputs[i].oninput = function() {
  //       total = parseFloat(this.value+total);
  //       console.log(total);
  //       totalInput.value = total;
  //     }
  //   }
  // }
}

// what page are we on?
var forms = document.forms;
// get the name of the main form
var thisForm = forms[0].name;
switch (thisForm) {
  case "submitSection0":
    calculator('request-types', 8);
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
  case "submitSection8":
    calculator('outcomes', 5);
    break;
  case "submitSection9":
    calculator('notifications', 4);
    break;
  case "submitSection10":
    calculator('request-types', 3);
    break;
  case "submitSection11":
    calculator('outcomes', 5);
    break;
  case "submitSection12":
    calculator('notifications', 4);
    break;
  default:

}