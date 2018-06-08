<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Administration-MM</title>
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
                        <a class="sidebara" href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Posts</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="<?= base_URL('index.php/admin/browse_post')?>">Browse</a></li>
                            <li><a href="<?= base_URL('index.php/admin/add_article')?>">Add New</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="sidebara" href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Student Pulse</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#">Browse</a></li>
                            <li><a href="#">Add New</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="sidebara" href="#commentsSubmenu" data-toggle="collapse" aria-expanded="false">Comments</a>
                        <ul class="collapse list-unstyled" id="commentsSubmenu">
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
            
 <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="<?= base_URL('assets/css/admin/bootstrap.min.css')?>">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="<?= base_URL('assets/css/admin/style.css')?>">