(function($) {
  $(document).ready(function() {
    $('.session_field_inner').not('.disabled').on('click', function() {
      console.log($(this).parent().data('ronde'));
    })
  })
}(jQuery))
