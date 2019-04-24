<html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">  
<style>
.fa {
  font-size: 50px;
  cursor: pointer;
  user-select: none;
}

.fa:hover {
  color: darkblue;
}
</style>
</head>
<body>


<i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>

<script>
function myFunction(x) {
  x.classList.toggle("fa-thumbs-down");
}
</script>

</body>
</html>