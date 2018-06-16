<?php include('page_header.php') ?>

<div class="container wrap">
	 <?php echo form_open("user/update_reply");?>
		  <fieldset>
		    <legend>Edit Reply</legend>
				<?php echo form_hidden('post_id',$reply->post_id);?>
				<?php echo form_hidden('reply_id',$reply->reply_id);?>
				<?php echo form_hidden('created_at',date('Y-m-d H:i:s'));?>
				<div class="panel-heading">
					<div class="form-group">
						<table>
							<thead>
								<th>
									<?php echo form_textarea(['name'=>'reply_body','class'=>'form-control', 'placeholder'=>'post a reply','rows'=>'2','required'=>'','value'=>set_value('reply_body',$reply->reply_body)])?>
								</th>
							</thead>
							<br>
							<tr>
								<td>
									<?php echo form_submit(['name'=>'submit','value'=>'Update reply','class'=>'btn btn-primary float-right'])?>
								</td>
							</tr>
						</table>
					</div>
				</div>
		  </fieldset>
		  <?php form_close() ?>

<br><br>

<?php include('page_footer.php') ?>