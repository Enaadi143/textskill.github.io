<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'code/link.php'; ?>
	<!-- coding -->
	<?php if(@$_GET['w'])
	{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
</head>
<?php
include_once 'code/dbConnection.php';
?>
<body onload="myFunction()">
  <div id="loading"></div>
<section>
	<?php include 'user_dash_header.php'; ?>
</section>
<hr class="w-100">
<section>
	<?php include 'user_menu.php'; ?>
</section>

<section style="height:455px;">
	<?php include 'question.php'; ?>
</section>
<!-- footer -->
<footer class="mt-5">
	<div class="bg-dark text-white text-center font-weight-bold" style="line-height: 30px">@gpm</div>
</footer>
<!-- close footer -->
<script type="text/javascript">
    var preloader = document.getElementById("loading");
        function myFunction(){
            preloader.style.display = 'none';
        };
</script>
</body>
</html>