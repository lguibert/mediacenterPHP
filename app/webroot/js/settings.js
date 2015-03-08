$(document).ready(function(){
    $('.validateFormat').click(function(){
        var val = $(this).parent().parent().find('input[type="text"]').val();
        var action = $(this).parent().parent().parent().parent().attr('action');
        
        if(val != ''){
            $.get(action, {action: 'add', newFormat : val, type: $(this).attr('category') }, function(data){
                location.reload();
            });
        }else{
            alert('Une valeur est attendue.');
        }        
        
        return false;
    });
    
    $('.formSettings').submit(function(){
       return false; 
    });
    
    $('.deleteSmall').click(function(){     
        var action = $(this).parent().parent().parent().parent().attr('action');
        
        $.get(action, {action: 'delete', val : $(this).attr('value'), type: $(this).attr('category') }, function(data){
            location.reload();  
            //$('#wrap').html(data);
            
        });
        
        return false;
    });
});
