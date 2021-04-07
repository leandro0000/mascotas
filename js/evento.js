$(document).ready(function(){

    var numero = 0;

    $(".cru").click(function(){

        if ( numero == 0){
          
           $(".lista_pro").slideDown();
           numero = 1;
             
        }else {
            $(".lista_pro").slideUp();
            numero = 0;
        }



    });

});


$(document).ready(function(){
   
    var clas = 0;
     
    $(".dir").click(function(){

     
        $("div").removeClass(".venta");
    
            
        
    });

});
