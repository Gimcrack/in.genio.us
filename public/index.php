<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Ingenious Data Management Platform</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link href="assets/vendor/progresstracker/css/jquery.progresstracker.css" rel="stylesheet">
  <link href="assets/vendor/materialize/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="assets/vendor/materialize/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

	<!-- Loader -->
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>
	<!-- /Loader -->

  <!-- Nav Header -->
  <?php include('views/partials/header.blade.php'); ?>

  <div id="home">
    <div class="pt-section" data-name="Home" id="ptsection-one"></div>
  </div>


  <div id="hero" class="hero-bg01 valign-wrapper">
    <div class="header">
      <div class="container">
        <div class="hero-text valign">
          <div class="row">
            <!-- <h2 class="light white-text">Meet</h2> -->
            <div class="dark-giant-title">
              <h1 class="white-text text-lighten-2"><span class="text-highlight">ingenious</span></h1>
            </div>
            <h6 class="light black-text"><span>Data Management Platform</span></h6>
          </div>
          <div class="row">
            <a href="http://demo3.in.genio.us" id="download-button" class="btn-large waves-effect waves-light red lighten-1" target="_blank">Try it out </a>
          </div>
        </div>
      </div>
    </div>
    <!--<div class="parallax"><img src="assets/custom/images/furn01.jpg" alt="Unsplashed background img 1"></div>-->
  </div>

  <!-- remainder of site here -->

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="assets/vendor/materialize/js/materialize.js"></script>
  <script src="assets/vendor/progresstracker/js/jquery.progresstracker.js"></script>
  <script src="assets/vendor/materialize/js/init.js"></script>

  <!-- GA -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-40696437-8', 'auto');
    ga('send', 'pageview');

  </script>

  </body>
</html>
