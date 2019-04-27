<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta property="og:url"           content="http://localhost:8080/travelBlogNew/index.php?controller=post&amp;action=read&amp;id=103" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Your Website Title" />
    <meta property="og:description"   content="Your description" />
    <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />
    </head>
    <body>
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
      
        <h5>Share it on social media</h5>
        <div class='container'>
            <a class="twitter-share-button" href=http://localhost:8080/travelBlogNew/index.php?controller=post&amp;amp;action=read&amp;amp;id=<?php echo $post->id; ?>"><Tweet</a>
            <div class="fb-like" data-href="http://localhost:8080/travelBlogNew/index.php?controller=post&amp;amp;action=read&amp;amp;id=<?php echo $post->id; ?>" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
    </body>
</html>
