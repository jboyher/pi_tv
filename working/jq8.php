<!DOCTYPE html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="tv_functions.js"></script>

</head>

<html>
<body>

<h2>loop test</h2>
<p id="demo"></p>

<script>

var text = "";

for (count=0; count < lables.length ; count++) {
button_html="";
button_html="<button type=button";
button_html+=" onclick=load_tv(";
button_html+="\""
button_html+= command_text[count];
button_html+="\")";
button_html+=">";
button_html+= lables[count];
button_html+= "</button>";
text+=button_html + "<p>"
}

document.getElementById("demo").innerHTML = text;
</script>

</body>
</html>
