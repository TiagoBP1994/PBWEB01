<?php
require_once './database/DbH.inc.php';
?>
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
        DbH::getDbH();
        var_dump(DbH::$dbh);        
        ?>
    </body>
</html>
