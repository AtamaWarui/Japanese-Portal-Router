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
<!-- To list all local services -->

<form action="" method="post">
<fieldset class="scheduler-border">
<p class="small">
<body><input class="login100-form-btn-2" type="button" value="アイテムのリストを表示する" onclick="location='entry.php?page=page6'" /></body>
</p>
</fieldset>
</form>

<!-------------------------------------------------------------------------------------------- --> 
<!-- To remove a local service -->
<form action="" method="post" accept-charset='UTF-8'>
<fieldset class="scheduler-border">
<legend class="scheduler-border-2">アイテムを削除する</legend>
<div id="outer">
<p class="small">
<label for="Delete-Service">アイテム名: </label>
<input class="input101" type="text" name="Delete-Service" value=""><br>
<input type="hidden" name="orderby" value="loki"/>
<input class="login100-form-btn-2" type="submit" value="送信">
</p>
</div>
<?php
$v8=$_POST['Delete-Service'];
$_SESSION['varname'] = $v8;
$v8elip = $_SESSION['varname'];
echo "$v8elip"

?>
</fieldset>

</form>

<!-------------------------------------------------------------------------------------------- -->

<!-- To add a new local service -->

<!--<label>-->
<form action="" method="post" accept-charset='UTF-8'>
<fieldset class="scheduler-border">
<legend class="scheduler-border-2">アイテムを追加</legend>
<div id="outer">
<p class="small">
<!--<input class="input101" type="text" name="Name-Service" value=""><br>-->
<label for="Name-Service">アイテム名:</label>
<input class="input101" type="text" name="Name-Service" value=""><br>
<label for="Address-Dest-Device">アイテム情報1:</label>
<input class="input101" type="text" name="Address-Dest-Device" value=""><br>
<label for="Port-Dest-Device">アイテム情報2:</label>
<input class="input101" type="text" name="Port-Dest-Device" value=""><br>
<label for="Port-Local-Device">アイテム情報3:</label>
<input class="input101" type="text" name="Port-Local-Device" value=""><br>
<input type="hidden" name="order" value="loka"/>
<input class="login100-form-btn-2" type="submit" value="送信">
</p>
</div>
<?php
$v9=$_POST['Name-Service'];
$v10=$_POST['Address-Dest-Device'];
$v11=$_POST['Port-Dest-Device'];
$v12=$_POST['Port-Local-Device'];
?>

</fieldset>

<!--</label>-->

<?php

if ($argv[3]=="loki") {
$Groupname8 = str_replace(' ','',$v8);
$Testargv = str_replace(' ','',$argv[2]);
exec("sudo gabriel_cmd localservice del --name ". $Testargv . " ",);
 }
elseif ($argv[6]=="loka") {
$Groupname9 = str_replace(' ','',$v9);
$Testargv1 = str_replace(' ','',$argv[2]);
$Groupname10 = str_replace(' ','',$v10);
$Testargv2 = str_replace(' ','',$argv[3]);
$Groupname11 = str_replace(' ','',$v11);
$Testargv3 = str_replace(' ','',$argv[4]);
$Groupname12 = str_replace(' ','',$v12);
$Testargv4 = str_replace(' ','',$argv[5]);

$inpa1 = file_get_contents("/var/www/html/OtherPagesPHP/Gateway_json_text_file.json");
$testa1 = json_decode($inpa1);

exec("sudo gabriel_cmd localservice add --name ". $Testargv1 . " --dest_address ". $Testargv2 ." --dest_port ". $Testargv3 ." --dest_udp_port ".  $Testargv3  ." --allow_non_vpn  --mapped_port ". $Testargv4 ." --mapped_udp_port ". $Testargv4  ." ",);
exec("sudo gabriel_cmd localservice addgroup --name ". $Testargv1 . " --group MyGSuit");

$inp = file_get_contents("/home/pi/TestGatewayList.json");
$test = json_decode($inp);

 }

?>

</form>



      </div>
		</div>

  </body>
</html>
