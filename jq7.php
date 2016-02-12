<!DOCTYPE html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	

</head>

<html>
<body>

<h2>loop test</h2>
<p id="demo"></p>
<script>
<!--
	function load_tv(tv_command) {
  	var url_request="tv.php?command=" + tv_command;
  	var xhttp = new XMLHttpRequest();
  	xhttp.open("GET", url_request, true);
  	xhttp.send();
}

--> 
var text = "";
//var lables  = ["TV Power" , "TV Mute" ,  "TV Vol+" , "TV Vol-"]; // no need for an array

var lables = ["BD_Power",  "BD_Eject",  "BD_Dimmer",  "BD_BD",  "BD_Tuner",  "BD_Aux",  "BD_1",  "BD_2",  "BD_3",  "BD_4",  "BD_5",  "BD_6",  "BD_7",  "BD_8",  "BD_9",  "BD_0",  "BD_Audio",  "BD_Subtitle",  "BD_Previous",  "BD_Step",  "BD_Pause",  "BD_Next",  "BD_Rewind",  "BD_Stop",  "BD_Play",  "BD_Fastforward",  "BD_Vol+",  "BD_Vol-",  "BD_Mute",  "BD_V-sound",  "BD_Chan_up",  "BD_Chan_down",  "BD_Menu",  "BD_Return",  "BD_Arrow_up",  "BD_Arrow_down",  "BD_Arrow_left",  "BD_Arrow_right",  "BD_Enter",  "BD_Info",  "BD_Exit",  "BD_Red",  "BD_Green",  "BD_Yellow",  "BD_Blue",  "BD_Popup/title_menu",  "BD_Disc_menu",  "BD_Zoom",  "BD_Pip",  "BD_Tuner_memory",  "BD_MO/ST",  "BD_Repeat_A/B",  "BD_Repeat",  "BD_Cancel",  "BD_Sleep",  "BD_Slow",  "BD_Dsp",  "TV_Power",  "TV_Source",  "TV_1",  "TV_2",  "TV_3",  "TV_4",  "TV_5",  "TV_6",  "TV_7",  "TV_8",  "TV_9",  "TV_0",  "TV_Pause",  "TV_Rewind",  "TV_Stop",  "TV_Play",  "TV_Fastforward",  "TV_Vol+",  "TV_Vol-",  "TV_Mute",  "TV_Chan_up",  "TV_Chan_down",  "TV_Menu",  "TV_Return",  "TV_Info",  "TV_Exit",  "TV_Arrow_up",  "TV_Arrow_down",  "TV_Arrow_left",  "TV_Arrow_right",  "TV_Enter",  "TV_Red",  "TV_Green",  "TV_Yellow",  "TV_Blue",  "TV_Sleep"];

var command_text = ["BD_Power",  "BD_Eject",  "BD_Dimmer",  "BD_BD",  "BD_Tuner",  "BD_Aux",  "BD_1",  "BD_2",  "BD_3",  "BD_4",  "BD_5",  "BD_6",  "BD_7",  "BD_8",  "BD_9",  "BD_0",  "BD_Audio",  "BD_Subtitle",  "BD_Previous",  "BD_Step",  "BD_Pause",  "BD_Next",  "BD_Rewind",  "BD_Stop",  "BD_Play",  "BD_Fastforward",  "BD_Vol+",  "BD_Vol-",  "BD_Mute",  "BD_V-sound",  "BD_Chan_up",  "BD_Chan_down",  "BD_Menu",  "BD_Return",  "BD_Arrow_up",  "BD_Arrow_down",  "BD_Arrow_left",  "BD_Arrow_right",  "BD_Enter",  "BD_Info",  "BD_Exit",  "BD_Red",  "BD_Green",  "BD_Yellow",  "BD_Blue",  "BD_Popup/title_menu",  "BD_Disc_menu",  "BD_Zoom",  "BD_Pip",  "BD_Tuner_memory",  "BD_MO/ST",  "BD_Repeat_A/B",  "BD_Repeat",  "BD_Cancel",  "BD_Sleep",  "BD_Slow",  "BD_Dsp",  "TV_Power",  "TV_Source",  "TV_1",  "TV_2",  "TV_3",  "TV_4",  "TV_5",  "TV_6",  "TV_7",  "TV_8",  "TV_9",  "TV_0",  "TV_Pause",  "TV_Rewind",  "TV_Stop",  "TV_Play",  "TV_Fastforward",  "TV_Vol+",  "TV_Vol-",  "TV_Mute",  "TV_Chan_up",  "TV_Chan_down",  "TV_Menu",  "TV_Return",  "TV_Info",  "TV_Exit",  "TV_Arrow_up",  "TV_Arrow_down",  "TV_Arrow_left",  "TV_Arrow_right",  "TV_Enter",  "TV_Red",  "TV_Green",  "TV_Yellow",  "TV_Blue",  "TV_Sleep"];

for (count=0; count <  lables.length; count++) {
text="";
//button_html="<button type=\"button\" onclick=\"load_tv\(\"" + command_text[count] + " \"\)>" + lables[count] + "</button>";
   text+=button_html + "<p>"; 
}

document.getElementById("demo").innerHTML = text;
</script>

</body>
</html>
