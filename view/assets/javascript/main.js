$(function() {
  $("input[type='search']").on('keyup', function(e) {
    var s = e.target.value.toLowerCase();
    s = s.replace(' ', '-');
    if (s) {
      $("div[id*='plano']").hide();
      $("div[id*='" + s + "']").show();
    } else {
      $("div[id*='plano']").show();
    }
  });
});