(function($){
  $(document).ready(function(){

    function filter(){
      //klaarmaken van query variables
      var filters = []
      for (prop in sessionStorage){
        if(!sessionStorage.hasOwnProperty(prop)) continue;
        var temp_object = {
          taxonomy: prop,
          field: 'slug',
          terms: sessionStorage[prop]
        }
        filters.push(temp_object);
      }

      $.ajax({
        url: ajax_object.ajax_url,
        method: 'POST',
        data: {
          action: 'ik_ajax_filter',
          filters: filters
        },
        beforeSend:function(){
          $('.all_sessions').toggleClass('loading').html(' ')
        },
        success: function(response){
          $('.all_sessions').toggleClass('loading').html(response)
        }
      });
    }

    filter();

    $('.filter_form').change(function(e){

      var term = e.target.value;
      var taxonomy = $(e.target).data('taxonomy-name');
      var temp_array = [];

      //update element style
      $(e.target).parent().toggleClass('selected');

      //updaten van sessionstorage
      if (sessionStorage.getItem(taxonomy) != undefined){
        temp_array = sessionStorage.getItem(taxonomy).split(',');

        term_pos = temp_array.indexOf(term);

        if(term_pos >= 0){
          temp_array = temp_array.filter(function(value){
            return value != term;
          })
        } else {
          temp_array.push(term)
        }

        if (temp_array.length > 0){
          sessionStorage.setItem(taxonomy, temp_array);
        } else {
          sessionStorage.removeItem(taxonomy)
        }
      } else {
        temp_array.push(term)
        sessionStorage.setItem(taxonomy, temp_array)
      }

      filter();
    });
  });
}(jQuery))
