<?php 
# Call gabriel_cmd for peer list and format conversion
$command = shell_exec('sudo gabriel_cmd peer list');
#echo "$command<br>";
$LSList = explode(" ->",$command);
$SDN = $LSList[1];

$command7 = shell_exec('sudo gabriel_cmd account list');

# Displat device's SDN
echo "Your Secure Name is: $command7<br>You are peered with:<br>";

# Count peers +1 
$PeerNum = count($LSList);

# Echo each peer one by one (LSList[$n]) 
for ($n = 1; $n <= $PeerNum-1; $n++) {
	echo "- $LSList[$n] <br>";
}
?>

