function updateClock() {
    var now = new Date();
    var time = now.toLocaleTimeString();
    var date = now.toLocaleDateString();
    var dateTime = date + ' ' + time;
    document.getElementById('clock').innerHTML = dateTime;
  }
  setInterval(updateClock, 1000);
  