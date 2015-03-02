$(document).ready(function(){
    setFooter();
    
    function setFooter(){            
        var header = $('nav').outerHeight();
        $('#wrap').css('margin-top',header+10);
        //$('body').css('height',$('body').height() - header - 10);
        //$('#wrap').css('height',$('body').height()-$('nav').outerHeight());
    }
    
    $('h5').each(function(){
       if($(this).html() != 'mkv' && $(this).html() != 'avi'){
           $(this).addClass('error');
       } 
    });
});

