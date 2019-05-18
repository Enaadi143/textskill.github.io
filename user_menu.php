<nav class="navbar user_menu navbar-expand-lg navbar-dark bg-dark">
  <img src="img/04.gif" height="40px" width="40px" class="img-fluid">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#aadi" aria-controls="aadi" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="aadi">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item bg-success" style="border-radius: 10px;">
          <a href="account.php" class="nav-link text-white">Home</a>
      </li>
      <li <?php if(@$_GET['q']==1) echo'class="active nav-item"';?> class="nav-item">
          <a href="subject.php?q=1" class="nav-link text-white"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Subject<span class="sr-only">(current)</span></a>
      </li>     
      <li class="nav-item" <?php if(@$_GET['q']==2) echo'class="active php nav-item "'; ?>>
          <a class="nav-link text-white" href="ans.php?q=2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;History</a>
      </li>
      <li <?php if(@$_GET['q']==3) echo'class="php nav-item "'; ?> class="nav-item">
          <a class="nav-link text-white" href="ans.php?q=3"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;Ranking</a>
      </li>
      <li class="nav-item">
          <a class="nav-link text-white" href="logout.php?q=account.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>Signout</a></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0 ml-5">
      <input class="form-control mr-sm-2" type="search" placeholder="Enter tag" aria-label="Search">
      <button class="btn btn-outline-success my-2 text-white my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>