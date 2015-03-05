$(document).ready(function(){
    $('#filesPresentation h1.clickable').click(function(){
        $(this).find('+ .contains').toggle();
    });
    
    $('.addable img').click(function(){
       $(this).find('+ .form-addable').toggle("slow").find('input[type="text"]').delay(500).focus();
    });    
});
