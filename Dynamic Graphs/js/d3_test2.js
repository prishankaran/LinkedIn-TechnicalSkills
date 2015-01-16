

var formatTime = d3.time.format("%X"),
    countdown = d3.select("#countdown"),
    today = d3.time.day(new Date);

// 9 AM tomorrow
var deadline = d3.time.day.offset(today, 1);
deadline.setHours(15);

(function tick() {
  var now = new Date;
  countdown.text(formatTime(new Date(+today + +deadline - d3.time.second(now))));
  setTimeout(tick, 1000 - now % 1000);
})();
