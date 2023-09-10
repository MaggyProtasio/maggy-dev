//Custom circular mouse pointer
$(document).ready(function() {
    var cursor = $('#circular-cursor');

    $(document).on('mousemove', function(e) {
      cursor.css({
        left: e.pageX,
        top: e.pageY
      });
    });
}); 
