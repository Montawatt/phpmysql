<html>
  <head>
    <title>ThaiCreate.Com</title>
  </head>
  <body>
    <?php
      echo "MySQL Connecting";
      $host = "redcap.prepdb.org";
      $username = "redcap_admin";
      $password = "logout303";
      $objConnect = mysql_connect($host,$username,$password);
      if($objConnect)
      {
        echo "MySQL Connected";
      }
      else
      {
        echo "MySQL Connect Failed : Error : ".mysql_error();
      }
      mysql_close($objConnect);
    ?>
  </body>
</html>
