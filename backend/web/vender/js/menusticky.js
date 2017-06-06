$(document).ready(function(){
    $('#menu').on('click','li', function() {
        $('#menu li ').removeClass('selected');
        $(this).addClass('selected');
    });
});

$(window).load(function(){
      $("#menu").sticky({ topSpacing: 0,zIndex:1000 });
    });

$(window).load(function(){
      $(".content_right").sticky({ topSpacing: 60,bottomSpacing:180,center:true });
    });
    
