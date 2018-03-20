<!DOCTYPE HTML>
<html>
   <head>
      <title>&copy;Clément Castel</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
      <link rel="stylesheet" href="assets/css/main.css" />
      <!--[if lte IE 8]>
      <link rel="stylesheet" href="assets/css/ie8.css" />
      <![endif]-->
   </head>
   <body>
      <!-- Header -->
      <section id="header">
         <header>
            <img src="images/pic01.png" height="400"/>
            <p>WEB developer / Coder<br />Front & Back End Dev<br />HTML / CSS / PHP / MySQL / JS / AJAX</p>
         </header>
         <footer><a href="#banner" class="button style2 scrolly-middle">Obtenir plus d'informations</a></footer>
      </section>
      <!-- Banner -->
      <section id="banner">
         <header>
            <h2>Skills</h2>
         </header>
         <p>Young amater developer, I learn and develop into web languages<br />
         <p>HTML</p>
         <div class="containers">
            <div class="skills html">95%</div>
         </div>
         <p>WORDPRESS</p>
         <div class="containers">
            <div class="skills wordpress">95%</div>
         </div>
         <p>PHP</p>
         <div class="containers">
            <div class="skills php">90%</div>
         </div>
         <p>CSS</p>
         <div class="containers">
            <div class="skills css">70%</div>
         </div>
         <p>JavaScript</p>
         <div class="containers">
            <div class="skills js">40%</div>
         </div>
         </p>
         <footer><a href="#first" class="button style2 scrolly">Ongoing Project</a></footer>
      </section>
      <!-- Feature 1 -->
      <article id="first" class="container box style1 right">
         <a href="https://kelou.fr" class="image fit"><img src="images/aper-fr.png" alt="kelou.fr" /></a>
         <div class="inner">
            <header>
               <h2>Kelou.fr<br />French Blog</h2>
            </header>
            <p>French blog about video games, science, cinema and a lot of tutorial. I started this project in may 2017 and I have a lot of idea for the future. This is actually my main project.
         </div>
      </article>
      <!-- Feature 2 -->
      <article class="container box style1 left">
         <a href="http://foto.kelou.ml/" class="image fit"><img src="images/aper-foto.png" alt="foto.kelou.ml" /></a>
         <div class="inner">
            <header>
               <h2>foto.kelou.ml<br />Portfolio</h2>
            </header>
            <p>I love take photo, so I share them one on this website. There is a new collection of 10/12 pics each thursday.</p>
         </div>
      </article>
      <!--feature 3-->
      <article id="first" class="container box style1 right">
         <a href="#" class="image fit"><img src="images/aper-formation.png" alt="" /></a>
         <div class="inner">
            <header>
               <h2>kelou.ml/formation<br />Formation</h2>
            </header>
            <p>I do formation for people in french. This is only for french people IRL, but also in english online.</p>
         </div>
      </article>
      <!-- Portfolio -->
      <article class="container box style2">
         <header>
            <h2>Old project</h2>
            <p>Old &nbsp;>> &nbsp;Recent</p>
         </header>
         <div class="inner gallery">
            <div class="row 0%">
               <div class="3u 12u(mobile)"><a href="images/fulls/01.png" class="image fit"><img src="images/thumbs/01.png" alt="" title="First Minecraft server" /></a></div>
               <div class="3u 12u(mobile)"><a href="images/fulls/02.jpg" class="image fit"><img src="images/thumbs/02.jpg" alt="" title="2D Zombie Game" /></a></div>
               <div class="3u 12u(mobile)"><a href="images/fulls/04.jpg" class="image fit"><img src="images/thumbs/04.jpg" alt="" title="TPE Website" class="img-tpe"/></a></div>
               <div class="3u 12u(mobile)"><a href="images/fulls/05.jpg" class="image fit"><img src="images/thumbs/05.jpg" alt="" title="My 1st WP Site" /></a></div>
            </div>
            <div class="row 0%">
               <div class="3u 12u(mobile)"><a href="images/fulls/06.jpg" class="image fit"><img src="images/thumbs/06.jpg" alt="" title="1st PRO-Site" /></a></div>
               <div class="3u 12u(mobile)"><a href="images/fulls/08.png" class="image fit"><img src="images/thumbs/08.png" alt="" title="1st and actually main Blog" /></a></div>
               <div class="3u 12u(mobile)"><a href="images/fulls/07.png" class="image fit"><img src="images/thumbs/07.png" alt="" title="I'm now freelancer & student" /></a></div>
            </div>
         </div>
         </div>
      </article>
      <!-- Contact -->
      <article class="container box style3">
         <header>
            <h2>Contact Me</h2>
            <p>Leave me a message (doesn't work yet)</p>
         </header>
         <form method="post" action="#">
            <div class="row 50%">
               <div class="6u 12u$(mobile)"><input type="text" class="text" name="name" placeholder="Name" /></div>
               <div class="6u$ 12u$(mobile)"><input type="text" class="text" name="email" placeholder="Email" /></div>
               <div class="12u$"><textarea name="message" placeholder="Message"></textarea></div>
               <div class="12u$">
                  <ul class="actions">
                     <li><input type="submit" value="Send Message" name="mailform" onclick="sent()"/></li>
                  </ul>
               </div>
            </div>
         </form>
         <?php

         mb_internal_encoding('UTF-8');

         if(isset($_POST['mailform']))

         {

         	if(!empty($_POST['name']) AND !empty($_POST['email']))

         	{

         		$header="MIME-Version: 1.0\r\n";

         		$header.='From:"CLEMENT.kelou.fr ---- CONTACT"<contact@kelou.fr>'."\n";

         		$header.="Content-Type: text/html; charset=\"utf-8\"\r\n";

         		$header.='Content-Transfer-Encoding: 8bit';



         		$message='

         		<html>

         			<body>

         				<div>

         					<br />

         					<ul>

         					<li>Nom de l\'expéditeur :&nbsp;&nbsp;&nbsp; '.$_POST['name'].'</li>

         					<li>Mail de l\'expéditeur :&nbsp;&nbsp;&nbsp; '.$_POST['email'].'</li>

         					</ul><br />

         					'.nl2br($_POST['message']).'

         					<br />

         				</div>

         			</body>

         		</html>

         		';



         		mail("clement.castel75@gmail.com", "CLEMENT.KELOU.FR", $message, $header);

         		$msg="Votre message a bien été envoyé !";

         	}
         }

         ?>
      </article>
      <section id="footer">
         <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
            <li><a href="https://github.com/Th3Sword290/" class="icon fa-github"><span class="label">GitHub</span></a></li>
            <li><a href="#" class="icon fa-"</li>
         </ul>
         <div class="copyright">
            <ul class="menu">
               <li>&copy; 2017 All right reserved</li>
               <li>Design: <a href="https://clement.kelou.fr">CASTEL Clément</a></li>
            </ul>
         </div>
      </section>
      <!-- Scripts --><script src="assets/js/jquery.min.js"></script><script src="assets/js/jquery.scrolly.min.js"></script><script src="assets/js/jquery.poptrox.min.js"></script><script src="assets/js/skel.min.js"></script><script src="assets/js/util.js"></script><!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]--><script src="assets/js/main.js"></script>
      <script>
        function sent(){
          alert("Message envoyé avec succès, merci !")
        }
      </script>
   </body>
</html>
