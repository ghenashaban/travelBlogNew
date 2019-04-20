<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>list of all posts</h1>
  

   <?php foreach ($posts as $post) { ?>
     <p>  <td>   <?php echo $post->title; ?> </td>
    
   <a href='?controller=post&action=read&id=<?php echo $post->id; ?>' class='btn btn-primary'>Read More</a>
    <a href='?controller=post&action=update&id=<?php echo $post->id; ?>'class='btn btn-primary'>Update</a>
  
    <a href='?controller=post&action=delete&id=<?php echo $post->id; ?>' class='btn btn-primary' onclick="ConfirmDelete()">Delete</a>
</p>
                        <?php } ?>
                            
   <a href='?controller=post&action=create' class='btn btn-primary'>create post</a>
  
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