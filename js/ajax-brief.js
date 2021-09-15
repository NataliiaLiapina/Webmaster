$('#form-brief').submit(function(){
    $.post(
        'send-brief.php', // адрес обработчика
         $("#form-brief").serialize(), // отправляемые данные          
  
        function(msg) { // получен ответ сервера  
            // $('#contact-form').hide('slow');
            $('#brief-form__message').html(msg);
        }
    );
    
    return false;
  });