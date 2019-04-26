<?php
require_once 'index.php';


 foreach ($comments as $comment) { 
     
 echo $comment->content;
 }
   
     
echo "these are the comments:";
foreach ($comments as $comment) { ?>

     <p>  <td>   <?php echo $comment->content; ?> </td>
   <?php } 
 
   

     
 ?>

