// get all company names from CKAN
// use them to populate the dropdown search-company-names

var data = {
   resource_id: '78377408-b750-4db9-bffb-dec9ef9c9477'
 };

populateCompanies();

function testAjax() {
  return $.ajax({
     url: 'https://data.opentechinstitute.org/api/action/datastore_search',
     data: data,
     dataType: 'jsonp',
   });
}

function populateCompanies() {
  data.limit = 5;
  var promise = testAjax();
  promise.success(function(data){
    var results = promise.responseJSON.result.records;
    for (var i=0; i<results.length; i++) {
      console.log(results[i]["company_name"]);
    }
  });
}