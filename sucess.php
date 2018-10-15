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
        <h1>Welcome Man!</h1>
        <?php
        session_start();
        
        // put your code here
        echo $_SESSION['name'];
        ?>
    </body>
</html>
