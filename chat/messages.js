function getMessages(letter) {  
     var div = $("#messages");  
     $.get('chat/messages.php', function(data) {  
               div.html(data);  
          });  
}  
  
setInterval(getMessages, 1000);