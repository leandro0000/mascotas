$(document).ready(function(){
    var num = 0;

    $(".per").click(function(){


        if (num == 0 ){

            $(".blo_login").slideDown();
            num = 1;
        }else{
            $(".blo_login").slideUp();
            num = 0;
        }

    });


});


