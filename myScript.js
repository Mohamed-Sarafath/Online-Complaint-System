$(document).ready(function() {
    if (localStorage.getItem("cookies_accepted") === null) {
      $(".cookies-notification").show();
    }
  
    $("#accept-cookies-btn").click(function() {
      localStorage.setItem("cookies_accepted", true);
      $(".cookies-notification").hide();
    });
  });
  