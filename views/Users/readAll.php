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
        <div id="banner">
        <h3> List of all registered users:</h3>

        <?php foreach ($users as $user) { ?>

            <?php echo "$user->first_name" ?>  
            <?php echo "$user->surname" ?>  
            <a href='?controller=user&action=read&id=<?php echo $user->id; ?>' class='btn btn-primary'>More info..</a>
            <br> <br>
        <?php } ?> 
    </body>
</html>
