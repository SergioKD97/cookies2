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
        if( isset( $_COOKIE['CookieDePrueba'] ) ) {
            ini_set("session.use_cookies",1);
            ini_set("session.use_trans_sid",0);
            ini_set("session.use_only_cookies",1);
            session_start();
            echo session_id().'<br>'.session_name().'<br>';
            exit();
            }else{
            ini_set("session.use_cookies",0);
            ini_set("session.use_trans_sid",1);
            ini_set("session.use_only_cookies",0);
            session_start();
            echo session_id().'<br>'.session_name().'<br>';
            }
        ?>
    </body>
</html>
