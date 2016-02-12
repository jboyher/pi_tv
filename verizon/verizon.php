<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head> 
<body>

<?php
$command = $_GET["command"];
shell_exec("/usr/lib/cgi-bin/verizon.sh $command");
?>



</body>
</html>
