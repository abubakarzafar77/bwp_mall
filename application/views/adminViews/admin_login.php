<?php include('admin_header.php');?>


<div class="container">
	<?php 	
		$attr = array('class'=>'form-horizontal','id'=>'myForm');
		echo form_open('admin/login/admin_login' , $attr); 
	?>
		<fieldset>
			<legend>Admin Login</legend>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label for="inputEmail" class="col-lg-2 control-label">Email</label>
						<div class="col-lg-10">
							<input type="text" name="username" value="" class="form-control" placeholder="Username">
						</div>
					</div>
				</div>
				<div class="col-sm-6">


				
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label for="inputPassword" class="col-lg-2 control-label">Password</label>
						<div class="col-lg-10">
							<input type="password" name="password" value="" class="form-control" placeholder="Password">
						</div>
					</div>
				</div>
				<div class="col-sm-6">
				</div>
			</div>	
			<div class="form-group">
				<div class="col-lg-10 col-lg-offset-2">
					<input type="reset" name="reset" value="Reset" class="btn btn-default">
					<input type="submit" name="submit" value="Login" class="btn btn-primary">
				</div>
			</div>
		</fieldset>
	</form>
</div>
<?php echo validation_errors(); ?>
<?php echo  $this->session->userdata('invalid_login');?>
<?php include('admin_footer.php');?>