<?php include('admin_header.php') ?>


<!-- Page Content Holder -->
<div id="content" class="col-md-12 col-sm-12">
	
    <nav class="navbar navbar-default">
        <div class="container-fluid">

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
		<!-- FLASH ALERT -->
		 <?php if($feedback = $this->session->flashdata('feedback')):
	    		$feedback_class=$this->session->flashdata('feedback_class');
	     ?>
		    <div class="row">
		    	<div class="col-md-6">
		    		<div class="alert alert-dismissible <?=$feedback_class?>">
					  <center><strong><?= $feedback ?></strong></center>
					</div>
		    	</div>
		    </div>
		<?php endif;?>
		<!-- TABLE BEGINS -->
		<table class="table table-striped table-hover ">
		  <thead >
		    <tr class="dark">
		      <th scope="col">Post_ID</th>
		      <th scope="col">Title</th>
		      <th scope="col">Authors</th>
		      <th scope="col">Category</th>
		      <th scope="col">Status</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr class="table">
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>
		  </tbody>
		</table> 



	</div>















</div>
</div>


<?php include('admin_footer.php') ?>