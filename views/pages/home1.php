<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/contact-buttons.css">
        <link rel="stylesheet" href="font-awesome.min.css">
    <link href="views/css/search.css" rel="stylesheet" type="text/css"/>
</head>

<body>

    <div class="caption text-center">
        <h3> Welcome! أهلا بك! Bem Vinda! Failte! Bienvenido! </h3>
        <h1> Joined at the trip!</h1>
        <?php echo 'welcome'.$_SESSION["id"]?>
        
        <div class="container">
            <input type="text" placeholder="Search...">
            <div class="search"></div>
        </div>
    </div>              
    <p>  </p>
    <a href="../socialMedia/jQuery-Plugin-For-Floating-Social-Share-Contact-Sidebar.zip"></a>
    <script>
        $.shareButtons({
            effect: 'slide-on-scroll',
            buttons: {
                'facebook': {class: 'facebook', use: true, link: 'https://www.facebook.com/pages/mycompany', extras: 'target="_blank"'},
                'linkedin': {class: 'linkedin', use: true, link: 'https://www.linkedin.com/company/mycompany'},
                'google': {class: 'gplus', use: true, link: 'https://plus.google.com/myidongoogle'},
                'mybutton': {class: 'git', use: true, link: 'http://github.com', icon: 'github', title: 'My title for the button'},
                'phone': {class: 'phone separated', use: true, link: '+000'},
                'email': {class: 'email', use: true, link: 'test@web.com'}
            }
        });</script>

    <script src="jquery.min.js"></script>
    <script src="js/jquery.contact-buttons.js"></script>


</body>

</html>












