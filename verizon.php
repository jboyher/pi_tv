<a href="?g=KEY_POWER">KEY_POWER</a><p>
<a href="?g=KEY_MENU">KEY_MENU</a><p>
<a href="?g=KEY_INFO">KEY_INFO</a><p>
<a href="?g=KEY_INFO">KEY_INFO</a><p>
<a href="?g=KEY_UP">KEY_UP</a><p>
<a href="?g=KEY_DOWN">KEY_DOWN</a><p>
<a href="?g=KEY_LEFT">KEY_LEFT</a><p>
<a href="?g=KEY_RIGHT">KEY_RIGHT</a><p>
<a href="?g=KEY_OK">KEY_OK</a><p>
<a href="?g=KEY_EXIT">KEY_EXIT</a><p>
<a href="?g=KEY_OPTION">KEY_OPTION</a><p>
<a href="?g=widgets">widgets</a><p>
<a href="?g=KEY_POWER">KEY_POWER</a><p>
<a href="?g=KEY_FAVORITES">KEY_FAVORITES</a><p>
<a href="?g=KEY_LAST">KEY_LAST</a><p>
<a href="?g=fiostv">fiostv</a><p>
<a href="?g=KEY_CHANNELUP">KEY_CHANNELUP</a><p>
<a href="?g=KEY_CHANNELDOWN">KEY_CHANNELDOWN</a><p>
<a href="?g=KEY_PREVIOUS">KEY_PREVIOUS</a><p>
<a href="?g=dvr">dvr</a><p>
<a href="?g=KEY_NEXT">KEY_NEXT</a><p>
<a href="?g=KEY_REWIND">KEY_REWIND</a><p>
<a href="?g=KEY_PLAYPAUSE">KEY_PLAYPAUSE</a><p>
<a href="?g=KEY_FASTFORWARD">KEY_FASTFORWARD</a><p>
<a href="?g=KEY_STOP">KEY_STOP</a><p>
<a href="?g=KEY_RECORD">KEY_RECORD</a><p>
<a href="?g=KEY_1">KEY_1</a><p>
<a href="?g=KEY_2">KEY_2</a><p>
<a href="?g=KEY_3">KEY_3</a><p>
<a href="?g=KEY_4">KEY_4</a><p>
<a href="?g=KEY_5">KEY_5</a><p>
<a href="?g=KEY_6">KEY_6</a><p>
<a href="?g=KEY_7">KEY_7</a><p>
<a href="?g=KEY_8">KEY_8</a><p>
<a href="?g=KEY_9">KEY_9</a><p>
<a href="?g=KEY_0">KEY_0</a><p>
<a href="?g=KEY_NUMERIC_STAR">KEY_NUMERIC_STAR</a><p>
<a href="?g=KEY_NUMERIC_POUND">KEY_NUMERIC_POUND</a><p>
<a href="?g=KEY_YELLOW">KEY_YELLOW</a><p>
<a href="?g=KEY_BLUE">KEY_BLUE</a><p>
<a href="?g=KEY_RED">KEY_RED</a><p>
<a href="?g=KEY_GREEN">KEY_GREEN</a><p>
<a href="?g=av">av</a><p>
<a href="?g=pip">pip</a><p>
<a href="?g=pip-change">pip-change</a><p>


<?php
$command = $_GET["g"];
shell_exec("/usr/lib/cgi-bin/verizon.sh $command");
?>
