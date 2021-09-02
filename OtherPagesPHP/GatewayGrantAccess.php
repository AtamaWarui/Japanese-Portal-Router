
<?php


//To create gateways, grant access to the created groups and adding peers to the groups

exec("sudo gabriel_cmd localservice add --name IPD-Support-222 --dest_address 127.0.0.1 --dest_port 222 --dest_udp_port 222 --allow_non_vpn --mapped_port 222 --mapped_udp_port 222");
exec("sudo gabriel_cmd localservice add --name IPD-Support-5850 --dest_address 127.0.0.1 --dest_port 5850 --dest_udp_port 5850 --allow_non_vpn --mapped_port 5850 --mapped_udp_port 5850");
exec("sudo gabriel_cmd localservice add --name IPD-Support-812 --dest_address 127.0.0.1 --dest_port 812 --dest_udp_port 812 --allow_non_vpn --mapped_port 812 --mapped_udp_port 812");
exec("sudo gabriel_cmd localservice addgroup --name IPD-Support-812 --group MyGSuit");
exec("sudo gabriel_cmd localservice addgroup --name IPD-Support-812 --group IPD-Support");
exec("sudo gabriel_cmd localservice addgroup --name IPD-Support-222 --group MyGSuit");
exec("sudo gabriel_cmd localservice addgroup --name IPD-Support-5850  --group MyGSuit");
exec("sudo gabriel_cmd localservice addgroup --name IPD-Support-222 --group IPD-Support");
exec("sudo gabriel_cmd localservice addgroup --name IPD-Support-5850 --group IPD-Support");

?>


