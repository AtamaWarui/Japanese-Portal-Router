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
        <i class="fa fa-tachometer" aria-hidden="true"></i> ピアリング設定
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

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">



<!-- To restart squid and gabriel -->

              <!--<form action="" method="post">
              <fieldset class="scheduler-border">
              <p class="small">
              <body><input class="login100-form-btn-2" type="button" value="プロキシサーバの再起動" onclick="location='entry.php?page=page10'" /></body>
               </fieldset>
              <fieldset class="scheduler-border">
              <body><input class="login100-form-btn-2" type="button" value="VPNの再起動" onclick="location='entry.php?page=page11'" /></body>
              </p>
              </fieldset>
              </form>-->

<form action="" method="post" accept-charset='UTF-8'>

<fieldset class="scheduler-border">

<legend class="firstLetter">接続テスト</legend>
<div id="outer">
<p class="small">
ターゲットIP: <input class="input101" type="text" name="Checking-Traceroute" value="" ><br>
<input type="hidden" name="orderby" value="loki"/>
<input class="login100-form-btn-2" type="submit" value="送信">
<!--<input type value="Checking-Testing1">-->
</p>
</div>
</fieldset>



<!-- To ping a user name -->

<!--<fieldset class="scheduler-border">
<p class="small">
<legend class="firstLetter">VPN接続状況</legend>
ターゲットIP : <input class="input101" type="text" name="SDN" value=""><br>
<input type="hidden" name="order" value="loka"/>
<input class="login100-form-btn-2" type="submit" value="送信">
<?php

$arr = array ('first' => 'a');
$key = array_search ('a', $arr);
$pair = explode(" ",$_REQUEST['first']);
$v21=$_POST['SDN'];


$password=$_POST['SDN'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);


$Origpass="lo";
$hashed_password_Orig = password_hash($Origpass, PASSWORD_DEFAULT);


if(password_verify($password, $hashed_password_Orig)) {

echo "ok!";

}

?>
</p>
</fieldset>-->

<fieldset class="scheduler-border">

<legend class="firstLetter">結果</legend>
<div id="outer">
<p class="small">

<?php

if ($argv[3]=="loki") {

$Groupname24 = str_replace(' ','',$v24);
$Testargv = str_replace(' ','',$argv[2]);

if($Testargv!=="")
{
$command = exec("ping -c 1 " . $Testargv . " ",$pingNetwork);
print_r($pingNetwork[0]);
print "<br>";
print_r($pingNetwork[1]);
print "<br>";
print_r($pingNetwork[2]);
print "<br>";
print_r($pingNetwork[3]);
print "<br>";
print_r($pingNetwork[4]);
print "<br>";
print_r($pingNetwork[5]);
}
    }

elseif ($argv[4]=="loka") {
$ip_address21 = str_replace(' ','',$argv[3]);
if($ip_address21!=="")
{
exec("ping -c 1 " . $ip_address21 . " | head -n 2 | tail -n 1 | awk '{print $0}'", $ping_time2);
exec("ping -c 1 " . $ip_address21 . " | head -n 2 | tail -n 1 | awk '{print $6}'", $ping_time3); 

if($ping_time3[0]=="ttl=64"){

    echo "VPN接続が確立されました !";


} else{

    echo "VPN接続が確立されていません !";
}

}
    }
?>
</p>
</div>
</fieldset>

</form>

<!-- To remote assistance gateways -->
              <!--<fieldset class="scheduler-border">
              <form action="" method="post">
              <p class="small">
              <input class="login100-form-btn-2" type="button" value="リモートサポートを有効にする" onclick="location='entry.php?page=page12'" />-->
<!-- To remove a remote assistance gateways -->
              <!--</fieldset>
              <fieldset class="scheduler-border">
              <form action="" method="post">
              <input class="login100-form-btn-2" type="button" value="リモートサポートを無効にする" onclick="location='entry.php?page=page13'" />
              </p>
              </fieldset>-->
<!--</div>-->
      </div>
		</div>

    <!--<script src="jquery.min.js"></script>
    <script src="popper.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="main.js"></script>-->
  </body>
</html>



