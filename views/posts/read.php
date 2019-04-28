<!--<link href="../css/scroll.css" rel="stylesheet" type="text/css"/>-->
<head>
    <!--Ghena script tag for comments ajax-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
</head>

<body>
<!--FB Sharing-->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2"></script>   
<!--FB Sharing-->

<!--Ghena css for comments modal/ajax-->
    <style> 
        
        #panel, #flip {
            padding: 5px;
            text-align: center;
            background-color: #e5eecc;
            border: solid 1px #c3c3c3;
            background-color: rgb(0,0,0);  /*Fallback color for comments box */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            border: 2px solid #55d6be;
            border-radius: 12px;
        }

        #panel {
            padding: 10px;
            display: none;
            border: 2px solid #55d6be;
            border-radius: 12px;
            
        #myModal{
            border: 2px solid #55d6be;
            border-radius: 12px;
            
                
            }
        }
        .modal {

/*            display: none;  Hidden by default
            position: fixed;  Stay in place 
            z-index: 1;  Sit on top 
            padding-top: 50px;  Location of the box */

            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 400px; /* Location of the box */

            left: 0;
            top: 0;
            width: 40%; /* Full width */
            height: 20%;  /*Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */

            background-color: rgba(0,0,0,0.4); /* Black w/ opacity*/ 

            background-color: rgba(0,0,0,0.7); /* Black w/ opacity */

            border: 5px solid #55d6be;
            border-radius: 12px;
        }


/*         Modal Content 
        .modal-content {
            background-color: rgb(0,0,0);  Fallback color for comments box
            background-color: rgba(0,0,0,0.4);  Black w/ opacity */

        /* Modal Content */
        #modal-content {
            background-color: rgb(0,0,0); /* Fallback color for comments box */
          background-color: rgba(0,0,0,0.4); /* Black w/ opacity */

            margin: auto;
            padding: 20px;
            border: 5px solid #55d6be;
            width: 40%;
            border-radius: 20px;
            display: block;
            top: 35%;
        }

         The Close Button 
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        button{
            color: white;
            border: 2px solid #55d6be;  /*turquoise */
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);  
            border-radius: 12px;
            padding: 10px 24px;
        }

        .box {border-style: solid;
       width: 400px;
        }
        #myBtn{
          border-radius: 12px;  
        }

    </style>
   
<style>
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
</style>


   
    <script>
        $(document).ready(function () {
            $("#flip").click(function () {
                $("#panel").slideToggle("slow");
            });
        });
    </script>
 
    <div id="banner">

        <h3><?php echo $posts->title; ?> </h3>
        <h5> <?php echo $posts->body; ?></h5>

        <?php
        $file1 = 'views/images/' . $posts->title . ".jpg";
        $file2 = 'views/images/' . $posts->title . ".jpeg";

        if (file_exists($file1)) {
            $img = "<img src='$file1' width='150' />";
            echo $img;
        } else if (file_exists($file2)) {
            $img = "<img src='$file2' width='150' />";
            echo $img;
        }
        ?>
        

        


<!--            <div class="modal-content" >-->

<?php if (empty($_SESSION['username'])){
         echo'<p></p>
        <div id="myBtn">
         <button id="myBtn">Comment/like ?</button>
        </div>   
             <div id="myModal" class="modal" >
             <div id="modal-content">

                <span class="close">&times;</span>
                
                <h3> To comment please login or register... </h3>
                <a href="?controller=user&action=login"><button>Login/Register</button> </a>
            </div>
        </div>';
}
?>
        
        
                <?php
        echo "<br>";
        echo "Likes: ";
        echo $likes->totalcount;
        
            require_once 'views/posts/addLike.php';
            require_once 'views/posts/addComment.php';
            
            ?>
        <br>
 <!-- FB share -->
 <div class="fb-share-button" data-href="https://www.timeout.com/croatia/travel/top-10-croatian-islands" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
 <!-- FB share -->         
        <br>
        <br>
<!-- Twitter share -->
<a href="https://twitter.com/intent/tweet?button_hashtag=joinedatthetrip&ref_src=twsrc%5Etfw" class="twitter-hashtag-button" data-show-count="false">Tweet #joinedatthetrip #croatia</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
 <!-- Twitter share -->
 
<!--        <div class="fb-like" data-href="https://www.lonelyplanet.com/croatia" data-width="" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>-->
          <div id="panel"><p>
                    <?php
                   

                    foreach ($comments as $comment) {
                        ?>
                  
                  
<div class='box'>
    
                     <?php
    $file1 = 'views/images/' .$comment->username .".jpg";
$file2 = 'views/images/' .$comment->username .".jpeg";

if(file_exists($file1) ){
   $img= "<img src='$file1'  class='avatar'>";
   
    echo $img;
    
}
else if (file_exists($file2)) {
    $img= "<img src='$file2'  class='avatar'>";
  
echo $img;  

}else{
    $img="<img src='views/images/avatar.jpg' class='avatar' />";
echo $img;
}?> 
   <td>   <?php echo $comment->username." :"; ?>   <?php echo $comment->content; ?> 
                    </td>                 
</div>
                    <?php
                    echo "<br>";
                }
                ?>
        

         
           

                </p></div>
           

            <div id="flip">Comments</div>
           

       


 

    </div>

    
            <script>
                // Get the modal
                var modal = document.getElementById('myModal');

                // Get the button that opens the modal
                var btn = document.getElementById("myBtn");

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks the button, open the modal 
                btn.onclick = function () {
                    modal.style.display = "block";
                }

                // When the user clicks on <span> (x), close the modal
                span.onclick = function () {
                    modal.style.display = "none";
                }

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function (event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            </script>

 <div>
<!--    <div class="caption text-center">


               



            </div>-->

            <!-- end landing page -->


        </div>
<br>
<br>
<?php require_once 'views/pages/divs.php'; ?>


            </body>
            </html>

