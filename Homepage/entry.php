
<!DOCTYPE html>	<html lang="en">

<head>
<title>ポータルの例</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


     <!-- Latest compiled JavaScript -->
      <script src="caroufredsel.js" type="text/javascript">
      function createRequestObject() {
          var obj;
          var browser = navigator.appName;
          if (browser == "Microsoft Internet Explorer") {
              obj = new ActiveXObject("Microsoft.XMLHTTP");
          } else {
              obj = new XMLHttpRequest();
          }
          return obj;
      }

      function sendReq(req) {   
          var http = createRequestObject();
          http.open('get', req);
          http.onreadystatechange = handleResponse;
          http.send(null);
      }

      function handleResponse() {    
          if (http.readyState == 4) {
              var response = http.responseText;
              document.getElementById('setADivWithAnIDWhereYouWantIt').innerHTML=response;
          }
      }

      sendReq('http://testpi3/Secondpage.php');

</script>


<?php

$a=htmlspecialchars($_COOKIE["field1"]);
?>


	<?php
	$Style = file_get_contents("/var/www/html/Resources/CSSFiles/website_style.css");
	echo "$Style";
	?>



<?php

$Testvar = file_get_contents("/var/www/html/Auth/SessionID.dat");

?>

</head>

<body>
<?php
// remove any non digit characters
            //$a = preg_replace('/[^0-9]/i','', $a);
           //$Testvar = preg_replace('/[^0-9]/i','', $Testvar);
            $Testvar = preg_replace('~[[:cntrl:]]~', '', $Testvar);

if(strcmp($a, $Testvar) ==  0)
{
if ($_GET["page"] == "page1"){

        $args=implode(" ",$_REQUEST);
        $page1=shell_exec("php /var/www/html/OtherPagesPHP/content3.php $args");
	echo "$page1";
}
else if ($_GET["page"] == "page2"){

        $args=implode(" ",$_REQUEST);
        $page1=shell_exec("php /var/www/html/OtherPagesPHP/content2.php $args");
        echo "$page1";
}
else if ($_GET["page"] == "page3"){

        $args=implode(" ",$_REQUEST);
        $page1=shell_exec("php /var/www/html/OtherPagesPHP/TestWebsite.php $args");
        echo "$page1"; 
}

else if ($_REQUEST["page"] == "page4"){
        $args=implode(" ",$_REQUEST);
        $page1=shell_exec("php /var/www/html/OtherPagesPHP/contentTest.php $args");
        echo "$page1";
}

else if ($_GET["page"] == "page5"){
        $args=implode(" ",$_REQUEST);
        //echo "$args";
        $page1=shell_exec("php /var/www/html/OtherPagesPHP/content5.php $args");
        echo "$page1";
}

else if ($_GET["page"] == "page6"){
        $page1=shell_exec("php /var/www/html/OtherPagesPHP/LocalServices2.php");
        echo "$page1";
}

else if ($_GET["page"] == "page7"){
        $page1=shell_exec("php /var/www/html/OtherPagesPHP/PeerList2.php");
        echo "$page1";
}

else if ($_GET["page"] == "page8"){
        $page1=shell_exec("php /var/www/html/OtherPagesPHP/DHCPActivation.php");
        echo "$page1";
}

else if ($_GET["page"] == "page9"){

        $page1=shell_exec("php /var/www/html/OtherPagesPHP/network.php");
        echo "$page1";
}

else if ($_GET["page"] == "page10"){

        $page1=shell_exec("php /var/www/html/OtherPagesPHP/squid.php");
        echo "$page1";
}

else if ($_GET["page"] == "page11"){

        $page1=shell_exec("php /var/www/html/OtherPagesPHP/gabriel.php");
        echo "$page1";
}

else if ($_GET["page"] == "page12"){

        $page1=shell_exec("php /var/www/html/OtherPagesPHP/GatewayGrantAccess.php");
        echo "$page1";
}

else if ($_GET["page"] == "page13"){

        $page1=shell_exec("php /var/www/html/OtherPagesPHP/RemoveGatewayGrantAccess.php");
        echo "$page1";
}
else if ($_GET["page"] == "page14"){
        $args=implode(" ",$_REQUEST);
        //echo "$args";
        $page1=shell_exec("php /var/www/html/OtherPagesPHP/ContentMaintenance.php $args");
        echo "$page1";
}

}
else
{

      echo '<script type="text/javascript">',
      'location.href = "index.php";',
      '</script>'
;

}


?>

</body>

</html>

