// Set the date we're counting down to
if (localStorage.getItem("endtime") === null) {
  var endtime = new Date().getTime();
  localStorage.setItem("endtime", endtime);
}
  else{
  var endtime = localStorage.getItem("endtime", endtime);
  }
  var tambahan = <?= $_SESSION['tambahan']?>*60*1000;
  var countDownDate = tambahan + parseInt(endtime);
  // var countDownDate = tambahan + parseInt(sessionStorage.getItem("endtime",endtime));
  // var countDownDate = tambahan + countDownDate;
  // var today = new Date();
  // var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  // document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  // + minutes + "m " + seconds + "s ";
  document.getElementById("demo").innerHTML = hours + " : "
  + minutes + " : " + seconds ;
  // document.getElementById("demo1").innerHTML = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
  document.getElementById("demo1").innerHTML = countDownDate + " " + now;
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);