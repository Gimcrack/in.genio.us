<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Materializer. The Material Design HTML5 Template</title>

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

  <header>
    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
      <li><a href="#userwords">Customer's words</a></li>
      <li><a href="#tutorial">Tutorial</a></li>
      <li><a href="#details">Details</a></li>
      <li><a href="#feedback">Feedback</a></li>
      <li><a href="#slider">Slider</a></li>
      <li><a href="#team">Team</a></li>
      <li class="divider"></li>
      <li><a href="#portfolio">Portfolio</a></li>
    </ul>

    <ul id="dropdown2" class="dropdown-content">
      <li><a href="index01.html">Fullscreen Slider</a></li>
      <li><a href="index02.html">Fullscreen Hero Image</a></li>
      <li><a href="index03.html">Hero Background Video</a></li>
    </ul>

    <!-- Main Nav -->
    <nav role="navigation" class="grey lighten-5">
      <div class="nav-wrapper container">
        <a href="#home" class="brand-logo red-text">ingenious</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#home">Home</a></li>
          <!-- Dropdown Trigger -->
          <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Layouts<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#about">About</a></li>
          <!-- Dropdown Trigger -->
          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Sections<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a href="http://crtv.mk/g0GhU" target="_blank">Buy this template</a></li>
        </ul>

        <!-- Mobile Menu -->
        <ul class="side-nav" id="mobile-demo">
          <li><a href="#home">Home</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#userwords">Customer's words</a></li>
          <li><a href="#tutorial">Tutorial</a></li>
          <li><a href="#details">Details</a></li>
          <li><a href="#feedback">Feedback</a></li>
          <li><a href="#slider">Slider</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="http://crtv.mk/g0GhU" target="_blank">Buy this template</a></li>
        </ul>
      </div>
    </nav>

  </header>

  <div id="home">
    <div class="pt-section" data-name="Home" id="ptsection-one"></div>
  </div>


  <div id="hero" class="hero-bg01 valign-wrapper">
    <div class="header">
      <div class="container">
        <div class="hero-text valign">
          <div class="row">
            <h2 class="light white-text">Introducing</h2>
            <div class="dark-giant-title">
              <h1 class="white-text text-lighten-2"><span class="text-highlight">ingenious</span></h1>
            </div>
            <h6 class="light black-text"><span>Data Management Platform</span></h6>
          </div>
          <div class="row">
            <a href="#about" id="download-button" class="btn-large waves-effect waves-light red lighten-1" target="_blank">Learn More</a>
          </div>
        </div>
      </div>
    </div>
    <!--<div class="parallax"><img src="assets/custom/images/furn01.jpg" alt="Unsplashed background img 1"></div>-->
  </div>



   <!-- Features Block -->
   <section id="features" class="t-block">
     <div class="row no-pad-bot pt-section" data-name="Features" id="ptsection-two">
       <div class="col s12 m6 l3 pink">
         <div class="content">
           <i class="material-icons">grade</i>
           <h5 class="white-text">Material Design</h5>
           <p class="white-text light">
             is a design language that combines the classic principles of successful design along with innovation and technology.
           </p>
         </div>
       </div>
       <div class="col s12 m6 l3 deep-purple">
         <div class="content">
           <i class="material-icons">settings</i>
           <h5 class="white-text">Metaphor</h5>
           <p class="white-text light">
             The metaphor of material defines the relationship between space and motion. The idea is that the technology is inspired...
           </p>
         </div>
       </div>
       <div class="col s12 m6 l3 red">
         <div class="content">
           <i class="material-icons">visibility</i>
           <h5 class="white-text">Intentional</h5>
           <p class="white-text light">
             Elements and components such as grids, typography, color, and imagery are not only visually pleasing, but also create a sense...
           </p>
         </div>
       </div>
       <div class="col s12 m6 l3 orange">
         <div class="content">
           <i class="material-icons">room</i>
           <h5 class="white-text">Motion</h5>
           <p class="white-text light">
             Motion allows the user to draw a parallel between what they see on the screen and in real life. By providing both feedback...
           </p>
         </div>
       </div>
     </div>
   </section>

   <!-- About Block -->
   <section id="about" class="white">
     <div class="container">
       <div class="section pt-section" data-name="About" id="ptsection-three">
         <!--   Icon Section   -->
         <div class="row">
           <div class="col s12 l4">
             <div class="icon-block">
               <h2 class="center red-text"><i class="material-icons">language</i></h2>
               <h4 class="center light">Design</h4>
               <p class="center light">
                 Curabitur eu nulla eget ligula laoreet auctor. Integer eu ultricies justo. Integer tortor nunc, tempor rutrum elementum vel, porttitor ac leo.
               </p>
             </div>
             <div class="divider4"></div>
           </div>

           <div class="col s12 l4">
             <div class="icon-block">
               <h2 class="center red-text"><i class="material-icons">chat_bubble_outline</i></h2>
               <h4 class="center light">Implementation</h4>
               <p class="center light">
                 Curabitur eu nulla eget ligula laoreet auctor. Integer eu ultricies justo. Integer tortor nunc, tempor rutrum elementum vel, porttitor ac leo.
               </p>
             </div>
             <div class="divider4"></div>
           </div>

           <div class="col s12 l4">
             <div class="icon-block">
               <h2 class="center red-text"><i class="material-icons">track_changes</i></h2>
               <h4 class="center light">Feedback</h4>
               <p class="center light">
                 Curabitur eu nulla eget ligula laoreet auctor. Integer eu ultricies justo. Integer tortor nunc, tempor rutrum elementum vel, porttitor ac leo.
               </p>
             </div>
             <div class="divider4"></div>
           </div>
         </div>

         <div class="row center">
           <a href="http://crtv.mk/g0GhU" id="download-button" class="btn-large waves-effect waves-light red lighten-1" target="_blank">Buy The Materializer Template</a>
         </div>

       </div>
     </div>
   </section>


   <!-- Customers Block -->
   <section id="userwords" class="">
     <div class="parallax-container valign-wrapper">
       <div class="section valign pt-section" data-name="Clients" id="ptsection-four">
         <div class="container">
           <div class="row center">

             <h3 class="white-text center light">Customer's Words</h3>
             <p class="center light">What our Customers are telling about us</p>
             <div class="divider4"></div>

             <div class="col s12 m12 l6">
               <div class="card-panel grey lighten-4 z-depth-1 hoverable">
                 <div class="row">
                   <div class="col s4 center">
                     <div><img src="assets/custom/images/userpic01.jpg" alt="" class="circle responsive-img"></div>
                     <div><h6 class="black-text light">Julia Kann</h6></div>
                   </div>
                   <div class="col s8 left-align">
                     <span class="red-text">"Exellent..."</span>
                     <p class="black-text">
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer euismod suscipit massa at egestas. Vestibulum elementum libero et arcu dictum tincidunt. Maecenas id rhoncus urna.
                     </p>
                   </div>
                 </div>
               </div>
             </div>
             <div class="col s12 m12 l6">
               <div class="card-panel grey lighten-4 z-depth-1 hoverable">
                 <div class="row">
                   <div class="col s4 center">
                     <div><img src="assets/custom/images/userpic02.jpg" alt="" class="circle responsive-img"></div>
                     <div><h6 class="black-text light">Masha Weil</h6></div>
                   </div>
                   <div class="col s8 left-align">
                     <span class="red-text">"100% Satisfied..."</span>
                     <p class="black-text">
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer euismod suscipit massa at egestas. Vestibulum elementum libero et arcu dictum tincidunt. Maecenas id rhoncus urna.
                     </p>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="row center">
             <div class="col m12">
               <a class="btn-floating btn-large waves-effect waves-light red" href="#feedback"><i class="material-icons">add</i></a>
             </div>
           </div>
         </div>
       </div>
       <div class="parallax"><img src="assets/custom/images/poly-bg03.jpg" alt="Unsplashed background img 3"></div>
     </div>
   </section>


   <!-- Tutorial Block -->
   <section id="tutorial" class="cyan darken-3">
     <div class="section pt-section" data-name="Tutorial" id="ptsection-five">
       <div class="container">
         <div class="row">

           <div class="col s12 m12 l5">
             <h3 class="light white-text">Set your Support</h3>
             <p class="light white-text">
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
             </p>
             <div class="row">
               <div class="divider1"></div>
               <div class="col s12 m6">
                 <h5 class="white-text light">Extra level</h5>
                 <div class="switch">
                   <label class="grey-text text-lighten-2">
                     Off
                     <input type="checkbox">
                     <span class="lever"></span>
                     On
                   </label>
                 </div>
                 <p class="grey-text text-lighten-1 light">Curabitur eu nulla eget ligula laoreet auctor</p>
               </div>
               <div class="col s12 m6">
                 <h5 class="white-text light">Premium feature</h5>
                 <div class="switch">
                   <label class="grey-text text-lighten-2">
                     Off
                     <input type="checkbox">
                     <span class="lever"></span>
                     On
                   </label>
                 </div>
                 <p class="grey-text text-lighten-1 light">Curabitur eu nulla eget ligula laoreet auctor</p>
               </div>
             </div>

             <a class="waves-effect waves-light btn btn-large orange" href="#feedback">Get Help</a>

             <div class="divider4"></div>

           </div>

           <div class="col s12 m12 l7">
             <div class="video-container no-controls">
               <div class="youtube-container">
                 <div class="youtube-player" data-id="iIQ6VqFEN0o"></div>
               </div>
             </div>
           </div>

         </div>
       </div>
     </div>
   </section>


   <!-- Details Block -->
   <section id="details" class="white">
     <div class="container">
       <div class="section pt-section" data-name="Details" id="ptsection-six">


         <div class="row">

           <h3 class="light center cyan-text text-darken-3">Our Services</h3>
           <p class="center light">What we offer to our Customers. Brief list.</p>
           <div class="divider4"></div>

           <div class="col s12 l4">
             <div class="row">
               <div class="col s12 m2 l3 icon-block">
                 <h2 class="cyan-text text-darken-3"><i class="material-icons">language</i></h2>
               </div>
               <div class="col s12 m10 l9">
                 <h5 class="">Hi-end Design</h5>
                 <p class="light">
                   Curabitur eu nulla eget ligula laoreet auctor. Integer eu ultricies justo. Integer tortor nunc, tempor rutrum elementum vel, porttitor ac leo.
                 </p>
                 <i class="material-icons teal-text">trending_flat</i>
                 <a href="" class="grey-text m-inline light">Learn more</a>
               </div>
             </div>
             <div class="divider2"></div>
           </div>

           <div class="col s12 l4">
             <div class="row">
               <div class="col s12 m2 l3 icon-block">
                 <h2 class="cyan-text text-darken-3"><i class="material-icons">track_changes</i></h2>
               </div>
               <div class="col s12 m10 l9">
                 <h5 class="">Implementation</h5>
                 <p class="light">
                   Curabitur eu nulla eget ligula laoreet auctor. Integer eu ultricies justo. Integer tortor nunc, tempor rutrum elementum vel, porttitor ac leo.
                 </p>
                 <i class="material-icons teal-text">trending_flat</i>
                 <a href="" class="grey-text m-inline light">Learn more</a>
               </div>
             </div>
             <div class="divider2"></div>
           </div>

           <div class="col s12 l4">
             <div class="row">
               <div class="col s12 m2 l3 icon-block">
                 <h2 class="cyan-text text-darken-3"><i class="material-icons">chat_bubble_outline</i></h2>
               </div>
               <div class="col s12 m10 l9">
                 <h5 class="">Support</h5>
                 <p class="light">
                   Curabitur eu nulla eget ligula laoreet auctor. Integer eu ultricies justo. Integer tortor nunc, tempor rutrum elementum vel, porttitor ac leo.
                 </p>
                 <i class="material-icons teal-text">trending_flat</i>
                 <a href="" class="grey-text m-inline light">Learn more</a>
               </div>
             </div>
             <div class="divider2"></div>
           </div>

         </div>

         <div class="row">

           <div class="col s12 l4">
             <div class="row">
               <div class="col s12 m2 l3 icon-block">
                 <h2 class="cyan-text text-darken-3"><i class="material-icons">schedule</i></h2>
               </div>
               <div class="col s12 m10 l9">
                 <h5 class="">Compatibility</h5>
                 <p class="light">
                   Curabitur eu nulla eget ligula laoreet auctor. Integer eu ultricies justo. Integer tortor nunc, tempor rutrum elementum vel, porttitor ac leo.
                 </p>
                 <i class="material-icons teal-text">trending_flat</i>
                 <a href="" class="grey-text m-inline light">Learn more</a>
               </div>
             </div>
             <div class="divider2"></div>
           </div>

           <div class="col s12 l4">
             <div class="row">
               <div class="col s12 m2 l3 icon-block">
                 <h2 class="cyan-text text-darken-3"><i class="material-icons">lock_outline</i></h2>
               </div>
               <div class="col s12 m10 l9">
                 <h5 class="">Safety</h5>
                 <p class="light">
                   Curabitur eu nulla eget ligula laoreet auctor. Integer eu ultricies justo. Integer tortor nunc, tempor rutrum elementum vel, porttitor ac leo.
                 </p>
                 <i class="material-icons teal-text">trending_flat</i>
                 <a href="" class="grey-text m-inline light">Learn more</a>
               </div>
             </div>
             <div class="divider2"></div>
           </div>

           <div class="col s12 l4">
             <div class="row">
               <div class="col s12 m2 l3 icon-block">
                 <h2 class="cyan-text text-darken-3"><i class="material-icons">repeat</i></h2>
               </div>
               <div class="col s12 m10 l9">
                 <h5 class="">Violatility</h5>
                 <p class="light">
                   Curabitur eu nulla eget ligula laoreet auctor. Integer eu ultricies justo. Integer tortor nunc, tempor rutrum elementum vel, porttitor ac leo.
                 </p>
                 <i class="material-icons teal-text">trending_flat</i>
                 <a href="" class="grey-text m-inline light">Learn more</a>
               </div>
             </div>
             <div class="divider2"></div>
           </div>

         </div>

       </div>
     </div>
   </section>


   <!-- Showcase Block -->
   <section id="showcase" class="parallax-container valign-wrapper">
     <div class="section">
       <div class="container">
         <div class="row">
           <div class="col s12">
             <h3 class="white-text light center">The Showcase</h3>
             <p class="center white-text light">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
           </div>
         </div>

         <div class="row">

           <div class="divider2"></div>

           <div class="col s6 m3 l3">
             <div class="card">
               <div class="card-image waves-effect waves-block waves-light">
                 <img class="activator" src="assets/custom/images/text01.jpg">
               </div>
               <div class="card-content">
                 <span class="card-title activator grey-text text-darken-4">Glass</span>
                 <div class="divider1"></div>
                 <p class="black-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
               </div>
             </div>
             <div class="divider2"></div>
           </div>

           <div class="col s6 m3 l3">
             <div class="card">
               <div class="card-image waves-effect waves-block waves-light">
                 <img class="activator" src="assets/custom/images/text02.jpg">
               </div>
               <div class="card-content">
                 <span class="card-title activator grey-text text-darken-4">Wood</span>
                 <div class="divider1"></div>
                 <p class="black-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
               </div>
             </div>
             <div class="divider2"></div>
           </div>

           <div class="col s6 m3 l3">
             <div class="card">
               <div class="card-image waves-effect waves-block waves-light">
                 <img class="activator" src="assets/custom/images/text03.jpg">
               </div>
               <div class="card-content">
                 <span class="card-title activator grey-text text-darken-4">Leather</span>
                 <div class="divider1"></div>
                 <p class="black-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
               </div>
             </div>
             <div class="divider2"></div>
           </div>

           <div class="col s6 m3 l3">
             <div class="card">
               <div class="card-image waves-effect waves-block waves-light">
                 <img class="activator" src="assets/custom/images/text04.jpg">
               </div>
               <div class="card-content">
                 <span class="card-title activator grey-text text-darken-4">Steel</span>
                 <div class="divider1"></div>
                 <p class="black-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
               </div>
             </div>
             <div class="divider2"></div>
           </div>

         </div>
       </div>
     </div>
     <div class="parallax"><img src="assets/custom/images/poly-bg01.jpg" alt="Unsplashed background img 2"></div>
   </section>


   <section id="portfolio-01" class="white">
     <div class="container">
       <div class="row">

         <h3 class="light center black-text">Work in Progress</h3>
         <p class="center light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
         <div class="divider4"></div>

         <div class="divider4"></div>

         <div class="col s12 m3 center">
           <img src="assets/custom/images/m-bg06.jpg" class="responsive-img materialboxed hoverable circle" data-caption="A picture of some deer and tons of trees">
           <div class="divider2"></div>
           <h5 class="black-text fw-500">Vvoghts Villa</h5>
           <h6 class="grey-text light">>Interior Design</h6>

           <p class="light">
             Lorem ipsum dolor sit amet, consectetur adipiscing elit.
           </p>

           <div class="divider4"></div>
         </div>
         <div class="col s12 m3 center">
           <img src="assets/custom/images/m-bg07.jpg" class="responsive-img materialboxed hoverable circle" data-caption="A picture of some deer and tons of trees">
           <div class="divider2"></div>
           <h5 class="black-text fw-500">Cafe D'Light</h5>
           <h6 class="grey-text light"></i>Architecture</h6>

           <p class="light">
             Lorem ipsum dolor sit amet, consectetur adipiscing elit.
           </p>

           <div class="divider4"></div>
         </div>
         <div class="col s12 m3 center">
           <img src="assets/custom/images/m-bg08.jpg" class="responsive-img materialboxed hoverable circle" data-caption="A picture of some deer and tons of trees">
           <div class="divider2"></div>
           <h5 class="black-text fw-500">Furniture</h5>
           <h6 class="grey-text light">Product Design</h6>

           <p class="light">
             Lorem ipsum dolor sit amet, consectetur adipiscing elit.
           </p>

           <div class="divider4"></div>
         </div>
         <div class="col s12 m3 center">
           <img src="assets/custom/images/m-bg09.jpg" class="responsive-img materialboxed hoverable circle" data-caption="A picture of some deer and tons of trees">
           <div class="divider2"></div>
           <h5 class="black-text fw-500">Features</h5>
           <h6 class="grey-text light">Light Design</h6>

           <p class="light">
             Lorem ipsum dolor sit amet, consectetur adipiscing elit.
           </p>

         </div>
       </div>
     </div>
   </section>


   <!-- Feedback Block -->
   <section id="feedback" class="blue-grey darken-3">
     <div class="section pt-section" data-name="Contacts" id="ptsection-seven">
       <div class="container">
         <h3 class="center light white-text">Contact Us</h3>
         <p class="center  white-text light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
         <div class="divider4"></div>
         <div class="row">
           <div class="col s12 m12 l6">&nbsp;
             <div class="embed-responsive embed-responsive-4by3">
               <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387157.48218081944!2d-73.97968099999999!3d40.703312749999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2z0J3RjNGOLdCZ0L7RgNC6LCDQodCo0JA!5e0!3m2!1sru!2s!4v1437846920201" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
             </div>
             <div class="divider4"></div>
           </div>
           <form class="col s12 m12 l5 offset-l1">
             <div class="row">
               <div class="input-field col s12 m6">
                 <input id="first_name" type="text" class="validate" length="10">
                 <label for="first_name">First Name</label>
               </div>
               <div class="input-field col s12 m6">
                 <input id="last_name" type="text" class="validate" length="10">
                 <label for="last_name">Last Name</label>
               </div>
             </div>
             <div class="row">
               <div class="input-field col s12">
                 <input id="email" type="email" class="validate">
                 <label for="email">Email</label>
               </div>
             </div>
             <div class="row">
               <div class="input-field col s12 m6">
                 <input id="input_text" type="text" length="10">
                 <label for="input_text">Message theme</label>
               </div>
             </div>
             <div class="row">
               <div class="input-field col s12">
                 <textarea id="textarea1" class="materialize-textarea" length="120"></textarea>
                 <label for="textarea1">Message Text</label>
               </div>
             </div>
             <button class="btn btn-large waves-effect waves-light orange" type="submit" name="#!">Submit</button>
           </form>
         </div>
       </div>
     </div>
   </section>


   <!-- Team Block -->
   <section id="team" class="parallax-container">
     <div class="section pt-section" data-name="Team" id="ptsection-eight">
       <div class="container">
         <div class="row">
           <h3 class="white-text light center">Amazing Team</h3>
           <p class="center white-text light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
           <div class="divider4"></div>

           <div class="col s12 m6 l3">
             <div class="card hoverable">
               <div class="card-image waves-effect waves-block waves-light">
                 <img class="activator" src="assets/custom/images/teampic04.jpg">
               </div>
               <div class="card-content">
                 <span class="card-title activator grey-text text-darken-4 light">Mark Grow<i class="material-icons right">more_vert</i></span>
                 <p class="light grey-text">CEO</p>
               </div>
               <div class="card-reveal">
                 <span class="card-title grey-text text-darken-4">Mark Grey<i class="material-icons right">close</i></span>
                 <p class="grey-text text-darken-4 light">
                   Maecenas nec commodo purus. Cras id dictum ex. Praesent mollis, nibh sed ultricies sollicitudin.
                 </p>
                 <ul class="socials valign-wrapper">
                   <li class="valign"><a href="#!"><i class="fa fa-facebook-official"></i></a></li>
                   <li class="valign"><a href="#!"><i class="fa fa-linkedin-square"></i></a></li>
                   <li class="valign"><a href="#!"><i class="fa fa-instagram"></i></a></li>
                 </ul>
               </div>
             </div>
           </div>
           <div class="col s12 m6 l3">
             <div class="card hoverable">
               <div class="card-image waves-effect waves-block waves-light">
                 <img class="activator" src="assets/custom/images/teampic03.jpg">
               </div>
               <div class="card-content">
                 <span class="card-title activator grey-text text-darken-4 light">Matt Heiss<i class="material-icons right">more_vert</i></span>
                 <p class="light grey-text">Art-Director</p>
                 <!--<p><a href="#">This is a link</a></p>-->
               </div>
               <div class="card-reveal">
                 <span class="card-title grey-text text-darken-4">Matt Heiss<i class="material-icons right">close</i></span>
                 <p class="grey-text text-darken-4 light">
                   Maecenas nec commodo purus. Cras id dictum ex. Praesent mollis, nibh sed ultricies sollicitudin.
                 </p>
                 <ul class="socials valign-wrapper">
                   <li class="valign"><a href="#!"><i class="fa fa-facebook-official"></i></a></li>
                   <li class="valign"><a href="#!"><i class="fa fa-linkedin-square"></i></a></li>
                   <li class="valign"><a href="#!"><i class="fa fa-instagram"></i></a></li>
                 </ul>
               </div>
             </div>
           </div>
           <div class="col s12 m6 l3">
             <div class="card hoverable">
               <div class="card-image waves-effect waves-block waves-light">
                 <img class="activator" src="assets/custom/images/teampic01.jpg">
               </div>
               <div class="card-content">
                 <span class="card-title activator grey-text text-darken-4 light">Anne Stitz<i class="material-icons right">more_vert</i></span>
                 <p class="light grey-text">Designer</p>
                 <!--<p><a href="#">This is a link</a></p>-->
               </div>
               <div class="card-reveal">
                 <span class="card-title grey-text text-darken-4">Anne Stitz<i class="material-icons right">close</i></span>
                 <p class="grey-text text-darken-4 light">
                   Maecenas nec commodo purus. Cras id dictum ex. Praesent mollis, nibh sed ultricies sollicitudin.
                 </p>
                 <ul class="socials valign-wrapper">
                   <li class="valign"><a href="#!"><i class="fa fa-facebook-official"></i></a></li>
                   <li class="valign"><a href="#!"><i class="fa fa-linkedin-square"></i></a></li>
                   <li class="valign"><a href="#!"><i class="fa fa-instagram"></i></a></li>
                 </ul>
               </div>
             </div>
           </div>
           <div class="col s12 m6 l3">
             <div class="card hoverable">
               <div class="card-image waves-effect waves-block waves-light">
                 <img class="activator" src="assets/custom/images/teampic02.jpg">
               </div>
               <div class="card-content">
                 <span class="card-title activator grey-text text-darken-4 light">Udo Guess<i class="material-icons right">more_vert</i></span>
                 <p class="light grey-text">Manager</p>
                 <!--<p><a href="#">This is a link</a></p>-->
               </div>
               <div class="card-reveal">
                 <span class="card-title grey-text text-darken-4">Udo Guess<i class="material-icons right">close</i></span>
                 <p class="grey-text text-darken-4 light">
                   Maecenas nec commodo purus. Cras id dictum ex. Praesent mollis, nibh sed ultricies sollicitudin.
                 </p>
                 <ul class="socials valign-wrapper">
                   <li class="valign"><a href="#!"><i class="fa fa-facebook-official"></i></a></li>
                   <li class="valign"><a href="#!"><i class="fa fa-linkedin-square"></i></a></li>
                   <li class="valign"><a href="#!"><i class="fa fa-instagram"></i></a></li>
                 </ul>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="parallax"><img src="assets/custom/images/poly-bg01.jpg" alt="Unsplashed background img 2"></div>
   </section>


   <!-- Pricing Tables Block -->
   <section id="pricing" class="blue-grey darken-3">
     <div class="section pt-section" data-name="pricing">
       <div class="container">
         <div class="row">

           <h3 class="light center white-text">Our Prices</h3>
           <p class="center light white-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
           <div class="divider4"></div>

           <div class="col s12 m6 l3">
             <div class="pricing plain z-depth-1 hoverable">
               <div class="price-attrs">
                 <div class="price-number blue-grey-text text-darken-3">01</div>
                 <div class="price-plan"><strong>Trial</strong></div>
                 <div class="price-descr"><strong>Free</strong> for 25 days</div>
                 <div class="price-conclusion">Ideal for Freelancers</div>
               </div>

               <ul>
                 <li>5 Web Sites</li>
                 <li>10 Gb Disk Space</li>
                 <li>10 E-mail Boxes</li>
               </ul>

               <button type="button" class="waves-effect waves-light btn blue-grey darken-2 center">Sign Up</button>

             </div>
             <div class="divider4"></div>
           </div>
           <div class="col s12 m6 l3">
             <div class="pricing plain z-depth-1 hoverable">
               <div class="price-attrs">
                 <div class="price-number blue-grey-text text-darken-3">02</div>
                 <div class="price-plan"><strong>Start</strong></div>
                 <div class="price-descr"><strong>$24.99</strong> per month</div>
                 <div class="price-conclusion">Ideal for Small Teams</div>
               </div>

               <ul>
                 <li>5 Web Sites</li>
                 <li>10 Gb Disk Space</li>
                 <li>10 E-mail Boxes</li>
               </ul>

               <button type="button" class="waves-effect waves-light btn blue-grey darken-2 center">Sign Up</button>

             </div>
             <div class="divider4"></div>
           </div>
           <div class="col s12 m6 l3">
             <div class="pricing proposal z-depth-2 hoverable">
               <div class="price-attrs">
                 <div class="price-number">03</div>
                 <div class="price-plan"><strong>Business</strong></div>
                 <div class="price-descr"><strong>$49.99</strong> per month</div>
                 <div class="price-conclusion">Ideal for Companies</div>
               </div>

               <ul>
                 <li>5 Web Sites</li>
                 <li>10 Gb Disk Space</li>
                 <li>10 E-mail Boxes</li>
               </ul>

               <button type="button" class="waves-effect waves-light btn red center">Sign Up</button>

             </div>
             <div class="divider4"></div>
           </div>
           <div class="col s12 m6 l3">
             <div class="pricing plain z-depth-1 hoverable">
               <div class="price-attrs">
                 <div class="price-number blue-grey-text text-darken3">04</div>
                 <div class="price-plan"><strong>De Luxe</strong></div>
                 <div class="price-descr"><strong>$99.99</strong> per month</div>
                 <div class="price-conclusion">For Big Companies</div>
               </div>

               <ul>
                 <li>5 Web Sites</li>
                 <li>10 Gb Disk Space</li>
                 <li>10 E-mail Boxes</li>
               </ul>

               <button type="button" class="waves-effect waves-light btn blue-grey darken-2 center">Sign Up</button>

             </div>
             <div class="divider4"></div>
           </div>
         </div>
       </div>
     </div>
   </section>

   <!-- Portfolio Block -->
   <section id="portfolio" class="parallax-container">
     <div class="section pt-section" data-name="Portfolio" id="ptsection-nine">

       <div class="container">
         <div class="row">

           <h3 class="light center white-text">Featured Projects</h3>
           <p class="center light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
           <div class="divider4"></div>

           <div class="col s12 m6">
             <img src="assets/custom/images/m-bg01.jpg" class="responsive-img materialboxed" data-caption="A picture of some deer and tons of trees">
             <div class="divider1-5"></div>
           </div>

           <div class="col s12 m6">
             <div class="row no-pad-bot">
               <div class="col s12 m6">
                 <img src="assets/custom/images/m-bg03.jpg" class="responsive-img materialboxed" data-caption="A picture of some deer and tons of trees">
                 <div class="divider1-5"></div>
               </div>
               <div class="col s12 m6">
                 <img src="assets/custom/images/m-bg05.jpg" class="responsive-img materialboxed" data-caption="A picture of some deer and tons of trees">
                 <div class="divider1-5"></div>
               </div>
             </div>
             <div class="row no-pad-bot">
               <div class="col s12 m6">
                 <img src="assets/custom/images/m-bg02.jpg" class="responsive-img materialboxed" data-caption="A picture of some deer and tons of trees">
                 <div class="divider1-5"></div>
               </div>
               <div class="col s12 m6">
                 <img src="assets/custom/images/m-bg04.jpg" class="responsive-img materialboxed" data-caption="A picture of some deer and tons of trees">
                 <div class="divider1-5"></div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="parallax"><img src="assets/custom/images/f-bg04-01.jpg" alt="Unsplashed background img 2"></div>
   </section>



   <!-- Footer -->
   <footer class="page-footer blue-grey darken-3">
     <!-- Ontop link -->
     <a href="#home" class="white-text">
       <div id="ontop" class="blue-grey darken-2 center">
         <div class="top-arr center-align">
           <i class="fa fa-long-arrow-up white-text"></i>
         </div>
       </div>
     </a>

     <div class="footer-menu">
       <div class="container">
         <div class="row">
           <div class="col l6 s12">
             <h5 class="white-text">Materializer</h5>
             <p class="grey-text text-lighten-1 light">'Materializer' is a HTML landing page template designed within Google's Material Design guidelines. The responsive One Page template comes with 3 header options: Hero image, Slideshow or Video background. Other features include sticky header with smooth scroll within the long page, 200 vector scalable icons, background parallax scrolling effect in some sections, embedded Lightbox gallery and a contact form with validation.</p>
           </div>
           <div class="col l2 s12">
             <h6 class="white-text light">Categories</h6>
             <ul>
               <li><a class="grey-text text-lighten-1 light" href="#!">Header</a></li>
               <li><a class="grey-text text-lighten-1 light" href="#!">Featured Works</a></li>
               <li><a class="grey-text text-lighten-1 light" href="#!">Featured Portfilio</a></li>
               <li><a class="grey-text text-lighten-1 light" href="#!">Team</a></li>
               <li><a class="grey-text text-lighten-1 light" href="#!">Store</a></li>
             </ul>
           </div>
           <div class="col l2 s12">
             <h6 class="white-text light">Neuethemes</h6>
             <ul>
               <li><a class="grey-text text-lighten-1 light" href="http://neuethemes.net" target="_blank">Official Site</a></li>
               <li><a class="grey-text text-lighten-1 light" href="https://creativemarket.com/neuethemes" target="_blank">CreativeMarket profile</a></li>
               <li><a class="grey-text text-lighten-1 light" href="http://crtv.mk/g0GhU" target="_blank">Materialzer page on CM</a></li>
               <li><a class="grey-text text-lighten-1 light" href="http://crtv.mk/d08Nj" target="_blank">Electronic WP Theme</a></li>
             </ul>
           </div>
           <div class="col l2 s12">
             <h6 class="white-text light">Follow Us</h6>
             <ul>
               <li><a class="grey-text text-lighten-1 light" href="http://plus.google.com/+NeuethemesNetWordPress" target="_blank">Google Plus</a></li>
               <li><a class="grey-text text-lighten-1 light" href="https://twitter.com/the_neuethemes" target="_blank">Twitter</a></li>
               <li><a class="grey-text text-lighten-1 light" href="http://www.facebook.com/people/@/facebook.com/neuethemes" target="_blank">Facebook</a></li>
             </ul>
           </div>
         </div>
       </div>
     </div>
     <div class="footer-copyright blue-grey darken-4">
       <div class="container">
         Made by <a class="grey-text text-lighten-3" href="http://neuethemes.net">Neuethemes</a>
       </div>
     </div>
   </footer>


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
