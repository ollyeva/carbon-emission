//counters

var c = 0;
var visitsSec = 47193;

//pes en kg. x 1 cÃ rrega google.com = 1,25MB
var co2 = 0.0108171;

setInterval(function () {
  document.getElementById("main").innerHTML =
    "" +
    "GOOGLE.COM EMITTED" +
    "<strong> " +
    c.toFixed(2) +
    "</strong> " +
    "KG OF CO2 SINCE YOU OPENED THIS PAGE";
  console.log(c);
  c = c + visitsSec * co2;
}, 1000);
