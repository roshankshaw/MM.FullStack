<?php include('page_header.php') ?>

<div class="container wrap">
	 <?php echo form_open("user/update_comment");?>
		  <fieldset>
		    <legend>Edit Comment</legend>
				<?php echo form_hidden('post_id',$comment->post_id);?>
				<?php echo form_hidden('comment_id',$comment->comment_id);?>
				<?php echo form_hidden('created_at',date('Y-m-d H:i:s'));?>
				<div class="panel-heading">
					<div class="form-group">
						<table>
							<thead>
								<th>
									<?php echo form_textarea(['name'=>'comment_body','class'=>'form-control', 'placeholder'=>'post a reply','rows'=>'2','required'=>'','value'=>set_value('comment_body',$comment->comment_body)])?>
								</th>
							</thead>
							<br>
							<tr>
								<td>
									<?php echo form_submit(['name'=>'submit','value'=>'Update Comment','class'=>'btn btn-primary float-right'])?>
								</td>
							</tr>
						</table>
					</div>
				</div>
		  </fieldset>
		  <?php form_close() ?>

<br><br>

<?php include('page_footer.php') ?>