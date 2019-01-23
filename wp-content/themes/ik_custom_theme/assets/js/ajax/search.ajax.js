(function($){
  $(document).ready(function(){
    var timeout = null;
    $('#search').on('keyup', function(e){

      if(e.keyCode == 13){
        e.preventDefault();
        return false;
      }

      clearTimeout(timeout)
      var that = $(this)

      timeout = setTimeout(function(){
        $.ajax({
          url: ajax_object.ajax_url,
          method: 'POST',
          data:{
            action: 'ik_ajax_search',
            query: that.val(),
          },
          beforeSend:function(){
            $('.all_sessions').html('').toggleClass('loading')
          },
          success: function(response){
            $('.all_sessions').html(response).toggleClass('loading')
          },
          error: function(response){
            $('.all_sessions').html(response).toggleClass('loading').toggleClass('error')
          }
        })
      }, 500)
    })
  })
}(jQuery))
