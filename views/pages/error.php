<style>
    #back{
        color: black;
        background-color: #55d6be;
        border-radius:12px;
    }
</style>
<div id="banner">
<div class="w3-container w3-red">
    <div class="row">
                <div class="col-2">
                    <button onclick="goBack()" id="back" class="previous"> &laquo; Back</button> </div>    
                <div class="col-8">  
                </div> </div>
<h4>Looks like you made a wrong turn!<h4>
<img src="views/images/way.jpg" width="450" />
<!--<p>Click back to have another try</p>-->
</div>
</div>
<!--<div class="row">
                <div class="col-2">
                    <button onclick="goBack()" class="previous"> &laquo; Back</button> </div>    
                <div class="col-8">  
                </div> </div>-->
</div>
 <script>
function goBack() {
  window.history.back();
}

                    </script> 

<?php require_once 'views/pages/divs.php'; ?>