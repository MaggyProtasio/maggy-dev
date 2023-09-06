//Custom circular mouse pointer
$(document).ready(function() {
    $(document).on('mousemove', function(e) {
      $('#circular-cursor').css({
        left: e.pageX,
        top: e.pageY
      });
    })
  });