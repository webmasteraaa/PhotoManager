<?php

//Check authentication

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Photo Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A simple photo manager site">
    <meta name="author" content="David Woodruff">

    <!-- STYLES -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/photo-manager.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <!-------------------------------------------------------------------------->
    <!-------------------------------HEADER BAR--------------------------------->
    <!-------------------------------------------------------------------------->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Photo Manager</a>
          <div class="pull-right">
            <a class="btn" href="#">Sign in</a>
          </div>
          <!--/.nav-collapse -->
        </div>
      </div>
    </div>
      
    <!-------------------------------------------------------------------------->
    <!----------------------------------ALERTS---------------------------------->
    <!-------------------------------------------------------------------------->
    <div class="container-fluid">
        <div id="alertArea" class="row-fluid" style='display:none;'>
            <!--Alerts are rendered using JS templating-->
        </div>
    </div>
    
    
    <!-------------------------------------------------------------------------->
    <!--------------------------MAIN PAGE CONTENT------------------------------->
    <!-------------------------------------------------------------------------->
    <div id="mainContent" class="container-fluid">
        <div class="hero-unit">
            <h1>Welcome to Photo Manager</h1>
            <p>
                Photo manager is a dynamic web application to manage and share your photos.
            </p>
            <p>
                <a class="btn btn-primary btn-large">Sign up</a>
            </p>
        </div>
        <div class="row">
            <div class="span4">
                <h2>Store and manage your photos online</h2>
                <p>Some text here about how this application is really cool and will change your life</p>
            </div>
            <div class="span8">
                <div id="homeCarousel" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="img/Hydrangeas.jpg">
                        </div>
                        <div class="item">
                            <img src="img/Desert.jpg">
                        </div>
                        <div class="item">
                            <img src="img/Jellyfish.jpg">
                        </div>
                    </div>
                    <a class="carousel-control left" href="#homeCarousel" data-slide="prev">&lsaquo;</a>
                    <a class="carousel-control right" href="#homeCarousel" data-slide="next">&rsaquo;</a>
                </div>
            </div>
        </div>
    </div><!--/.fluid-container-->
    
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="lib/jquery-1.8.0.js"></script>
    <script src="lib/underscore.js"></script>
    <script src="lib/backbone.js"></script>
    <script src="lib/bootstrap-alert.js"></script>
    <script src="lib/bootstrap-modal.js"></script>
    <script src="lib/bootstrap-dropdown.js"></script>
    <script src="lib/bootstrap-scrollspy.js"></script>
    <script src="lib/bootstrap-tab.js"></script>
    <script src="lib/bootstrap-tooltip.js"></script>
    <script src="lib/bootstrap-popover.js"></script>
    <script src="lib/bootstrap-button.js"></script>
    <script src="lib/bootstrap-collapse.js"></script>
    <script src="lib/bootstrap-carousel.js"></script>
    <script src="lib/bootstrap-typeahead.js"></script>
    <script src="js/utils.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
           //Stuff goes here 
        });
    </script>
    <!-- MAIN -->
</html>
