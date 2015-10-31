<?php
require 'ClassA.php';
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
        $a = new ClassA();
        $b = new ClassB();
        echo $a->sayHello("Anne");
        echo "<br />";
        echo $b->sayHello("Bob");
        ?>
    </body>
</html>
