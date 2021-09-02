<?php
exec("sudo python /home/pi/testing-scripts/FullLog.py");
$logfile = 'GSuitlogs.txt';
if(file_exists($logfile))
{
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="'.basename($logfile).'"');
	header('Expire: 0');
	header('Cache-Control: must-revalidate');
	header('Pragma: public');
	header('Content-Length: ' . filesize($logfile));
	readfile($logfile);
	exit;
}
?>
