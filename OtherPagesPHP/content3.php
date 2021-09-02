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

<script type="text/javascript">

var variable_holding_img_url="/var/www/html/Resources/images/New_logo_G-SUIT_IPD.png";

</script>
 
       
<style type="text/css">

.logo {
   background: #FFF url(<?php echo $variable_holding_img_url; ?>);
}

</style>

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

   <li>
      <a href="entry.php?page=page1">
        <i class="fa fa-tachometer" aria-hidden="true"></i> セクション2
      </a>
    </li>

   <li>
      <a href="entry.php?page=page5">
        <i class="fa fa-tachometer" aria-hidden="true"></i> セクション3
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

<!---------------------------------------------------------------------------------------------->
<!-- To send a peer request -->

<form action="" method="post" target="formresponse" accept-charset='UTF-8'>
<fieldset class="scheduler-border">
<legend class="scheduler-border-2">アイテムの作成</legend>
<div id="outer">
<p class="small">
<label for="Secure-Name-User">アイテム名 :</label>
<input class="input101" type="text" name="Secure-Name-User" value=""><br>
<input type="hidden" name="orderby" value="loki"/>
<div class="inner"><input class="login100-form-btn-2" type="submit" value="送信"></div>
</p>
</div>

<?php
$v19=$_POST['Secure-Name-User'];
?>
</fieldset>

<!-------------------------------------------------------------------------------------------- -->
<!-- To delete a peer  -->

<fieldset class="scheduler-border">
<legend class="scheduler-border-2">アイテムの削除</legend>
<p class="small">
アイテム名: <input class="input101" type="text" name="Delete_Peer_Request" value=""><br>
<input type="hidden" name="order" value="loka"/>
<input class="login100-form-btn-2" type="submit" value="送信">
</p>
<?php
$v18=$_POST['Delete_Peer_Request'];
?>
</fieldset>
<!-------------------------------------------------------------------------------------------- -->

<?php

if ($argv[3]=="loki") {
$Groupname19 = str_replace(' ','',$v19);
$Testargv = str_replace(' ','',$argv[2]);
$Groupname21 = shell_exec("sudo gabriel_cmd account list");
if($Testargv!=="" || $Groupname21!=="")
{
exec("sudo gabriel_cmd peer add --user ". $Testargv . " --acct ". $Groupname21 . "",);
exec("sudo gabriel_cmd group addpeer --group MyGSuit --peer ". $Testargv . "",);
}
}
elseif ($argv[2]=="loki") {
$Groupname18 = str_replace(' ','',$v18);
$Testargv1 = str_replace(' ','',$argv[3]);
if($Testargv1!=="")
{
exec("sudo gabriel_cmd peer del --user ". $Testargv1 . " ",);
exec("sudo gabriel_cmd group delpeer --group MyGSuit --peer ". $Testargv1 . "",);
}
}
?>
</form>
<!-------------------------------------------------------------------------------------------- -->
<!-- To list all peer -->

<form action="" method="post">
<fieldset class="scheduler-border">
<p class="small">
<legend class="scheduler-border-2">アイテムのリスト</legend>
<body><input class="login100-form-btn-2" type="button" value="アイテムのリスト" onclick="location='entry.php?page=page7'" /></body>
</p>
</fieldset>
</form>

<!--</div>-->
      </div>
		</div>

  </body>
</html>
