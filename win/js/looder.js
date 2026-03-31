const win = document.querySelector("#winner");
const looder = document.querySelector(".looder-con");

var ctx = document.getElementById("circularLoader").getContext("2d");

var al = 0;
var start = 4.72;
var cw = ctx.canvas.width;
var ch = ctx.canvas.height;
var sim;

var myModal = new bootstrap.Modal(document.getElementById("modal"));

function progressSim() {

  var diff = ((al / 100) * Math.PI * 2 * 10).toFixed(2);

  ctx.clearRect(0, 0, cw, ch);

  ctx.lineWidth = 17;
	ctx.fillStyle = "#B63346";
	ctx.strokeStyle = "#B63346";

  ctx.textAlign = "center";
  ctx.font = "28px monospace";

  ctx.fillText(al + "%", cw * 0.52, ch * 0.5 + 5);

  ctx.beginPath();
  ctx.arc(100, 100, 75, start, diff / 10 + start, false);
  ctx.stroke();

  if (al >= 100) {
    clearInterval(sim);
    looder.style.display = "none";
    myModal.show();
    return;
  }

  al++;
}

win.addEventListener("click", function () {

  al = 0;
  looder.style.display = "block";

  sim = setInterval(progressSim, 20);
});
