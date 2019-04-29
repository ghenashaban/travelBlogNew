<script src="views/JS/jquery-3.3.1.min.js"></script>
<link href="views/css/search.css" rel="stylesheet" type="text/css"/>
<style>
.typeahead { border: 2px solid #FFF;border-radius: 4px;padding: 8px 12px;max-width: 300px;min-width: 290px;background: rgba(66, 52, 52, 0.5);color: #FFF;}
.tt-menu { width:300px; }
ul.typeahead{margin:0px;padding:10px 0px;}
ul.typeahead.dropdown-menu li a {padding: 10px !important;	border-bottom:#CCC 1px solid;color:#808080;}
ul.typeahead.dropdown-menu li:last-child a { border-bottom:0px !important; }
.bgcolor {max-width: 550px;min-width: 290px;max-height:340px;background:url("world-contries.jpg") no-repeat center center;padding: 100px 10px 130px;border-radius:4px;text-align:center;margin:10px;}
.demo-label {font-size:1.5em;color: #686868;font-weight: 500;color:#FFF;}
.dropdown-menu>.active>a, .dropdown-menu>.active>a:focus, .dropdown-menu>.active>a:hover {
        text-decoration: none;
        background-color: #1f3f41;
        outline: 0;
}
</style>	

    <div class="caption text-center">
                  <h3> Welcome! أهلا بك! Bem Vinda! Failte! Bienvenido! </h3>
        <h1> Joined at the trip!</h1>          

        <form method="POST">
        <div class="container">
            <input type="text" placeholder="Search.."  name="search" id="txtCountry" class="typeahead">
            <div class="search"></div>

        </div>

        </form>       

    </div>


</div>
<script>
    $(document).ready(function () {
        $('#txtCountry').typeahead({
            source: function (query, result) {
                $.ajax({
                    url: "views/posts/server.php",
                    data: 'query=' + query,            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
						result($.map(data, function (item) {
							return item;
                        }));
                    }
                });
            }
        });
    });
</script>

            <?php require_once 'views/pages/divs.php'; ?>

