function getMessages(letter) {
  var div = $("#messages");
  $.get('script/messages.php', function(data) {
    div.html(data);
  });
}

setInterval(getMessages, 1000);
