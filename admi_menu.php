<nav class="navbar user_menu navbar-expand-lg navbar-dark bg-dark">
  <img src="img/04.gif" height="40px" width="40px" class="img-fluid">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#aadi" aria-controls="aadi" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="aadi">
   <ul class="nav navbar-nav ml-auto">
        <li <?php if(@$_GET['q']==0) echo'class="active"'; ?>><a class="nav-link text-white" href="dash.php?q=0">Home<span class="sr-only">(current)</span></a></li>
        <li <?php if(@$_GET['q']==1) echo'class="active"'; ?>><a class="nav-link text-white" href="dash.php?q=1">All Students</a></li>
        <li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a class="nav-link text-white" href="dash.php?q=2">Ranking</a></li>
        <li <?php if(@$_GET['q']==3) echo'class="active"'; ?>><a class="nav-link text-white" href="dash.php?q=3">Feedback</a></li>
        <li class="dropdown <?php if(@$_GET['q']==4 || @$_GET['q']==5) echo'active"'; ?>">
          <a class="nav-link text-white" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quiz<span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-content bg-dark">
            <li><a class="nav-link text-white" href="dash.php?q=4">Add Quiz</a></li>
            <li><a class="nav-link text-white" href="dash.php?q=5">Remove Quiz</a></li>
          </ul>
        </li>
        <li class="pull-right"> <a class="nav-link text-white" href="logout.php?q=account.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>Signout</a>
        </li>
      </ul>
    <form class="form-inline my-2 my-lg-0 ml-5">
      <input class="form-control mr-sm-2" type="search" placeholder="Enter tag" aria-label="Search">
      <button class="btn btn-outline-success my-2 text-white my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>