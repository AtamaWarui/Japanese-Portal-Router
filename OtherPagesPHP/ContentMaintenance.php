
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

                                     <h1><a href="entry.php?page=page3"><img src="New_logo_G-SUIT_IPD.png" alt="IP-Dream" width="100%" height="100%" align="center"  display="flex" color= "#200000"></a></h1>
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
        <i class="fa fa-tachometer" aria-hidden="true"></i> ゲートウェイ設定
      </a>
	          </li>

   <li>
      <a href="entry.php?page=page1">
        <i class="fa fa-tachometer" aria-hidden="true"></i> ピアリング設定
      </a>
    </li>

   <li>
      <a href="entry.php?page=page5">
        <i class="fa fa-tachometer" aria-hidden="true"></i> IPアドレス設定
      </a>
    </li>

  <li>
      <a href="entry.php?page=page4">
        <i class="fa fa-tachometer" aria-hidden="true"></i> ヘルプ
      </a>
    </li>


<li>
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
        <i class="fa fa-clone" aria-hidden="true"></i> ドキュメンテーション
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-info-circle" aria-hidden="true"></i> About Us
      </a>
    </li>
	        </ul>

	        <!--<div class="footer">
	        
	        </div>-->

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

<!---------------------------------------------------------------------------------------------->
<fieldset class="scheduler-border">
<!--<button class="open-button" onclick="openForm()">新しいパスワード</button>-->
<div id="myForm">
 <form action="" class="form-container" method="post" target="_self" accept-charset='UTF-8'>



    <label for="email"><b>ユーザー名</b></label>
    <input class="input101" type="text" placeholder="ユーザー名を入力してください..." name="user" required>
   
    
    <label for="Currentpwd"><b>現在のパスワード</b></label>
    <input class="input101" type="password" placeholder="現在のパスワードを入力してください..." name="Currentpwd" required>


    <label for="email"><b>新しいパスワード</b></label>
    <input class="input101" type="password" placeholder="新しいパスワードを入力してください..." name="email" required>


    <label for="psw"><b>新しいパスワード（再入力)</b></label>
    <input class="input101" type="password" placeholder="新しいパスワードの確認..." name="psw" required>


    <button type="submit" class="btn cancel">送信する</button>
    <!--<button type="button" class="btn cancel" onclick="closeForm()">閉じる</button>-->



<?php

// Hashing the password and comparing it with the value we enter !!
$NewPassword=$_POST['email'];
$NewPassArgv = str_replace(' ','',$argv[4]);
//$HashedNewPass_Init = hash('md5', "$password");
/////////////////////////////////////////////////
$User=$_POST['user'];
$UserArgv = str_replace(' ','',$argv[2]);
$CurrentPassword=$_POST['Currentpwd'];
$CurrentPassArgv = str_replace(' ','',$argv[3]);
$ConfNewPassword=$_POST['psw'];
$ConfNewPassArgv = str_replace(' ','',$argv[5]); 
//$HashedConfnewPass_Init = hash('md5', "$id");
$NewPassword = str_replace(' ','',$NewPassword);
$User = str_replace(' ','',$User);
$ConfNewPassword = str_replace(' ','',$ConfNewPassword);
$CurrentPassword = str_replace(' ','',$CurrentPassword);
//echo "$id";
$Hashed_GlobalValBis = 0;
if($CurrentPassArgv!=="" || $UserArgv!=="")
{    
$ValuePlusBis="-123-";
$GlobalValBis=$UserArgv . $ValuePlusBis . $CurrentPassArgv;
//echo "$GlobalValBis";
$Hashed_GlobalValBis = hash('md5', "$GlobalValBis");
exec("sudo touch /var/www/html/Auth/testexample.dat");
exec("sudo chmod +x /var/www/html/Auth/testexample.dat");
exec("sudo chmod 777 /var/www/html/Auth/testexample.dat");
exec("echo ". $GlobalValBis ."  > /var/www/html/Auth/testexample.dat");
$commando = shell_exec("sudo sed -n '1p' /var/www/html/Auth/HashedGlobalVal.dat");
$commando = preg_replace('~[[:cntrl:]]~', '', $commando);
if((string)$Hashed_GlobalValBis == (string)$commando)
{
if($ConfNewPassArgv!=="" || $NewPassArgv!=="" || $UserArgv!=="")
{
if((string)$NewPassArgv == (string)$ConfNewPassArgv)
{
//echo $_GET['userid'];
$ValuePlusBis="-123-";
$GlobalValBis=$UserArgv . $ValuePlusBis . $NewPassArgv;
$Hashed_GlobalValBis = hash('md5', "$GlobalValBis");
//echo "$NewPassword";
//echo "$GlobalValBis";
exec("echo ". $Hashed_GlobalValBis ."  > /var/www/html/Auth/HashedGlobalVal.dat");

}
}
}
}

?>
</fieldset>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>



<!--</div>-->
      </div>
		</div>

    <!--<script src="jquery.min.js"></script>
    <script src="popper.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="main.js"></script>-->
  </body>
</html>

