(function($){
  $(document).ready(function(){
    $('.filter_form').change(function(e){
      console.log(e.target.value);
      console.log($(e.target).data('taxonomy-name'));
      console.log($(e.target).attr('checked'));

      var filters = {
        e.target.value : 
      }

      sessionStorage.setItem('filters', filters)
      console.log(sessionStorage.getItem('filters'));

    })
  })
}(jQuery))
