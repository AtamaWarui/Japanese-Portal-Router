
<?php
session_start();
$e = session_id();
?>

<!DOCTYPE html>
<html>
<head>
	<title>ポータルの例</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/var/www/html/Resources/CSSFiles/util.css">
	<link rel="stylesheet" type="text/css" href="/var/www/html/Resources/CSSFiles/main.css">
<!--===============================================================================================-->
      <title>Secured Box</title>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <?php
        $Style = file_get_contents("/var/www/html/Resources/CSSFiles/main.css");
        echo "$Style";
        ?>

      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">

  var today = new Date();
  var expiry = new Date(today.getTime() + (30 * 60 * 1000)); // plus 30 minutes
  function setCookie(name, value)
  {
    document.cookie=name + "=" + escape(value) + "; path=/; expires=" + expiry.toGMTString();
  }

   var value = "<?php echo"$e"?>";
   setCookie("field1", value);

   function getCookie(name)
   {
    var re = new RegExp(name + "=([^;]+)");
    var value = re.exec(document.cookie);
    return (value != null) ? unescape(value[1]) : null;
    }


   function pageRedirect() {
        //var x = "<?php echo"$a"?>";
        //window.location.replace("entry.php?page=page3");
        //window.location.href="entry.php?page=page3";
        //window.location.assign("entry.php?page=page3");
        //window.location = "entry.php?page=page3";
        //self.location = "entry.php?page=page3";
        //top.location = "entry.php?page=page3";
        location.href="entry.php?page=page3";
         }

</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

				<div class="login100-pic js-tilt" data-tilt>
					<img src="Example.png" alt="IMG" width="100%" height="100%" >
				</div>
				<form class="login100-form validate-form">
					<span class="login100-form-title">
						ポータルの例
					</span>

                                 <p><div style="line-hehight:50px;"> <font size="+5" color="black"></p></font></div>
                                    <!--<form name="login" action="" method="post" target="formresponse" accept-charset='UTF-8'>-->
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                        <!--</form>-->
                                 </form>

<p><div style="line-hehight:50px;"> <font size="+5" color="black"></p></font></div>
        <form name="login" method="post" target="_self" accept-charset='UTF-8'>
         <div class="container">
            <label for="uname"><font size="+2" color="black"><b>ユーザー名</b></label><input class="input100" type="text" placeholder="ユーザー名を入力してください..." name="userid"/>
            <label for="psw"><b>パスワード</b></label><input class="input100" type="password" placeholder="パスワードを入力してください..." name="pswrd" value=""/>
            <div class="container-login100-form-btn">
            <input class="login100-form-btn" type="submit" value="ログイン"/>
            <input class="login100-form-btn" type="reset" value="キャンセル"/>
            </div>
<?php

// Hashing the password and comparing it with the value we enter !!
$Hashed_GlobalVal = 0;
$password=$_POST['pswrd'];
/////////////////////////////////////////////////
$id=$_POST['userid'];
$GLOBALS['a'] = $id;


//Concatenation Of ID and password using the following format "ID-123-password"
$ValuePlus="-123-";
$GlobalVal=$id . $ValuePlus . $password;
$Hashed_GlobalVal = hash('md5', "$GlobalVal");

//Adding the function for setting up condition specific password in php --- Test

///$regex = "#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#";
    //echo "check !";
   // if (preg_match($regex, $password)) {
     //   return TRUE;
       // echo "good next page!";
    //}
    //else {
      //  return FALSE;
        //echo "please re-entre the password!";
    //}

// Extracting the stored hashed value
$command = shell_exec("sudo sed -n '1p' /var/www/html/Auth/HashedGlobalVal.dat");
$command = preg_replace('~[[:cntrl:]]~', '', $command);

if((string)$Hashed_GlobalVal == (string)$command)
{
exec("sudo touch /var/www/html/Auth/SessionID.dat");
exec("sudo chmod 777 /var/www/html/Auth/SessionID.dat");
exec("sudo echo ". $e ."  > /var/www/html/Auth/SessionID.dat");

/*
 // Redirection to Home page !
echo '<script type="text/javascript">',
     'pageRedirect();',
     '</script>'
;*/

      /*echo '<script type="text/javascript">',
      'location.href = "entry.php?page=page3";',
      //' header(“Location: entry.php?page=page3”);' ,
      '</script>'
;*/

echo '<script>',
     'location.href = "entry.php?page=page3";',
     '</script>'
;



}

?>
                                                </div>

                                         </form>
                        </div>

<!--<button class="open-button" onclick="openForm()">新しいパスワード</button>

<div class="form-popup" id="myForm">
 <form action="" class="form-container" method="post" target="formresponse" accept-charset='UTF-8'>



    <label for="email"><b>ユーザー名</b></label>
    <input class="input100" type="text" placeholder="ユーザー名を入力してください" name="user" required>


    <label for="email"><b>新しいパスワード</b></label>
    <input class="input100" type="password" placeholder="新しいパスワードを入力してください" name="email" required>

    <label for="psw"><b>新しいパスワードを確認</b></label>
    <input class="input100" type="password" placeholder="新しいパスワードを確認" name="psw" required>

    <button type="submit" class="btn">送信する</button>
    <button type="button" class="btn cancel" onclick="closeForm()">閉じる</button>




<?php

// Hashing the password and comparing it with the value we enter !!

$NewPassword=$_POST['email'];
//$HashedNewPass_Init = hash('md5', "$password");
/////////////////////////////////////////////////
$User=$_POST['user'];
$ConfNewPassword=$_POST['psw'];
//$HashedConfnewPass_Init = hash('md5', "$id");
$NewPassword = str_replace(' ','',$NewPassword);
$User = str_replace(' ','',$User);
$ConfNewPassword = str_replace(' ','',$ConfNewPassword);
//echo "$id";
if($ConfNewPassword!=="" || $NewPassword!=="" || $User!=="")
{
if((string)$NewPassword == (string)$ConfNewPassword)
{
//echo $_GET['userid'];
$ValuePlusBis="-123-";
$GlobalValBis=$User . $ValuePlus . $NewPassword;
$Hashed_GlobalValBis = hash('md5', "$GlobalValBis");
//echo "$NewPassword";
//echo "$GlobalValBis";
exec("echo ". $Hashed_GlobalValBis ."  > /var/www/html/Auth/HashedGlobalVal.dat");

}
}


?>
  </form>
</div>-->

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>


		</div>
	</div>



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

</body>
</html>
