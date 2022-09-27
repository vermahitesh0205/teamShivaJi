/*
<h4 id="timer">00</h4>
document.getElementById('timer').innerHTML = "00" + ":" +  "00" + ":" + "05";
function timerEndAction() { 
  //  timer End Action Here
}
startTimer(); or startCounter();
*/


function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var tA = presentTime.split(/[:]+/); // h = tA[0];  m = tA[1];  s = tA[2];
  tA[0] = parseInt(tA[0]); tA[1] = parseInt(tA[1]); tA[2] = parseInt(tA[2]);

  tA[2]=tA[2]-1; if(tA[2]==-1){ tA[2]=59; tA[1]=tA[1]-1; if(tA[1]==-1){ tA[1]=59; tA[0]=tA[0]-1; } }

  if (tA[0] < 10 && tA[0] >= 0) {tA[0] = "0" + tA[0]}; 
  if (tA[1] < 10 && tA[1] >= 0) {tA[1] = "0" + tA[1]};
  if (tA[2] < 10 && tA[2] >= 0) {tA[2] = "0" + tA[2]};

  if(tA[0]<0){ 
    document.getElementById('timer').innerHTML = '<span style="color : red;">EXPIRED</span>'; 
    timerEndAction(); return; 
  }
  
  document.getElementById('timer').innerHTML = tA[0] + ":" + tA[1] + ":" + tA[2];

  setTimeout(startTimer, 1000);
}

function startCounter() {
  document.getElementById('timer').innerHTML = "00" + ":" +  "00" + ":" + "00";
  timeCounter();
}

function timeCounter() {
  var presentTime = document.getElementById('timer').innerHTML;
  var tA = presentTime.split(/[:]+/); // h = tA[0];  m = tA[1];  s = tA[2];
  tA[0] = parseInt(tA[0]); tA[1] = parseInt(tA[1]); tA[2] = parseInt(tA[2]);

  tA[2]=tA[2]+1; if(tA[2]== 60){ tA[2]=0; tA[1]=tA[1]+1; if(tA[1]==60){ tA[1]=0; tA[0]=tA[0]+1; } }
  
  if (tA[0] < 10 && tA[0] >= 0) {tA[0] = "0" + tA[0]}; 
  if (tA[1] < 10 && tA[1] >= 0) {tA[1] = "0" + tA[1]};
  if (tA[2] < 10 && tA[2] >= 0) {tA[2] = "0" + tA[2]};

  if(tA[0]>24){ // max time limit 24 hours
    document.getElementById('timer').innerHTML = '<span style="color : red;">EXPIRED</span>'; 
    timerEndAction(); return; 
  }
  
  document.getElementById('timer').innerHTML = tA[0] + ":" + tA[1] + ":" + tA[2];

  setTimeout(timeCounter, 1000);
}