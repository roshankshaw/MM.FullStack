<?php include('admin_header.php') ?>


<!-- Page Content Holder -->
<div id="content" class="col-md-12 col-sm-12">
	
	<nav class="navbar navbar-default">
		<div class="container">

			<div class="navbar-header">
				<button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
					<i class="glyphicon glyphicon-align-left"></i>
					<span>Toggle Sidebar</span>
				</button>
			</div>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?= base_URL('index.php/login/logout')?>">LOG OUT</a></li>
					<!-- <li><a href="#">Page</a></li> -->
				</ul>
				<div class="nav navbar-right navbar-brand "><strong>Hello, <?php echo $dname;?></strong></div>
			</div>
		</div>
	</nav>

	<!-- CONTENT FOR THIS LINK BEGINS -->
	<div class="container">
		<div class="row"></div>
			<div class="col-md-8 col-sm-12">
				
				<!-- ARTICLE FORM BEGINS -->
 				<?php echo form_open_multipart("articles/update_article/"."{$article->post_id}");?>
 				<?php echo form_hidden('author_id',$this->session->userdata('user_id'));?>
 					<fieldset>
						<legend>Edit Article</legend>
						
						<div class="form-group">
							<label >Title of the Article</label>
			      			<?php echo form_input(['type'=>'name','name'=>'title','class'=>'form-control', 'placeholder'=>'Enter the title of the aritcle','value'=>set_value('title',$article->title)])?>
						</div>
							<?php echo form_error('title')?>

						<div class="form-group">
							<label for="exampleTextarea">Article Content</label>
			      			<?php echo form_textarea(['name'=>'content','class'=>'form-control', 'placeholder'=>'Enter the article body','rows'=>'10','value'=>set_value('content',$article->content)])?>
						</div>
							<?php echo form_error('content')?>


						<div class="form-group">
							<label >Excerpts</label>
			      			<?php echo form_input(['type'=>'name','name'=>'excerpts',
			      				'class'=>'form-control is-danger','placeholder'=>'Enter some excerpts','value'=>set_value('excerpts',$article->excerpts)])?>
						</div>
							<?php echo form_error('excerpts')?>
						
						<div class="form-group">
							<label for="exampleInputFile">Upload an image:</label>
					      	<?php echo form_upload(['name'=>'userfile','class'=>'form-control-file','aria-describedby'=>'fileHelp']) ?>
							<!-- If name is other than userfile then pass the name as a parameter in do_upload() function -->
						</div>
							<small style="  color:red;"><?php  if(isset($upload_error)) echo "*".$upload_error;?></small>
														
						<?php echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary pull-right'])?>
					</fieldset>
				<?php form_close(); ?>
			</div>
			<!-- SIDEBAR SECTION -->
			<div class="col-md-4 col-sm-12">
				<div class="panel-group" >
					
					<!-- PUBLISH ARTICLES FORM -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
								Publish</a>
							</h4>
						</div>
						<div id="collapse1" class="panel-collapse collapse">
							<div class="panel-body">
								<form action="">
									<div class="form-group">
										<label for="exampleSelect1">Example select</label>
										<select class="form-control" id="exampleSelect1">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
									<div class="form-group">
										<label for="exampleSelect1">Example select</label>
										<select class="form-control" id="exampleSelect1">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
									<fieldset class="form-group">
										<div class="form-check">
										<label class="form-check-label">
											<input class="form-check-input" type="checkbox" value="" checked="">
											Option one is this and that—be sure to include why it's great
										</label>
										</div>
										<div class="form-check disabled">
										<label class="form-check-label">
											<input class="form-check-input" type="checkbox" value="" disabled="">
											Option two is disabled
										</label>
										</div>
									</fieldset>	
									<button type="submit" class="btn btn-primary">Submit</button>
								</form>
							</div>
						</div>
					</div>

					<!-- AUTHORS FORM -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
								Authors</a>
							</h4>
						</div>
						<div id="collapse2" class="panel-collapse collapse">
							<div class="panel-body">
								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
							</div>
						</div>
					</div>

					<!-- CATEGORY FORM -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
								Category</a>
							</h4>
						</div>
						<div id="collapse3" class="panel-collapse collapse">
							<div class="panel-body">
								<fieldset class="form-group">
									<legend>Checkboxes</legend>
									<div class="form-check">
									<label class="form-check-label">
										<input class="form-check-input" type="checkbox" value="" checked="">
										Option one is this and that—be sure to include why it's great
									</label>
									</div>
									<div class="form-check disabled">
									<label class="form-check-label">
										<input class="form-check-input" type="checkbox" value="" disabled="">
										Option two is disabled
									</label>
									</div>
								</fieldset>
							</div>
						</div>
					</div>


					<!-- MEDIA FORM -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
								Media</a>
							</h4>
						</div>
						<div id="collapse4" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="form-group">
									<label for="exampleInputFile">Image input</label>
									<input type="file" class="form-control-file" id="exampleInputFile" accept="images/*" aria-describedby="fileHelp">
									<small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			</div>
		</div>
	</div>



</div>
</div>


<?php include('admin_footer.php') ?>