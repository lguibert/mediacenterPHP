$(document).ready(function(){
    $('#filesPresentation h1.clickable').click(function(){
        $(this).find('+ .contains').toggle();
    });
    
    $('.addable img').click(function(){
       $(this).find('+ .form-addable').toggle("slow").find('input[type="text"]').delay(500).focus();
    });    
    
    hideMessages(5000);
    function hideMessages(delay){
        $('#wrap').find("#messages p.text-success").each(function(){
            $(this).delay(delay).fadeOut('slow');
        });
    }
});
