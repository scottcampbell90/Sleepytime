
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


    <script type="text/javascript">
      var ShopifyStoreConfig = {shop:"yew-skateboards.myshopify.com", collections:[24558733,13457681,14819861,13425041]};
      (function() {
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; 
        s.src = "//widgets.shopifyapps.com/assets/shopifystore.js";
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
      })();  
    </script>
    <noscript>Please enable javascript, or <a href="http://yew-skateboards.myshopify.com">click here</a> to visit my <a href="http://www.shopify.com/tour/ecommerce-website">ecommerce web site</a> powered by Shopify.</noscript>



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
            <a href="https://www.facebook.com/sleepytimedistribution"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/Sleepytimedist"><i class="fa fa-twitter"></i></a>
            <a href="https://instagram.com/sleepytimedist"><i class="fa fa-instagram"></i></a>
            <a href="http://sleepytimedist.tumblr.com/"><i class="fa fa-tumblr"></i></a>
        </div>

        <div class="col-sm-8 col-xs-6 company-logos">
          <a href=""><img src="<?php bloginfo('template_directory'); ?>/img/yewskate.png" alt="Sleepytime Logo" class="yewskate-logo"></a>
          <a href=""><img src="<?php bloginfo('template_directory'); ?>/img/ohmy.png" alt="Sleepytime Logo" class="ohmy-logo"></a>
          
        </div>

      </div>
      <nav class="navbar">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <i class="fa fa-list"></i>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="#shopify-store">Store</a></li>
              <!--?php wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?
              DYNAMIC NAV CODE FOR pAGE LINKS
              -->
          </ul>

          <ul class="nav navbar-nav navbar-right hidden-xs">
              <li><a href="https://www.facebook.com/sleepytimedistribution"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/Sleepytimedist"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://instagram.com/sleepytimedist"><i class="fa fa-instagram"></i></a></li>
              <li><a href="http://sleepytimedist.tumblr.com/"><i class="fa fa-tumblr"></i></a></li>
          </ul>
        </div><!--/.navbar-collapse -->

    </nav> 
    </div>




<div class="container">
