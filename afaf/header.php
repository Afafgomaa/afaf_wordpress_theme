<?php require_once('wp-bootstrap-navwalker.php')?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php  bloginfo('charset')?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>
      <?php  wp_title('||',  true, 'right');?>
      <?php  bloginfo('name');?>
        
    </title>
		<link rel="pingback" href="<?php bloginfo('pingback_url');?>"/>
		<?php wp_head();?>
	</head>
	<body>


<nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

              <?php 

              wp_nav_menu(array(
             'theme_location' => 'main_menu',
             'menu_class' => 'nav navbar-nav',
             'container' => false,
             'depth' => 0,
             'walker' => new wp_bootstrap_navwalker(),
             

         ));?>
             	<form class="form-inline my-2 my-lg-0 push-right d-sm-none d-md-block">
      <input class="form-control mr-sm-2 visible-sm-block, hidden-sm" type="search" placeholder="Search" aria-label="Search"><i class="fa fa-search "></i>
    </form>
    </div><!-- /.navbar-collapse -->
 
  </div><!-- /.container-fluid -->
</nav>

