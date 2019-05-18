<div class="header container-fluid  text-white bg-dark font-weight-bold">
		<span class="gpm text-warning">GPM Exam</span>
		<span class="float-right gpm1">
		    <?php
			include_once 'code/dbConnection.php';
			session_start();
			if(!(isset($_SESSION['email']))){
			header("location:index.php");
			}
			else
			{
			$name = $_SESSION['name'];
			$email=$_SESSION['email'];
			include_once 'code/dbConnection.php';
			echo '<span class="pull-right top title1" ><span class="log1"><span class="fas fa-user-tie" aria-hidden="true"></span>&nbsp;&nbsp;Welcome :)&nbsp;&nbsp;&nbsp;&nbsp;</span> <a href="account.php?q=1" class="log log1 text-white">'.$name.'</a>&nbsp;|&nbsp;<a href="logout.php?q=account.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span>';
			}
			?>
		</span>
	</div>