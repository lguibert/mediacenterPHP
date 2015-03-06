$(document).ready(function(){
    $('.validateFormat').click(function(){
        var val = $(this).parent().parent().find('input[type="text"]').val();
        if(val != ''){
            $.get($('#formSettings').attr('action'), {newFormat : val, type: $(this).attr('category') }, function(){
                location.reload();
            });
        }else{
            alert('Une valeur est attendue.');
        }        
        return false;
    });
    
    $('#formSettings').submit(function(){
       return false; 
    });
});
