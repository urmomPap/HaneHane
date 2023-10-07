var i=0;
var time_left = 10.00;

function reset(){
    window.location.reload(true);
}
    
function game(){
    i++;
    document.getElementById("tekst").innerHTML = i ;

    if(i>0){
        setTimeout("stop();", 10000); 
        if(i<2){
            setInterval("timer();", 10); 
        }
    }
}

function stop(){
    console.log("x");
    document.getElementById("buttonek").disabled = true;
    document.getElementById("tekst").innerHTML = "Your score: "+i+".<br> CPS: "+i/10;
    
}
function timer(){
    time_left = time_left-0.01;
    if(time_left>0){
    document.getElementById("tekst1").innerHTML = ""+time_left.toFixed(2)+"";
    } else { 
        document.getElementById("tekst1").innerHTML = "Finish!";
    }
}



