function leagueFunction() {
    let value = document.getElementById("league").value;
    //alert(value);
    let result = localStorage.getItem(value);
    document.getElementById('res').innerHTML = result;
}
function playerFunction(){
    let value = document.getElementById("player").value;
    value = value + " 1";
    //alert(value);
    let result = localStorage.getItem(value);
    document.getElementById('res').innerHTML = result;
}
function teamFunction() {
    let value = document.getElementById("team").value;
    value = value + " 2";
    //alert(value);
    let result = localStorage.getItem(value);
    document.getElementById('res').innerHTML = result;
}
