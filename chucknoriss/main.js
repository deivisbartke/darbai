$(document).ready(function() {
  $("#getMsg").on("click", function() {
    $.getJSON("https://api.icndb.com/jokes/random", function(json) {
      $("#chucknoriss").html(json.value.joke);
    });
  });
});
