$(document).ready(function(){
    $('#filesPresentation h1.clickable').click(function(){
        $(this).find('+ .contains').toggle();
    });
});
