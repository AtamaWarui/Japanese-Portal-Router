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

	        <!--<div class="footer">
	        
	        </div>-->

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">


<!-------------------------------------------------------------------------------------------- -->
<!-- To display the current IP address-->

<fieldset class="scheduler-border">
<legend class="firstLetter">現在のIPアドレス</legend>
<div id="outer">
<p class="small">
<?php
$cd=exec("ifconfig wlan0 | grep -Eo 'inet (addr:)?([0-9]*\.){3}[0-9]*' | grep -Eo '([0-9]*\.){3}[0-9]*' | grep -v '127.0.0.1'");

echo "現在のIPアドレス: $cd ";


?>
<legend class="scheduler-border"></legend>


</p>
</div>
</fieldset>


<!-------------------------------------------------------------------------------------------- -->
<!-- To fix an IP address manually -->
<!--<form action="" method="post" target="formresponse" accept-charset='UTF-8'>
<fieldset class="scheduler-border">


<legend class="firstLetter">IPアドレスの固定</legend>
<div id="outer">
<p class="small">
<label for="Enter-IP-address">IPアドレス:</label>
<input class="input101" type="text" name="Enter-IP-address" value=""><br>
</p>
<p class="small">
<label for="Enter-IP-address">ゲートウェイ:</label>
<div id="outer">
<p class="small">
  <input class="inputRadio" type='radio' name='radio' value='car'/> デフォルト</br>
  <input class="inputRadio" type='radio' name='radio' value='boat'/> カスタム</br>
  <label for="Enter-User-Gateway">カスタムゲートウェイ:</label>
  <input class="input101" type="text" name="Enter-User-Gateway" value=""><br>
  <input type="hidden" name="order" value="loka"/>
  <input type="hidden" name="order" value="loki"/>
</div>
<div class="inner"><button onclick="function()" class="login100-form-btn-2" type="submit"> 送信</button></div>
</p>
</p>
</div>

<?php
$v30=$_POST['Enter-IP-address'];
$v33=$_POST['Enter-User-Gateway'];
?>
</fieldset>


<?php
if ($argv[4]=="loki") {

$Test3argv = str_replace(' ','',$argv[2]);
$Test5argv = str_replace(' ','',$argv[3]);



if($Test5argv == "car")
{
exec("sudo bash /home/pi/gsuit-scripts/net-config/gsuit-ipconf.sh -o=". $Test3argv . " --gateway-auto",);

}

else {

exec("sudo bash /home/pi/gsuit-scripts/net-config/gsuit-ipconf.sh -o=". $Test3argv . " ",);

}

$message = "ネットワークサービスを再起動すると、IPアドレスは : ". $Test3argv . "";

}

if ($argv[5]=="loki") {
echo $GLOBALS['a'];

$Test3argv = str_replace(' ','',$argv[2]);
$Test5argv = str_replace(' ','',$argv[4]);


//echo $testval;
if ($argv[3] == "boat")
{
exec("sudo bash /home/pi/gsuit-scripts/net-config/gsuit-ipconf.sh -o=". $Test3argv . " --gateway=". $Test5argv . "",);

}

else {

exec("sudo bash /home/pi/gsuit-scripts/net-config/gsuit-ipconf.sh -o=". $Test3argv . " ",);

}

$message = "ネットワークサービスを再起動すると、IPアドレスは : ". $Test3argv . "";

}


?>
<script type='text/javascript'>
   document.body.onclick (function() {
   var MyVariable = <?php echo(json_encode($Test3argv)); ?>;
   alert("ネットワークサービス再起動後のIPアドレス： : "+ $Groupname30 + "");
   JSON_HEX_TAG = "ネットワークサービスを再起動すると";
   var data = <?php echo json_encode("42", JSON_HEX_TAG); ?>;
 };
 
</script>

</form>-->

<!-------------------------------------------------------------------------------------------- -->

<!-- To activate the DHCP only -->
<!--<form action="" method="post">
<fieldset class="scheduler-border">
<p class="small">
<legend class="firstLetter">DHCPの有効化</legend>

<body><input class="login100-form-btn-2" type="button" value="DHCPを使用する" onclick="location='entry.php?page=page8'" /></body>
</p>
</fieldset>
</form> -->


<!-------------------------------------------------------------------------------------------- -->

<!-- To restart networking service  -->
<form action="" method="post">
<fieldset class="scheduler-border">

<legend class="firstLetter">ネットワークサービスを再起動する</legend>
<div id="outer">
<p class="small">
<body><input class="login100-form-btn-2" type="button" value="ネットワークサービスを再起動する" onclick="location='entry.php?page=page9'" /></body>
</p>
</div>
</fieldset>
</form>

<!--</div>-->
      </div>
		</div>

    <!--<script src="jquery.min.js"></script>
    <script src="popper.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="main.js"></script>-->
  </body>
</html>
