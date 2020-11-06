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
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
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
  </head>

  <body>

    <div class="container-fluid">
      <div class="row">
      <!-- Left Content -->
      <div id="left-bg" class="col-lg-6 col-md-12">
        <div id="left-wrapper">
          <a class="logo"><img src="../img/logo.png"/></a>
          <div id="intro-wrapper">
            <h1>Bridging the gap between design and development.</h1>
            <a href="#right-wrapper"><i class="fas fa-chevron-circle-down"></i></a>
          </div>
        </div>
      </div>

      <!-- Right Content -->
      <div class="col-lg-6 col-md-12">
        <div id="right-wrapper">
          <!-- About Section -->
          <div id="about" class="row">
            <div class="col-md-12">
              <div class="about-wrapper">
                <button id="click-about-btn" type="button" class="btn active">About Me</button>
                <div id="about-content">
                  <p>
                My name is Ashley, and I’m a front-end web developer with a passion for building beautiful, functional sites. I’ve built custom websites for clients in industries ranging from insurance to tech.  Whether you’re an early stage start up, a mom and pop, or a large and firmly established company, I’d love to build you the site of your dreams! I have a diverse array of language skills, including HTML5, CSS3, and Javascript.  Let’s chat!
                  </p>
                  <ul class="list-unstyled list-inline list-social-icons">
                    <li class="list-inline-item">
                      <a href="https://linkedin.com/in/ashley-singleton-0a573445" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="https://github.com/asingleton6/" target="_blank"><i class="fab fa-github-square fa-2x"></i></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="http://codepen.io/asingleton6/" target="_blank"><i class="fab fa-codepen fa-2x"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Portfolio Section -->
          <div id="portfolio" class="row">
            <div class="col-lg-12">
              <div class="portfolio-wrapper">
                <button id="click-portfolio-btn" type="button" class="btn">Portfolio</button>
                <div id="portfolio-content" class="hide">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                      <div class="img-wrapper">
                        <a href="#" data-toggle="modal" data-target="#port1">
                          <img class="thumbnail img-fluid" src="../img/mlb-thumb.png"/>
                        </a>
                      </div>
                      <!-- Modal -->
                      <div class="modal fade" id="port1" tabindex="-1" role="dialog" aria-labelledby="port1" aria-hidden="true">
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
                      </div>
                      <div class="img-wrapper">
                        <a href="#" data-toggle="modal" data-target="#port2">
                          <img class="thumbnail img-fluid" src="../img/wboc-hp-thumb.png"/>
                        </a>
                      </div>
                      <!-- Modal -->
                      <div class="modal fade" id="port2" tabindex="-1" role="dialog" aria-labelledby="port2" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <img class="img-fluid" src="../img/wboc-hp-full.png" alt="">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              <p class="close-text">Close</p>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                      <div class="img-wrapper">
                        <a href="#" data-toggle="modal" data-target="#port3">
                          <img class="thumbnail img-fluid" src="../img/arbooks-thumb.png"/>
                        </a>
                      </div>
                      <!-- Modal -->
                      <div class="modal fade" id="port3" tabindex="-1" role="dialog" aria-labelledby="port3" aria-hidden="true">
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
                      </div>
                      <div class="img-wrapper">
                        <a href="#" data-toggle="modal" data-target="#port4">
                          <img class="thumbnail img-fluid" src="../img/antennaweb-results-thumb.png"/>
                        </a>
                      </div>
                      <!-- Modal -->
                      <div class="modal fade" id="port4" tabindex="-1" role="dialog" aria-labelledby="port4" aria-hidden="true">
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
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                      <div class="img-wrapper">
                        <a href="#" data-toggle="modal" data-target="#port5">
                          <img class="thumbnail img-fluid" src="../img/cole-thumb.png"/>
                        </a>
                      </div>
                      <!-- Modal -->
                      <div class="modal fade" id="port5" tabindex="-1" role="dialog" aria-labelledby="port5" aria-hidden="true">
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
                      </div>
                      <div class="img-wrapper">
                        <a href="#" data-toggle="modal" data-target="#port6">
                          <img class="thumbnail img-fluid" src="../img/franklymedia-thumb.png"/>
                        </a>
                      </div>
                      <!-- Modal -->
                      <div class="modal fade" id="port6" tabindex="-1" role="dialog" aria-labelledby="port6" aria-hidden="true">
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
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Contact Section -->
          <div id="contact" class="row">
            <div class="col-lg-12">
              <div class="contact-wrapper">
                <button id="click-contact-btn" type="button" class="btn">Contact</button>
                <div id="contact-content" class="hide">
                  <div class="row">
                    <div class="col-lg-12">
                      <form role="form" method="post" action="#contact">
                        <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <fieldset class="form-group">
                              <input type="name" class="form-control" name="name" placeholder="Full Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                              <?php echo "<p class='text-danger'>$errName</p>";?>
                            </fieldset>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <fieldset class="form-group">
                              <input type="email" class="form-control" name="email" placeholder="Email Address" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                              <?php echo "<p class='text-danger'>$errEmail</p>";?>
                            </fieldset>
                          </div>
                        </div>
                        <!-- /.row -->
                        <div class="row">
                          <div class="col-lg-12 col-md-12">
                            <fieldset class="form-group">
                              <textarea class="form-control" rows="7" name="message" placeholder="Message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                              <?php echo "<p class='text-danger'>$errMessage</p>";?>
                            </fieldset>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <label>Human Verification:</label>
                            <label for="human" class="control-label human">2 + 3 = ?</label>
                            <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                            <?php echo "<p class='text-danger'>$errHuman</p>";?>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6">
                            <input id="submit" name="submit" type="submit" value="Send Message" class="btn btn-default"></input>
                          </div>
                        </div>
                        <!-- /.row -->
                        <div class="row">
                          <div class="col-lg-12">
                            <?php echo $result ?>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        </div>
      </div>
      </div>
    </div>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
