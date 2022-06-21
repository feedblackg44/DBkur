$('.showbutton').click(function(){
    $('.showbutton').removeClass('active');
    $(this).addClass('active');

    $('.forms').hide();
});

$('#bCreate').click(function(){
    $('#Create').show();
});
$('#bReadAll').click(function(){
    $('#ReadAll').show();
});
$('#bRead').click(function(){
    $('#Read').show();
});
$('#bUpdate').click(function(){
    $('#Update').show();
});
$('#bDelete').click(function(){
    $('#Delete').show();
});
$('#bAbout').click(function(){
    $('#About').show();
});