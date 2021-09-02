<?php

exec("sudo bash /home/pi/gsuit-scripts/net-config/gsuit-ipconf.sh -g ");
echo "DHCP is activated \n";
exec("sudo ifconfig eth0 | grep -Eo 'inet (addr:)?([0-9]*\.){3}[0-9]*' | grep -Eo '([0-9]*\.){3}[0-9]*' | grep -v '127.0.0.1'");
exec("sudo python /var/www/html/IP_pac_generation.py");
$myfile = fopen("PortalLog.txt", "a")or die("Unable to open file!");
$txt = "[" . date("Y/m/d") . " " .date("H:i"). "]   DHCP is activated \n";

fwrite($myfile, $txt);
fclose($myfile);
?>
