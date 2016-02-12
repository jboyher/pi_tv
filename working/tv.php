<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head> 
<body>



<!-- This link will add ?run=true to your URL, myfilename.php?run=true -->


<a href="?command=TV_Power">TV Power</a><p>
<a href="?command=TV_Mute">Mute</a><p>
<a href="?command=TV_Vol%2B">Vol Up</a><p>
<a href="?command=TV_Vol-">Vol Down</a><p>
<a href="?command=TV_Source">TV_Source</a><p>
<a href="?command=TV_Info">Info</a><p>
<a href="?command=TV_Menu">Menu</a><p>
<a href="?command=TV_Play">TV_Play</a><p>
<a href="?command=TV_Pause">Pause</a><p>
<a href="?command=TV_Exit">Exit</a><p>

<?php
$command = $_GET["command"];
shell_exec("/usr/lib/cgi-bin/tv.sh $command");
?>



</body>
</html>
