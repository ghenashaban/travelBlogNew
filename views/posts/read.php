<!--<link href="../css/scroll.css" rel="stylesheet" type="text/css"/>-->
<head>
    <!--Ghena script tag for comments ajax-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--Issi tags for social media sharing-->
    
</head>

<body>
    <!--Ghena css for comments ajax-->
    <style> 
        #panel, #flip {
            padding: 5px;
            text-align: center;
            background-color: #e5eecc;
            border: solid 1px #c3c3c3;
        }

        #panel {
            padding: 50px;
            display: none;
        }
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
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
        .box {border-style: solid;
       width: 400px;
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
         <button id="myBtn">Comment/like ?</button>


        <div id="myModal" class="modal">


            <div class="modal-content">
                <span class="close">&times;</span>

                <h3> it looks like your not logged in </h3>
                "<a href="?controller=user&action=login"><button>Log in here</button> </a>";
            </div>
        </div>
                <?php
        echo "<br>";
        echo "likes:";
        echo $likes->totalcount;
        
            require_once 'views/posts/addLike.php';
            require_once 'views/posts/addComment.php';
            
            ?>
          <div id="panel"><p>

                    <?php
                    echo "these are the comments:";

                    foreach ($comments as $comment) {
                        ?>
<div class='box'>
                    <td >   <?php echo $comment->content; ?> </td>
</div>
                    <?php
                    echo "<br>";
                }
                ?>
        

         
           

                </p></div>
           

            <div id="flip">Comments</div>
           

       


       <?php  require_once 'views/posts/twitter.php'; ?>

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


            </body>
            </html>

