<!DOCTYPE html
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id="banner">
        <h3>list of all posts</h3>
  

   <?php foreach ($posts as $post) { ?>
     <p>  <td>   <?php echo $post->title; ?> </td>
    
   <a href='?controller=post&action=read&id=<?php echo $post->id; ?>' class='btn btn-primary'>Read More</a>
    <a href='?controller=post&action=update&id=<?php echo $post->id; ?>'class='btn btn-primary'>Update</a>
   
    <a href='?controller=post&action=delete&id=<?php echo $post->id; ?>' class='btn btn-primary' onclick="ConfirmDelete()">Delete</a>
</p>
                        <?php } ?>
                            
    </div>
  
     <script>
                        function ConfirmDelete() {
                            var txt;
                            var r = confirm("Are you sure you want to delete this post?");
                            if (r == true) {
                                txt = "You pressed OK! ";
                                window.location.href = ("?controller=post&action=delete&id=<?php echo $post->id; ?>");
                            } else {
                                txt = "You pressed Cancel!";
                            }
                            document.getElementById("demo").innerHTML = txt;
                        }
                    </script>          
    </body>
</html>