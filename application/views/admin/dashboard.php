<?php include('admin_header.php') ?>


<!-- Page Content Holder -->
<div id="content" class="col-md-12 col-sm-12">
    
    <nav class="navbar navbar-default color">
        <div class="container-fluid color">

            <div class="navbar-header">
                <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                    <i class="glyphicon glyphicon-align-left"></i>
                    <span>Toggle Sidebar</span>
                </button>
            </div>
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?= base_URL('index.php/login/logout')?>" id="nav-btn">LOG OUT</a></li>
                    <!-- <li><a href="#">Page</a></li> -->
                </ul>
                <div class="nav navbar-right navbar-brand "><strong>Hello, <?php echo $dname;?></strong></div>
            </div>
        </div>
    </nav>

    <!-- CONTENT FOR THIS LINK BEGINS -->



</div>
</div>


<?php include('admin_footer.php') ?>