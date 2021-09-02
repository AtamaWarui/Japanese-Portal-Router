<?php
// To delete the G-SUIT production sheet
exec("sudo gabriel_cmd localservice del --name IPD-Support-222 ");
exec("sudo gabriel_cmd localservice del --name IPD-Support-5850 ");
exec("sudo gabriel_cmd localservice del --name IPD-Support-812 ");

?>
