
<!--<link href="../css/scroll.css" rel="stylesheet" type="text/css"/>-->
<head>
    <!--Ghena script tag for comments ajax-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--Issi tags for social media sharing-->
    <meta property="og:url"           content="http://localhost:8080/travelBlogNew/index.php?controller=post&amp;action=read&amp;id=103" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Your Website Title" />
    <meta property="og:description"   content="Your description" />
    <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />
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
    </style>
    <!--Issi js for social media sharing-->
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>    
    <script>
        window.twttr = (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0],
                    t = window.twttr || {};
            if (d.getElementById(id))
                return t;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);

            t._e = [];
            t.ready = function (f) {
                t._e.push(f);
            };

            return t;
        }(document, "script", "twitter-wjs"));
    </script>


    <!--Ghena js for comments-->
    <script>
        $(document).ready(function () {
            $("#flip").click(function () {
                $("#panel").slideToggle("slow");
            });
        });
    </script>
    <!--Ghena php for posts-->
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
        echo "<br>";
        echo "likes:";
        echo $likes->totalcount;?>
        <!--Issi html for sharing social media-->
        <h5>Share it on social media</h5>
        <div class='container'>
        <a class="twitter-share-button" href=http://localhost:8080/travelBlogNew/index.php?controller=post&amp;amp;action=read&amp;amp;id=<?php echo $post->id; ?>"><Tweet</a>
        <div class="fb-like" data-href="http://localhost:8080/travelBlogNew/index.php?controller=post&amp;amp;action=read&amp;amp;id=<?php echo $post->id; ?>" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
        
        <!--Ghena php/html for comments-->
        <?php
        require_once 'views/posts/addLike.php';
        require_once 'views/posts/addComment.php';
        ?>

        <div id="flip">Comments</div>
        <div id="panel"><p>

        <?php
        echo "these are the comments:";

        foreach ($comments as $comment) {
        ?>

        <td>   <?php echo $comment->content; ?> </td>

               <?php echo "<br>";
                }
                ?>

            </p></div>

    </div>


</html>