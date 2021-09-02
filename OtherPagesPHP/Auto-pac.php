<?php

exec("sudo python /var/www/html/IP_pac_generation.py");
echo "PAC file generated !";
//$myfile = fopen("PortalLog.txt", "a")or die("Unable to open file!");
//$txt = "[" . date("Y/m/d") . " " .date("H:i"). "]   Gabriel service restarted \n";
//fwrite($myfile, $txt);
//fclose($myfile);
?>

