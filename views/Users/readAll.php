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
        <p>Here is a list of all registered users:</p>

        <?php foreach ($users as $user) { ?>

            <?php echo "$user->first_name" ?>  
            <?php echo "$user->surname" ?>  <br><br>
            <a href='?controller=user&action=read&id=<?php echo $user->id; ?>' class='btn btn-primary'>More info..</a>

        <?php } ?>
        <a href='?controller=user&action=delete&id=<?php echo $user->id; ?>' class='btn btn-primary' onclick="ConfirmDelete()">Delete</a>

        <script>
            function ConfirmDelete() {
                var txt;
                var r = confirm("Are you sure you want to delete this user?");
                if (r == true) {
                    txt = "You pressed OK! ";
                    window.location.href = ("?controller=user&action=delete&id=<?php echo
                    $user->id;
                ?>");
                } else {
                    txt = "You pressed Cancel!";
                }
                document.getElementById("demo").innerHTML = txt;
            }
        </script> 

    </body>
</html>
