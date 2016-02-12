<!DOCTYPE html>
<html>
<body>

<h2>TV</h2>


<button type="button" onclick="load_tv_power()">TV Power</button>
<button type="button" onclick="load_tv_mute()">TV Mute</button>
<button type="button" onclick="load_tv_vol_up()">TV Vol+</button>
<button type="button" onclick="load_tv_vol_down()">TV Vol-</button>

<button type="button" onclick="load_tv_pause()">Pause-</button>
<p id="demo"></p>



<script>
function load_tv_power() {
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "tv.php?command=TV_Power", true);
  xhttp.send();
}
function load_tv_mute() {
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "tv.php?command=TV_Mute", true);
  xhttp.send();
}
function load_tv_vol_up() {
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "tv.php?command=TV_Vol%2B", true);
  xhttp.send();
}
function load_tv_vol_down() {
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "tv.php?command=TV_Vol-", true);
  xhttp.send();
}
function load_tv_pause() {
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "tv.php?command=TV_Pause", true);
  xhttp.send();
}
</script>
 
</body>
</html>
