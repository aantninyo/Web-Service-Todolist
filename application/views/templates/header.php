<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="http://<?php echo base_url(); ?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="http://<?php echo base_url(); ?>/assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
        <link href="http://<?php echo base_url(); ?>/assets/css/ionicons.css" rel="stylesheet" type="text/css" />
        <link href="http://<?php echo base_url(); ?>/assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <link href="http://<?php echo base_url(); ?>/assets/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="http://<?php echo base_url(); ?>/assets/css/smoothness/jquery-ui-1.9.0.custom.css" rel="stylesheet" type="text/css" />

        <script src="http://<?php echo base_url(); ?>/assets/javascript/jquery-1.8.2.js"></script>
        <script src="http://<?php echo base_url(); ?>/assets/javascript/bootstrap.js" type="text/javascript"></script>
        <script src="http://<?php echo base_url(); ?>/assets/javascript/app.js" type="text/javascript"></script>
        <script src="http://<?php echo base_url(); ?>/assets/javascript/jquery-ui-1.9.0.custom.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="http://<?php echo base_url(); ?>/assets/javascript/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="http://<?php echo base_url(); ?>/assets/javascript/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    </head>
    <body class="skin-blue">
        <header class="header">
            <a href="#" class="logo"  title="<?php echo $title; ?>"></a>
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
			        <ul class="nav navbar-nav">						
			            <li class="dropdown user user-menu">
			                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			                    <i class="glyphicon glyphicon-user"></i>
			                    <span>Makan Yuk !?<i class="caret"></i></span>
			                </a>
			                <ul class="dropdown-menu">
			                    <!-- User image -->
			                    <li class="user-header bg-light-blue">
			                        <img src="http://<?php echo base_url(); ?>/assets/img/avatar.png" class="img-circle" alt="User Image" />
			                        <p>
			                            Makan Yuk !?
			                            <small>Direktur</small>
			                        </p>
			                    </li>
			                     <!-- Menu Footer-->
			                    <li class="user-footer">
			                        <div class="pull-left">
			                            <a href="#" class="btn btn-default btn-flat">Password</a>
			                        </div>
			                        <div class="pull-right">
			                            <a href="#" class="btn btn-default btn-flat" onclick="return confirm('Apakah Anda Yakin Akan Keluar ?')">Logout</a>
			                        </div>
			                    </li>
			                </ul>
			            </li>
			        </ul>
                </div>
            </nav>
        </header>

        <div class="wrapper row-offcanvas row-offcanvas-left">
          <aside class="left-side sidebar-offcanvas">                
                <section class="sidebar">
			        <div class="user-panel">
			            <div class="pull-left image">
			                <img src="http://<?php echo base_url(); ?>/assets/img/avatar.png" class="img-circle" alt="User Image" />
			            </div>
			            <div class="pull-left info">
			                <p>Hi, Makan Yuk !?</p>
			    
			                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			            </div>
			        </div>

			        <ul class="sidebar-menu">
			            <li class="active">
			                <a href="http://<?php echo base_url(); ?>index.php/" title="Home">
			                	<span style="margin:0 3px 0 0;"><img src="http://<?php echo base_url(); ?>/assets/img/home.png" /></span>
			                    <span>Home</span>
			                </a>
			            </li>
			            <li>
			                <a href="http://<?php echo base_url(); ?>index.php/todo" title="To Do List">
			                	<span style="margin:0 3px 0 0;"><img src="http://<?php echo base_url(); ?>/assets/img/daftar.png" /></span>
			                    <span>To Do List</span>
			                </a>
			            </li>
			            <li>
			                <a href="http://<?php echo base_url(); ?>index.php/json" title="JSON To Do List">
			                	<span style="margin:0 3px 0 0;"><img src="http://<?php echo base_url(); ?>/assets/img/ouput.png" /></span>
			                    <span>JSON To Do List</span>
			                </a>
			            </li>
			            <li>
			                <a href="http://<?php echo base_url(); ?>index.php/about" title="About Us">
			                	<span style="margin:0 3px 0 0;"><img src="http://<?php echo base_url(); ?>/assets/img/about.png" /></span>
			                    <span>About Us</span>
			                </a>
			            </li>
			        </ul>
                </section>
            </aside>

          <aside class="right-side">                
	        <section class="content-header">
	            <h1>
	                <?php echo $title;?>
	                <small></small>
	            </h1>
	            <ol class="breadcrumb">
	                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	                <li class="active"><?php echo $title;?></li>
	            </ol>
	        </section>
	        <section class="content">
