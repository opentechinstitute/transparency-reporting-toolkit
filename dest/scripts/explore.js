var data = {
   resource_id: '78377408-b750-4db9-bffb-dec9ef9c9477', // the resource id
   limit: 5, // get 5 results
   q: {'company_name':'New'}
 };
 $.ajax({
   url: 'https://data.opentechinstitute.org/api/action/datastore_search',
   data: data,
   dataType: 'jsonp',
   success: function(data) {
     console.log(data.result.records[0]['company_name'])
   }
 });