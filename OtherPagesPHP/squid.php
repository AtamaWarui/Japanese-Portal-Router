<?php

exec("sudo /usr/local/bin/squid.sh");
echo "squid is active";
//$myfile = fopen("PortalLog.txt", "a")or die("Unable to open file!");
//$txt = "[" . date("Y/m/d") . " " .date("H:i"). "]   Squid service restarted \n";

//fwrite($myfile, $txt);
//fclose($myfile);
?>
