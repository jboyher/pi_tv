var labels=[KEY_POWER","KEY_MENU","KEY_INFO","KEY_INFO","KEY_UP","KEY_DOWN","KEY_LEFT","KEY_RIGHT","KEY_OK","KEY_EXIT","KEY_OPTION","widgets","KEY_POWER","KEY_FAVORITES","KEY_LAST","fiostv","KEY_CHANNELUP","KEY_CHANNELDOWN","KEY_PREVIOUS","dvr","KEY_NEXT","KEY_REWIND","KEY_PLAYPAUSE","KEY_FASTFORWARD","KEY_STOP","KEY_RECORD","KEY_1","KEY_2","KEY_3","KEY_4","KEY_5","KEY_6","KEY_7","KEY_8","KEY_9","KEY_0","KEY_NUMERIC_STAR","KEY_NUMERIC_POUND","KEY_YELLOW","KEY_BLUE","KEY_RED","KEY_GREEN","av","pip","pip-change"];

var command_text=[KEY_POWER","KEY_MENU","KEY_INFO","KEY_INFO","KEY_UP","KEY_DOWN","KEY_LEFT","KEY_RIGHT","KEY_OK","KEY_EXIT","KEY_OPTION","widgets","KEY_POWER","KEY_FAVORITES","KEY_LAST","fiostv","KEY_CHANNELUP","KEY_CHANNELDOWN","KEY_PREVIOUS","dvr","KEY_NEXT","KEY_REWIND","KEY_PLAYPAUSE","KEY_FASTFORWARD","KEY_STOP","KEY_RECORD","KEY_1","KEY_2","KEY_3","KEY_4","KEY_5","KEY_6","KEY_7","KEY_8","KEY_9","KEY_0","KEY_NUMERIC_STAR","KEY_NUMERIC_POUND","KEY_YELLOW","KEY_BLUE","KEY_RED","KEY_GREEN","av","pip","pip-change"];


function load_verizon(verizon_command) {
        var url_request="verizon.php?command=" + verizon_command;
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", url_request, true);
        xhttp.send();
}
