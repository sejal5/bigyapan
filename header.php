<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Bigyapan Search</title>
    <!-- Bootstrap core CSS -->
    
    <!-- Bootstrap theme -->
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lora|Oswald" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Marvel' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Changa' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Antic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lekton' rel='stylesheet' type='text/css'>
     
    
    <?php wp_head();?>
    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  
  <body>
    <div class="tophead-mkks hidden-xs">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInLeft" data-wow-delay="0.4s">
            <p><i class="fa fa-phone" aria-hidden="true"></i> +977 980 000 0000</p>
          </div>
          <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
            <p><i class="fa fa-envelope" aria-hidden="true"></i> info@bigyapansearch.com</p>
          </div>
          <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInDown" data-wow-delay="0.4s">
            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Sun-Fri: 09:00 - 18:00</p>
          </div>
          <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInRight" data-wow-delay="0.4s">
            <ul class="social-icons">
              <li><a rel="nofollow" href="<?php echo cs_get_option( 'facebook' ); ?>" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
              <li><a rel="nofollow" href="<?php echo cs_get_option( 'twitter' ); ?>" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
              <li><a rel="nofollow" href="<?php echo cs_get_option( 'youtube' ); ?>" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
              <li><a rel="nofollow" href="<?php echo cs_get_option( 'google' ); ?>" class="social-icon"> <i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="main-tophead">
      <nav class="navbar navbar-custom" data-spy="affix" data-offset-top="20">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <?php
            $imageID = cs_get_option('logo_id');
            $attachments = wp_get_attachment_image_src($imageID,'720'); ?>
            <a class="navbar-brand" href="<?php echo get_home_url();?>"><img src="<?php echo $attachments[0];?>" class="img-responsive" alt="Bigyapan Search logo" /></a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
            <?php
            wp_nav_menu( array(
            'menu'              => 'primary',
            'theme_location'    => '',
            'depth'             => 2,
            'menu_class'        => 'nav navbar-nav',
            'container'         => 'ul',
            'fallback_cb'       => 'activello_wp_bootstrap_navwalker::fallback',
            'walker'            => new activello_wp_bootstrap_navwalker())
            );
            ?>
            
            </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
        </div>