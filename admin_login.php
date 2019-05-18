<div class="modal fade" id="admin">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header bg-primary text-white">
          <h4 class="modal-title font-weight-bold">Admin_Login</h4>
          <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form class="form-horizontal" action="admin.php?q=index.php" method="POST">
					<fieldset>
						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-3 control-label" for="email"></label>  
						  	<input id="email" autocomplete="off" name="uname" placeholder="Enter your email-id" class="form-control priya input-md" type="email">
						</div>
						<!-- Password input-->
						<div class="form-group">
						  <label class="col-md-3 control-label" for="password"></label>
						  	<input id="password" name="password" placeholder="Enter your Password" class="form-control priya input-md" type="password">   
						</div>
						<div class="form-group" align="right">
							<input type="button" value="Close" data-dismiss="modal" class="btn btn-primary" />
							<input type="submit" name="login" value="Login" class="btn btn-primary" />
						</div>
						<!-------------------------------->
					</fieldset>
				</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer bg-success"></div>
        
      </div>
    </div>
  </div>