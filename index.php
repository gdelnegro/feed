<?php include'./feed.php'?>
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
        <?=  getRSS('http://agilmotoboy.com.br/blog/feed/')?>
        
        <?=getNoticia()?>
    </body>
</html>
