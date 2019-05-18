<div class="modal fade" id="userreg">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header bg-primary text-white">
          <h4 class="modal-title font-weight-bold">User_Registration</h4>
          <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form class="form-horizontal" name="form" action="code/reg.php?q=account.php" onSubmit="return validateForm()" method="POST">
					<fieldset>
						<!------------------------------------------------->
						<!-- Text input-->
					<div class="form-group">
					 <!--  <label class="col-md-12 control-label" for="name"></label> -->  
					  <input id="name" name="name" autocomplete="off" placeholder="Enter your name" class="form-control priya input-md" type="text">
					</div>
						<!-- Text input-->
					<div class="form-group">
					 <!--  <label class="col-md-12 control-label" for="gender"></label> -->
					    <select id="gender" name="gender" placeholder="Enter your gender" class="form-control priya input-md" >
						    <option value="Male">Select Gender</option>
						  	<option value="M">Male</option>
						    <option value="F">Female</option> 
					    </select>
					</div>
						<!-- Text input-->
					<div class="form-group">
					  <!-- <label class="col-md-12 control-label" for="name"></label>  --> 
					  <input id="college" name="college" placeholder="Enter your college name" class="form-control priya input-md" type="text" autocomplete="off">
					</div>
						<!-- Text input-->
					<div class="form-group">
					 <!--  <label class="col-md-12 control-label title1" for="email"></label> -->
						 <input id="email" name="email" placeholder="Enter your email-id" class="form-control priya input-md" type="email" autocomplete="off">
					</div>
						<!-- Text input-->
					<div class="form-group">
					  <!-- <label class="col-md-12 control-label" for="mob"></label>   -->
						  <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control priya input-md" type="text">
					</div>
						<!-- Text input-->
					<div class="form-group">
					 <!--  <label class="col-md-12 control-label" for="password"></label> -->
					 	<input id="password" name="password" placeholder="Enter your password" class="form-control priya input-md" type="password">
					</div>

					<div class="form-group">
					  <!-- <label class="col-md-12 control-label" for="cpassword"></label> -->
					    <input id="cpassword" name="cpassword" placeholder="Conform Password" class="form-control priya input-md" type="password">
					</div>
					<?php if(@$_GET['q7'])
					{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
					<!-- Button -->
					<div class="form-group" align="right">
							<input type="button" value="Close" data-dismiss="modal" class="btn btn-primary" />
							<input type="submit" name="login" value="Submit Data" class="btn btn-primary" />
						</div>
						<!------------------------------------------------->
					</fieldset>
				</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer bg-success">
          <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        </div>
        
      </div>
    </div>
  </div>