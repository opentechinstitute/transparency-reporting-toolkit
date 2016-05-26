// // document.submitSection0.submit();
//
// var submitButton;
//
// function isInPage(node) {
//   return document.body.contains(node);
// }
//
// // find out what page we're on
// for (var i=0;i<=12;i++) {
//   if (isInPage(document.getElementById('submitSectionButton'+i))) {
//     submitButton = document.getElementById('submitSectionButton'+i);
//     clickTrigger(submitButton);
//   }
// }
//
// function clickTrigger(el) {
//   el.addEventListener("click", function(event) {
//     document.submitButton.submit();
//   }, false);
// }