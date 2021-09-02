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
                                    <p class="small">
                                    <h1><a href="entry.php?page=page3"><img src="Example.png" alt="IP-Dream" width="100%" height="100%" align="center"  display="flex" color= "#200000"></a></h1>
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
        <i class="fa fa-book" aria-hidden="true"></i> ドキュメンテーション
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
              </p>
	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

<!-------------------------------------------------------------------------------------------- -->
<fieldset class="scheduler-border">
<legend class="scheduler-border-2">アイテムリスト</legend>
<div id="outer">
<p class="small">


<?php

# Displays the list of Local services and their access groups

# Call gabriel_cmd to get the list of localservices

//$command = shell_exec("sudo gabriel_cmd localservice get");
//$LSList = preg_split('/[\n]/',$command);
//$GWNum = count($LSList)-1;

# Display all the localservices availables and their access group

//echo "There are $GWNum local gateways detected in this device:<br><br>";
//for ($n = 0; $n <= $GWNum-1; $n++) {
//	echo "$LSList[$n] <br>";
//	$LSTemp = preg_split('/[\t]/',$LSList[$n]);
//	$LSName = $LSTemp[0];

//	$AccGroup = shell_exec("sudo gabriel_cmd localservice getgroups --name=$LSName 2>&1");
//	echo "$AccGroup<br>";
//	if (!empty($AccGroup)) {
//		echo "<br>";
//	}
//}

// Creating the json file first !

exec("sudo touch /var/www/html/OtherPagesPHP/List_LocalServices.json");
exec("sudo chown -R pi:pi /var/www/html/OtherPagesPHP/List_LocalServices.json");
exec("sudo chmod 777 /var/www/html/OtherPagesPHP/List_LocalServices.json");
exec("sudo gabriel_cmd localservice get --json > /var/www/html/OtherPagesPHP/List_LocalServices.json");

$inp = file_get_contents("/var/www/html/OtherPagesPHP/List_LocalServices.json");
$test = json_decode($inp);

//echo $test->localServices[1]->serviceName;
//echo "target test : ".$test->localServices[0]->targetIp."<br>";
//echo count($test->localServices);
//echo count($test->localServices[0]->allowedGroups);

for ($x = 0; $x < count($test->localServices); $x++) {

echo "- アイテム名: ". $test->localServices[$x]->serviceName . "  , アイテム情報3: ". $test->localServices[$x]->mappedTcpPort  . "  , アイテム情報2: ".$test->localServices[$x]->targetTcpPort  . "  , アイテム情報1: ".$test->localServices[$x]->targetIp  . ", ";


echo "<br>";

}

exec("sudo rm /var/www/html/OtherPagesPHP/List_LocalServices.json");

?>

</p>
</div>

</fieldset>
      </div>
		</div>

  </body>
</html>


