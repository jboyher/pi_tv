<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("#div1").load("tv.php?command=TV_Mute");
    });
});
</script>
</head>
<body>

<div id="div1"><h2>testing tv functions</h2></div>

<button>Mute</button>

</body>
</html>

