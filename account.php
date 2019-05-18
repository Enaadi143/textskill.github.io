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

<section style="height:520px;">
	<div class="limiter">
		<div class="container-login100" style="height:520px;">
			<div class="wrap-login100" style="height:520px;">
				<div class="login100-pic js-tilt" data-tilt style="height:520px;">
					<img src="img/orig.gif" alt="IMG" class="img-fluid">
				</div>
				<div>
					<h1 class="text-center text-white font-weight-bold">Govt. Polytechnic</h1>
					<h1 class="text-center text-white font-weight-bold"> Madhogarh Jalaun</h1>
					<h1 class="text-center text-white font-weight-bold"> 2019-2020</h1>				
				</div>			       
			</div>
		</div>
	</div>
</section>

<!-- footer -->
<footer>
	<div class="bg-dark text-white text-center font-weight-bold" style="line-height: 30px">@gpm</div>
</footer>
<!-- close footer -->
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		});
		var preloader = document.getElementById("loading");
		function myFunction(){
			preloader.style.display = 'none';
		};
	</script>
</body>
</html>