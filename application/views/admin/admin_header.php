<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Collapsible sidebar using Bootstrap 3</title>
<!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="<?= base_URL('assets/css/admin/bootstrap.css')?>">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="<?= base_URL('assets/css/admin/style.css')?>">
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Admin Panel</h3>
                </div>

                <ul class="list-unstyled components">
                    <p>Dashboard</p>
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Posts</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="#">Browse</a></li>
                            <li><a href="#">Add New</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Student Pulse</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#">Browse</a></li>
                            <li><a href="#">Add New</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#Submenu" data-toggle="collapse" aria-expanded="false">Comments</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#">All</a></li>
                            <li><a href="#">Pending</a></li>
                            <li><a href="#">Approved</a></li>
                        </ul>
                    </li>
                    <!-- <li>
                        <a href="#">Portfolio</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li> -->
                </ul>

                <ul class="list-unstyled CTAs">
                    <li><a href="<?=base_URL('index.php/user')?>" class="article">Back to Homepage</a></li>
                </ul>
            </nav>

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
                        </div>
                    </div>
                </nav>

            </div>
        </div>
 <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="<?= base_URL('assets/css/admin/bootstrap.min.css')?>">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="<?= base_URL('assets/css/admin/style.css')?>">