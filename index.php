<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            setcookie("CookieDePrueba", 1, time()+3600);
            
            
            if(isset($_COOKIE['CookieDePrueba'])){ 
            echo "COOKIES ACTIVADAS<br>"; 
            
            error_reporting(E_ALL ^ E_NOTICE);
            ini_set("session.use_cookies",1);
            ini_set("session.use_trans_sid",0);
            ini_set("session.use_only_cookies",1);
            session_start();
            echo session_id().'<br>'.session_name().'<br>';
            }else{ 
            echo "COOKIES DESACTIVADAS<br>"; 
            
            error_reporting(E_ALL ^ E_NOTICE);
            ini_set("session.use_cookies",0);
            ini_set("session.use_trans_sid",1);
            ini_set("session.use_only_cookies",0);
            session_start();
            echo session_id().'<br>'.session_name().'<br>';
            }
          ?>
        
        
        <a href="hoja2.php?">EOEOEOEO</a>
    </body>
</html>
