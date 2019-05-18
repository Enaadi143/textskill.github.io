<!DOCTYPE html>
<html>
<head>
	<?php include 'code/link.php' ?>
	<!-- coding -->
	<?php 
	if(@$_GET['w'])
	{echo'<script>alert("'.@$_GET['w'].'");</script>';}
	if (@$_GET['q7']) {
		echo'<script>alert("'.@$_GET['q7'].'");</script>';
	}
	if (@$_GET['q1']) {
		echo'<script>alert("'.@$_GET['q1'].'");</script>';
	}
	if (@$_GET['q11']) {
		echo'<script>alert("'.@$_GET['q11'].'");</script>';
	}
	?>
</head>
<body onload="myFunction()">
  <div id="loading"></div>
	<header>
		<?php include 'menu.php' ?>
		<?php include 'slider.php'; ?>
	</header>
	<!-- model user singh in -->
	<?php include 'student_login.php' ?>
	<!-- model user singh in close -->
	<!-- model admin singh in -->
	<?php include 'admin_login.php' ?>
	<!-- model admin singh in close -->
	<!-- model user_reg -->
	<?php include 'user_reg.php'; ?>
	<!-- model user_reg -->
	
<!-- 
	<footer>
	   <div class="bg-dark text-center text-white font-weight-bold"style="height:50px;line-height: 50px;">
		@loverboy
	   </div>
	</footer> -->
	<script type="text/javascript">
		var preloader = document.getElementById("loading");
		function myFunction(){
			preloader.style.display = 'none';
		};
	</script>
</body>
</html>