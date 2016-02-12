<!DOCTYPE html>
<html>
<body>

<h2>AJAX</h2>


<button type="button" onclick=load_tv("TV_Power")>TV Power</button>
<button type="button" onclick=load_tv("TV_Mute")>TV Mute</button>
<button type="button" onclick=load_tv("TV_Vol%2B")>TV Vol+</button>
<button type="button" onclick=load_tv("TV_Vol")>TV Vol-</button>
<button type="button" onclick=load_tv("TV_Pause")>Pause-</button>

<p id="demo"></p>

<script>

function load_tv(tv_command) {
  var url_request="tv.php?command=" + tv_command;
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", url_request, true);
  xhttp.send();
}
</script>
 
</body>
</html>
