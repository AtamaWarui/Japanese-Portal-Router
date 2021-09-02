<?php

###############################################################################

# shell_exec("sudo gabriel_cmd account showdevices --json > Test_JSON_File.json");

// get the content of the JSON file 
/*
$str = file_get_contents('/var/www/html/Test_JSON_File_Orig_1.json');
$json = json_decode($str, true);
echo '<pre>' . print_r($json, true) . '</pre>'; 
*/

/* $A1 = $json['localDevice']['services'][0]['id'];
$A2 = $json['localDevice']['lastConnect'];
print "name : ".$A2."<br>"; */

/*$temperatureMin = $json['daily']['data'][0]['temperatureMin'];
$temperatureMax = $json['daily']['data'][0]['temperatureMax'];*/

//print "Minimal temperature: ".$temperatureMin."<br>";

#################################################Test for the following JSON file : "Test_JSON_File_Orig.json"



$data[] = $_POST['data'];

$inp = file_get_contents('/var/www/html/VPN_json_text_file.json');
$tempArray = json_decode($inp,true);
//echo '<pre>' . print_r($tempArray[0], true) . '</pre>';
echo "".$tempArray[0]["name"]."<br>";
$temptest[0] = $tempArray['name'][0];
//print $temptest[0];

/*
array_push($tempArray, $data);
$jsonData = json_encode($tempArray);
file_put_contents('/var/www/html/Test_JSON_File_Orig.json', $jsonData);
*/
//print $jsonData[0];


#################################################Test for the following JSON file : "Test_JSON_File_Orig_1.json"

//$data[] = $_POST['data'];
exec("sudo touch Test_JSON_File.json");
exec("sudo chown -R pi:pi Test_JSON_File.json");
exec("sudo chmod 777 Test_JSON_File.json");
exec("sudo gabriel_cmd account showdevices --json > Test_JSON_File.json");
$command01 = shell_exec("sudo sed -ie '1s/^.//' /var/www/html/Test_JSON_File.json");
$command02 = shell_exec("sudo sed -ie '$ s/.$//' /var/www/html/Test_JSON_File.json");
$command03 = shell_exec("sudo sed -ie '$ s/.$//' /var/www/html/Test_JSON_File.json");
$inp = file_get_contents("/var/www/html/Test_JSON_File.json");
/*$tempArray = json_decode($inp['item'],true);
$json_string = json_encode($inp['data'], JSON_PRETTY_PRINT);

var_dump(json_decode($inp));
echo $json_string[0];
echo '<pre>' . print_r($json_string, true) . '</pre>';
*/
# echo $inp;
$test = json_decode($inp);
echo $test->localDevice->lastConnect;
echo $test->localDevice->vpnFlg;
if($test->localDevice->vpnFlg){
echo "VPN is on";
}
else
{
echo "VPN is off";
}
//echo '<pre>' . print_r($tempArray, true) . '</pre>';
//echo strtolower($tempArray['daily'][0]);
//echo $tempArray['daily']['data'][0];

//print $temptest[0];


/*
exec("sudo touch testZTesto.txt");
exec("sudo chown -R pi:pi testZTesto.txt");
exec("sudo chmod 777 testZTesto.txt");
exec("sudo gabriel_cmd account showdevices --json > testZTesto.txt");
*/
###############################################################################

$fh = fopen('/home/pi/Test_JSON_File.json','r');
while($line = fgets($fh)){

//print "G-SUIT status test".$line."<br>";
//echo($line);
//$outp = $line;
}
fclose($fh);


##############################################################

$fho = fopen('/var/www/html/Test_JSON_File.json','w');

?>

