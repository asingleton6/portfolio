<?php include('contact.php'); ?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <meta name="google" value="notranslate">

    <title>Ashley Singleton's Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-control" content="public">
    <link rel="shortcut icon" type="image/png" href="favicon.ico"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-58930887-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments)};
      gtag('js', new Date());

      gtag('config', 'UA-58930887-1');
    </script>
    <!-- Hotjar Tracking Code for https://ashleysingleton.com/ -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:1869078,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
  </head>

  <body>

    <main>

      <!-- Left Content -->
      <section class="header-section">
        <div class="header-wrapper">
          <a class="logo"><img src="../img/logo.png"/></a>
          <div id="intro-wrapper">
            <h1>Bridging the Gap Between Design and Development.</h1>
            <a href="#about"><i class="fas fa-chevron-circle-down bounce"></i></a>
          </div>
        </div>
      </section>

		<div class="content-wrapper">
		<!-- About Section -->
		<section id="about" class="accordion">
			<div class="about-wrapper">
				
				<div id="about-content" class="sideBySide">
					<div class="leftSide"> 
						<img src="../img/me.png"/>
					</div>
					<div class="rightSide">
            <h2 class="title-2">About Me</h2>
						<p>
						My name is Ashley, and I’m a creative software developer with a passion for building elegant, 
						functional web applications. I have experience working in a fast paced environment and serving 
						diverse clients ranging from small business to big tech. I'm dedicated to giving my clients the 
						competitive edge through high-speed and user-centered custom web applications. I have a diverse array
						of language skills and working knowledge, including JavaScript, jQuery, SCSS, .NET Framework, 
						and Accessibility.
						</p>
						<p>If you would like to chat please contact me down below!</p>
						<ul class="social-icons">
						<li>
							<a href="https://linkedin.com/in/ashley-singleton-0a573445" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
						</li>
						<li>
							<a href="https://github.com/asingleton6/" target="_blank"><i class="fab fa-github-square fa-2x"></i></a>
						</li>
						<!-- <li>
							<a href="http://codepen.io/asingleton6/" target="_blank"><i class="fab fa-codepen fa-2x"></i></a>
						</li> -->
						</ul>
					</div>
			</div>
		</section>

		<!-- Portfolio Section -->
		<section id="portfolio" class="accordion">
			<div class="portfolio-wrapper">
				<h2 class="title-2 white-text">View My Work</h2>
				<!-- <button id="click-portfolio-btn" type="button" class="btn">Portfolio</button> -->
				<div id="portfolio-content">
          <div class="img-wrapper">
						<a href="https://order.racetrac.com/" target="_blank">
						<h3 class="title-3">RaceTrac Online Ordering</h3>
						<img class="thumbnail img-fluid" src="../img/orderRacTrac.png"/>
						</a>
          </div>
          <div class="img-wrapper">
						<a href="https://racetrac.com/" target="_blank">
						<h3 class="title-3">RaceTrac</h3>
						<img class="thumbnail img-fluid" src="../img/racetrac.png"/>
						</a>
					</div>
          <div class="img-wrapper">
						<a href="https://what-can-my-dog-eat-pi.vercel.app/" target="_blank">
            <h3 class="title-3">What Can My Dog Eat?</h3>
            <img class="thumbnail img-fluid" src="../img/whatcanmydogeat.png"/>
						</a>
					</div>
					<div class="img-wrapper">
						<a href="https://mattlyonsatl.com/" target="_blank">
						<h3 class="title-3">Matt Lyons Band</h3>
						<img class="thumbnail img-fluid" src="../img/mlb-thumb.png"/>
						</a>
          </div>
          <div class="img-wrapper">
						<a href="https://arbooks.tech/" target="_blank">
						<h3 class="title-3">AR Books</h3>
						<img class="thumbnail img-fluid" src="../img/arbooks-thumb.png"/>
						</a>
					</div>
					<div class="img-wrapper">
						<a href="https://www.antennaweb.org/" target="_blank">
						<h3 class="title-3">Antennaweb</h3>
						<img class="thumbnail img-fluid" src="../img/antennaweb-results-thumb.png"/>
						</a>
					</div>
				<div>
					<!-- Modal -->
					<!-- <div class="modal fade" id="port1" tabindex="-1" role="dialog" aria-labelledby="port1" aria-hidden="true">
						<div class="modal-dialog" role="document">
						<div class="modal-content">
							<a href="https://mattlyonsatl.com/" target="_blank">
								<img class="modal-image img-fluid" src="../img/mlb-full.png" alt="">
							</a>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								<p class="close-text">Close</p>
							</button>
						</div>
						</div>
					</div> -->
					<!-- Modal -->
					<!-- <div class="modal fade" id="port2" tabindex="-1" role="dialog" aria-labelledby="port2" aria-hidden="true">
						<div class="modal-dialog" role="document">
						<div class="modal-content">
								<img class="img-fluid" src="../img/wboc-hp-full.png" alt="">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								<p class="close-text">Close</p>
							</button>
						</div>
						</div>
					</div> -->
					<!-- Modal -->
					<!-- <div class="modal fade" id="port3" tabindex="-1" role="dialog" aria-labelledby="port3" aria-hidden="true">
						<div class="modal-dialog" role="document">
						<div class="modal-content">
							<a href="https://arbooks.tech/" target="_blank">
								<img class="img-fluid" src="../img/arbooks-full.jpg" alt="">
							</a>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								<p class="close-text">Close</p>
							</button>
						</div>
						</div>
					</div> -->
					<!-- Modal -->
					<!-- <div class="modal fade" id="port4" tabindex="-1" role="dialog" aria-labelledby="port4" aria-hidden="true">
						<div class="modal-dialog" role="document">
						<div class="modal-content">
							<a href="https://antennaweb.org/" target="_blank">
								<img class="img-fluid" src="../img/antennaweb-results-full.png" alt="">
							</a>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								<p class="close-text">Close</p>
							</button>
						</div>
						</div>
					</div> -->
					<!-- Modal -->
					<!-- <div class="modal fade" id="port5" tabindex="-1" role="dialog" aria-labelledby="port5" aria-hidden="true">
						<div class="modal-dialog" role="document">
						<div class="modal-content">
							<a href="http://thecolelawoffice.com/" target="_blank">
								<img class="img-fluid" src="../img/cole-full.jpg" alt="">
							</a>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								<p class="close-text">Close</p>
							</button>
						</div>
						</div>
					</div> -->
					<!-- Modal -->
					<!-- <div class="modal fade" id="port6" tabindex="-1" role="dialog" aria-labelledby="port6" aria-hidden="true">
						<div class="modal-dialog" role="document">
						<div class="modal-content">
							<a href="https://franklymedia.com" target="_blank">
								<img class="img-fluid" src="../img/franklymedia-full.png" alt="">
							</a>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								<p class="close-text">Close</p>
							</button>
						</div>
						</div>
					</div> -->
					</div>
				</div>
			</div>
		</section>

		<!-- Contact Section -->
		<section id="contact" class="accordion">
			<div class="contact-wrapper">
				<h2 class="title-2">Contact Me</h2>
				<!-- <button id="click-contact-btn" type="button" class="btn">Contact</button> -->
				<div id="contact-content" class="">
					<form role="form" method="post" action="#contact">
						<input type="name" class="form-input" name="name" placeholder="Full Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
						<?php echo "<p class='text-danger'>$errName</p>";?>
						<input type="email" class="form-input" name="email" placeholder="Email Address" value="<?php echo htmlspecialchars($_POST['email']); ?>">
						<?php echo "<p class='text-danger'>$errEmail</p>";?>
						<textarea class="form-input" rows="7" name="message" placeholder="Message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
						<?php echo "<p class='text-danger'>$errMessage</p>";?>
						<label>Human Verification:</label>
						<label for="human" class="control-label human">2 + 3 = ?</label>
						<input type="text" class="form-input" id="human" name="human" placeholder="Your Answer">
						<?php echo "<p class='text-danger'>$errHuman</p>";?>
						<input id="submit" name="submit" type="submit" value="Send Message" class="btn btn-default"></input>
						<?php echo $result ?>
					</form>
				</div>
			</div>
		</section>


    </main>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
