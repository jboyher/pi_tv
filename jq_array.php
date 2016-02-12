<!DOCTYPE html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>

<html>
<body>

<h2>AJAX</h2>

<script>
var arr_jq_TabContents = {}; // no need for an array

arr_jq_TabContents["Main"] = jq_TabContents_Main;
arr_jq_TabContents["Guide"] = jq_TabContents_Guide;
arr_jq_TabContents["Articles"] = jq_TabContents_Articles;
arr_jq_TabContents["Forum"] = jq_TabContents_Forum;

for (var key in arr_jq_TabContents) {
    echo (arr_jq_TabContents[key]);
}

</script>

</body>
</html>
