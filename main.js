setTimeout(function() {
  $.get("index.php", function(data) {
    $("#weather").html(data);
  });
}, 1000);
