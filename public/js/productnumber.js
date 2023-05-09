console.log("Rendered")
$(document).ready(function(){
    $('.minus').click(function(){
      var elem = $(this).parent().find('.productcount');
      elem.val(+elem.val() - 1);

      if(elem.val() < 1)
      {
        elem.val(1);
      }
    });

    $('.plus').click(function(){
      var elem = $(this).parent().find('.productcount');
      elem.val(+elem.val() + 1);
    });
  });



