$('#contact-form').submit(function(){
  $.post(
      'send.php', // адрес обработчика
       $("#contact-form").serialize(), // отправляемые данные          

      function(msg) { // получен ответ сервера  
          // $('#contact-form').hide('slow');
          $('#contact-form__message').html(msg);
      }
  );
  
  return false;
});