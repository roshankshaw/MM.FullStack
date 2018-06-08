<?php include('form_header.php') ?>

<div class="container">
		  <?php echo form_open('register/signup');?>
		  <?php echo form_hidden('role','subscriber');?>
		  <fieldset>
		    <legend>Admin Signup</legend>
		    <?php if($feedback=$this->session->flashdata('register_alert')):?>
			    <div class="row">
			    	<div class="col-md-6 alert-danger">
			    		<center><strong><?= $feedback ?></strong></center>
			    	</div>
			    </div>
			<?php endif; ?>
		  	<div class="row">
			    <div class="form-group col-md-6">
			      <label>Email:</label>
			      <?php echo form_input(['type'=>'email','name'=>'email','class'=>'form-control', 'placeholder'=>'Enter Email','value'=>set_value('email')])?>
			    </div>
			    <div class="col-md-6">
			    	<br>
			      <?php echo form_error('email')?>
			    </div>
			</div>

			<div class="row">
			    <div class="form-group col-md-6">
			      <label>User Name:</label>
			      <?php echo form_input(['type'=>'name','name'=>'username','class'=>'form-control', 'placeholder'=>'Enter Username','value'=>set_value('username')])?>
			    </div>
			    <div class="col-md-6">
			    	<br>
			      <?php echo form_error('username')?>
			    </div>
			</div>

			<div class="row">
			    <div class="form-group col-md-6">
			      <label>Display Name:</label>
			      <?php echo form_input(['type'=>'name','name'=>'dname','class'=>'form-control', 'placeholder'=>'Enter a display name','value'=>set_value('dname')])?>
			    </div>
			    <div class="col-md-6">
			    	<br>
			      <?php echo form_error('dname')?>
			    </div>
			</div>

			<div class="row">
			    <div class="form-group col-md-6">
			      <label>Password</label>
			      <?php echo form_password(['name'=>'password','class'=>'form-control', 'placeholder'=>'Enter password'])?>
			    </div>

			    <div class="col-md-6">
			    	<br>
			      <?php echo form_error('password')?>
			    </div>
			</div>

			<div class="row">
			    <div class="form-group col-md-6">
			      <label>Confirm Password</label>
			      <?php echo form_password(['name'=>'confirmpassword','class'=>'form-control', 'placeholder'=>'Enter password again'])?>
			    </div>

			    <div class="col-md-6">
			    	<br>
			      <?php echo form_error('password')?>
			    </div>
			</div>

			<?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default'])?>
			<?php echo form_submit(['name'=>'submit','value'=>'Signup','class'=>'btn btn-primary'])?>
		  </fieldset>
		</form>
	</div>	


<?php include('form_footer.php') ?>
