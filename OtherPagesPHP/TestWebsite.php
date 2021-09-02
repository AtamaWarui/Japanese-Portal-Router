
<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!--<link rel="stylesheet" href="style.css">-->



        <?php
        $Style1 = file_get_contents("/var/www/html/Resources/CSSFiles/website_style.css");
        echo "$Style1";
        ?>



  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<!--<a href="#" class="img logo rounded-0" style="background-image: url(New_logo_G-SUIT_IPD.png);"></a>-->

                                    <h1><a href="entry.php?page=page3"><img src="Example.png" alt="IP-Dream" width="100%" height="100%"   display="flex" color= "#200000"></a></h1>
	        <ul class="sidebar-navigation">
	          <!--<li class="active">-->
                    <li class="header">メインメニュー</li>
                    <li>
	            <!--<a href="#homeSubmenu"  aria-expanded="false" class="dropdown-toggle">ホーム</a>-->
                    <a href="entry.php?page=page3">
                    <i class="fa fa-home" aria-hidden="true"></i> ホーム
                    </a>
	            <!--<ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="#">Home 1</a>
                </li>
                <li>
                    <a href="#">Home 2</a>
                </li>
                <li>
                    <a href="#">Home 3</a>
                </li>
	            </ul>-->
	          <!--</li>-->
                  </li>

	          <li>
	              <!--<a href="#">About</a>-->
                   <a href="entry.php?page=page2">
        <i class="fa fa-tachometer" aria-hidden="true"></i> セクション1
      </a>
	          </li>

   <!--<li>
      <a href="entry.php?page=page1">
        <i class="fa fa-tachometer" aria-hidden="true"></i> セクション2
      </a>
    </li>-->

   <li>	
      <a href="entry.php?page=page5">
        <i class="fa fa-tachometer" aria-hidden="true"></i> セクション2
      </a>
    </li>

  <li>
      <a href="entry.php?page=page4">
        <i class="fa fa-tachometer" aria-hidden="true"></i> ヘルプ
      </a>
    </li>


<!--<li>
      <a href="entry.php?page=page14">
        <i class="fa fa-tachometer" aria-hidden="true"></i> メンテナンス
      </a>
    </li>



    <li class="header">参考</li>
    <li>
      <a href="#">
        <i class="fa fa-users" aria-hidden="true"></i> FAQ
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-book" aria-hidden="true"></i> マニュアル 

      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-info-circle" aria-hidden="true"></i> About Us
      </a>
    </li>-->
	        </ul>

	        <!--<div class="footer">
	        
	        </div>-->

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">


<fieldset class="scheduler-border">
<legend class="firstLetter">Portal structure</legend>
<p>
<?php

// Creating a json file, adding permissions !!!
exec("sudo touch /var/www/html/Auth/Test_JSON_File.json");
exec("sudo chown -R pi:pi /var/www/html/Auth/Test_JSON_File.json");
exec("sudo chmod 777 /var/www/html/Auth/Test_JSON_File.json");
exec("sudo gabriel_cmd account showdevices --json > /var/www/html/Auth/Test_JSON_File.json");

// Need test !!!
$command01 = shell_exec("sudo sed -ie '1s/^.//' /var/www/html/Auth/Test_JSON_File.json");
$command02 = shell_exec("sudo sed -ie '$ s/.$//' /var/www/html/Auth/Test_JSON_File.json");
$command03 = shell_exec("sudo sed -ie '$ s/.$//' /var/www/html/Auth/Test_JSON_File.json");

// Getting the content of the "Test_JSON_File.json" file !!!
$str = file_get_contents("/var/www/html/Auth/Test_JSON_File.json");
$json = json_decode($str, true);
echo '<pre>' . print_r($json, true) . '</pre>';
$A1 = $json['localDevice']['services'][0]['id'];
$A2 = $json['localDevice']['lastConnect'];


//$Test = $json['localDevice']['name'];
//echo $Test;
//echo $A2;


// Extracting the informations of Gabriel service !!!
$command1 = shell_exec("sudo gabriel_cmd account list");
$command2 = shell_exec("sudo gabriel_cmd account showdevices | head -n 2 | tail -n 2 | awk '{print $0}'");
$command3 = shell_exec("sudo gabriel_cmd account showdevices | head -n 1 | tail -n 1 | awk '{print $5}' >> /var/www/html/Auth/JsonTestFile.txt");
$command4 = shell_exec("sudo gabriel_cmd account showdevices | head -n 1 | tail -n 1 | awk '{print $6}'");


$fh = fopen('/var/www/html/Auth/JsonTestFile.txt','r');
while($line = fgets($fh)){
$outp = $line;
}


exec("sudo touch /var/www/html/Auth/TestShowDevices.json");
exec("sudo chown -R pi:pi /var/www/html/Auth/TestShowDevices.json");
exec("sudo chmod 777 /var/www/html/Auth/TestShowDevices.json");
exec("sudo gabriel_cmd account showdevices --json > /var/www/html/Auth/TestShowDevices.json");

$inp = file_get_contents("/var/www/html/Auth/TestShowDevices.json");
$test = json_decode($inp);
$inpa1 = file_get_contents("/var/www/html/Auth/Gateway_json_text_file.json");
$testa1 = json_decode($inpa1);

//echo $test->accounts[0]->localDevice->presence;

/*
if($test->accounts[0]->localDevice->presence=="ACTIVE"){
print "G SUITのSDN : ".$command1."<br>";
//echo "Test: ".$test->accounts[0]->name."!";
}
else
{
echo "デバイスは非アクティブです!";
}

//echo $outp;
if($test->accounts[0]->localDevice->presence=="ACTIVE"){

print "ステータス：オンライン ".$command3." <br>";

}else{

print "ステータス: オフライン ".$command3." <br>";

}


// Extracting data information from the json file related to the existing devices !
$inpa2 = file_get_contents("/var/www/html/Auth/TestShowDevices.json");
$testa2 = json_decode($inpa2);
//if($test->accounts[0]->localDevice->presence=="ACTIVE"){
if(isset($test->accounts[0]->devices[1]->name)){
echo "他のデバイス <br>";
}

if (isset($test->accounts[0]->devices[0]->name)){
echo "デバイスのSDN: ".$test->accounts[0]->devices[0]->name.".".$test->accounts[0]->name.",";
if($test->accounts[0]->localDevice->presence=="ACTIVE"){
echo "ステータス：オンライン ,";
}
else
{
echo "ステータス：オフライン ,";
}

if($test->accounts[0]->localDevice->vpnFlg){
echo "VPNステータス：オン <br>";
}
else
{
echo "VPNステータス：オフ <br>";
}
}
if (isset($test->accounts[0]->devices[1]->name)){
echo "デバイスのSDN: ".$test->accounts[0]->devices[1]->name.".".$test->accounts[0]->name.",";

if($test->accounts[0]->localDevice->presence=="ACTIVE"){
echo "ステータス：オンライン ,";
}
else
{
echo "ステータス：オフライン ,";
}

if($test->accounts[0]->localDevice->vpnFlg){
echo "VPNステータス：オン <br>";
}
else
{
echo "VPNステータス：オフ <br>";
}

}
if (isset($test->accounts[0]->devices[2]->name)){
echo "3番目のデバイス: ".$test->accounts[0]->devices[2]->name.".".$test->accounts[0]->name.",";

if($test->accounts[0]->localDevice->presence=="ACTIVE"){
echo "デバイスのステータス：オンライン ,";
}
else
{
echo "デバイスのステータス：オフライン ,";
}

if($test->accounts[0]->localDevice->vpnFlg){
echo "VPNステータス：オン <br>";
}
else
{
echo "VPNステータス：オフ <br>";
}

}
if (isset($test->accounts[0]->devices[3]->name)){
echo "4番目のデバイス: ".$test->accounts[0]->devices[3]->name.".".$test->accounts[0]->name.",";


if($test->accounts[0]->localDevice->presence=="ACTIVE"){
echo "ステータス：オンライン ,";
}
else
{
echo "ステータス：オフライン ,";
}

if($test->accounts[0]->localDevice->vpnFlg){
echo "VPNステータス：オン <br>";
}
else
{
echo "VPNステータス：オフ <br>";
}

}

echo "ポータルバージョン : 1.7 <p>";
*/

echo "1- Modifying the default Apache *DocumentRoot* directory in Debian OS to one of the main directories. <br> ";
echo "2- Creating a session id at the authentication that we store it in a cookie which expires after a certain time almost ~ 30 minutes, after a successful authentication we stored it again in a text file and we use it afterward for verification to aceess the other php pages.<br> ";
echo "3- ID and password stored in the hash format to secure more the credentials. <br> ";
echo "4- Using different functions such as implode function to pass the arguments between the php files. <br>";

/*$text = "My Title";
$newText = preg_replace('/(\w)(\w+\b)/', '<span class="firstLetter">$1</span>$2', $text);

echo $newText;  // <span class="firstLetter">M</span>y <span class="firstLetter">T</span>itl
*/





$pass=$_SESSION['passwd'];
$Iid=$_SESSION['Id'];


// receiving data from the other page

$password_1=$_POST['pswrd'];
$id_1=$_POST['userid'];
$Origpass="g-suit-pro";
$hashed_password_Orig = password_hash($Origpass, PASSWORD_DEFAULT);


$Origid="ip-dream";
$hashed_id_Orig = password_hash($Origid, PASSWORD_DEFAULT);


if(password_verify($password_1, $hashed_password_Orig) && password_verify($id_1, $hashed_id_Orig)) {


echo '<script type="text/javascript">',
     'pageRedirect();',
     '</script>'
;
}

else
{
   echo '<script type="text/javascript">',
     'pageRedirect1();',
     '</script>'
;
}


fclose($fh);

?>

</p>
<!--</div>-->
</fieldset>
      </div>
		</div>

    <!--<script src="jquery.min.js"></script>
    <script src="popper.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="main.js"></script>-->
  </body>
</html>
