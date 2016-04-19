function load_tv(tv_command) {
        var url_request="tv.php?command=" + tv_command;
        var xhttp = new XMLHttpRequest();
	encoded_request=encodeURI(url_request);
        xhttp.open("GET", encoded_request, true);
        xhttp.send();
}

