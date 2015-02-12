
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>


    <!-- CSS -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_enqueue_script("jquery"); ?>
  <?php wp_head(); ?>
  </head>

  <body>

    
    <div class="container">
      <div class="row header">


        <div class="col-sm-4 logo">
          <a href="index.php"><img src="<?php bloginfo('template_directory'); ?>/img/sleepytimelogo.png" alt="Sleepytime Logo"></a>
        </div>

        <div class="col-xs-6 visible-xs social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>

        <div class="col-sm-8 col-xs-6 company-logos">
          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/yewskate.png" alt="Sleepytime Logo" class="yewskate-logo"></a>
          <img src="<?php bloginfo('template_directory'); ?>/img/ohmy.png" alt="Sleepytime Logo" class="ohmy-logo">
          
        </div>

      </div>
      <nav class="navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <i class="fa fa-list"></i>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="store.php">Store</a></li>
              <!--?php wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?
              DYNAMIC NAV CODE FOR pAGE LINKS
              -->
          </ul>

          <ul class="nav navbar-nav navbar-right hidden-xs">
              <li><a href="store.php"><i class="fa fa-facebook"></i></a></li>
              <li><a href="store.php"><i class="fa fa-twitter"></i></a></li>
              <li><a href="store.php"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav> 
    </div>

    <div class="container">



