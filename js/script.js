$(document).ready(function(){

    var imgItems = $('.slider li').length; 
    var pagPos = 0;
    
   
    $('.slider li').hide();
    $('.slider li').first().show();
    $('.slider2 li').hide();
    $('.slider2 li').first().show();
    $('.slider3 li').hide();
    $('.slider3 li').first().show();
    $('.slider4 li').hide();
    $('.slider4 li').first().show();
    $('.slider5 li').hide();
    $('.slider5 li').first().show();
    

    setInterval(function(){
        siguiente();
    },5000);
    function siguiente(){

       if(pagPos >= imgItems-1){
        pagPos = 0
       }else{
        pagPos++;
       }
        $('.slider li').hide();
        $('.slider li').eq(pagPos).fadeIn();
        $('.slider2 li').hide();
        $('.slider2 li').eq(pagPos).fadeIn();
        $('.slider3 li').hide();
        $('.slider3 li').eq(pagPos).fadeIn();
        $('.slider4 li').hide();
        $('.slider4 li').eq(pagPos).fadeIn();
        $('.slider5 li').hide();
        $('.slider5 li').eq(pagPos).fadeIn();
    }

});
