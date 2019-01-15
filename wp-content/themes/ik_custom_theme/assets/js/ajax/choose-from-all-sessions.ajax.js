(function($) {
  $(document).ready(function() {
    $('.session_field_inner').not('.disabled').on('click', function() {
      var that = $(this)
      var ronde_id = $(this).parent().data('ronde')

      $.ajax({
        url: ajax_object.ajax_url,
        method: 'POST',
        data: {
          action: 'ik_ajax_cfas',
          ronde_id: ronde_id,
        },
        beforeSend: function(){
          that.children().css('opacity', 0);
          that.toggleClass('loading')
        },
        success: function(response){
          that.toggleClass('loading').children().css('opacity', 1)
          $('.line_up_outer').animate({
            top: '-4vh',
            opacity: '0'
          },'fast', function(){
            $('.line_up_outer').animate({
              top: '0',
              opacity: 1
            },'fast').html(response)
          })
        },
        error: function(response){
          that.toggleClass('loading').addClass('error')
          that.text(response)
        }
      });
    });
  });
}(jQuery))
