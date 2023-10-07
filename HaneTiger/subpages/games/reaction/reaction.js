var i = 0;
function count(){
i++;
}
function game(){
    document.getElementById("tekst1").innerHTML = "wait...";
    var x = Math.floor(Math.random()*10000+5000);
    setTimeout(function() {
   
       document.getElementById("tekst1").innerHTML = "click a cube !";
       document.getElementById("gra").innerHTML = " <input type='button' onclick='stop()' id='buttonek2' >";
       setInterval(count, 100);

    }, x);
}
function stop(){
    document.getElementById("tekst1").innerHTML = "your reaction time equals  : <br>"+(i/10)+" secons.";
    document.getElementById("gra").innerHTML = " <input type='button' onclick='stop()' id='buttonek' >";
    document.getElementById("buttonek").onclick = null;

}
function reset(){
    window.location.reload(true);
}
