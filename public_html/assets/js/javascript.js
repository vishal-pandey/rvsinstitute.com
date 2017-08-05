function rvs(x){
  return document.getElementById(x);
  }

var w = new Date();
document.getElementById("watch").innerHTML = w.toLocaleTimeString();

var myVar = setInterval(myTimer ,1000);
function myTimer() {
    var d = new Date();
    document.getElementById("watch").innerHTML = d.toLocaleTimeString();
}
