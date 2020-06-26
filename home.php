<?php 
require './assets/vendor/steam/steamauth/steamauth.php';
include './assets/vendor/steam/steamauth/userInfo.php';
$steamprofile['lastlogoff'] = date('d/m/Y', $steamprofile['lastlogoff']); 
$heure = date('H');

if($heure < 18 && $heure > 5 ) {
    $text = "Bonjour ";
}
else {
    $text = "Bonsoir ";
}

if(!isset($_SESSION['steamid'])) {
    die;
}
if($steamprofile['personastate'] == 1) {
    $steamprofile['personastate'] = '<span style="color: green;">En Ligne</span>';
} 
elseif($steamprofile['personastate'] == 0) {
    $steamprofile['personastate'] = '<span style="color: red;">Hors ligne</span>';
} 
elseif($steamprofile['personastate'] == 3) {
    $steamprofile['personastate'] = '<span style="color: #F49605;">Occupé</span>';
} 
?>
<?php require_once('./assets/php/gameq.php'); ?>
<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/contact.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo mr-auto"><img src="assets/img/Logo_noir_sanstexte.png" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Accueil</a></li>
          <li class="drop-down"><a href="">Vos informations</a>
            <ul>
              <li class="drop-down"><a href="#">Informations de : <?php echo $steamprofile['realname']; ?> (<?php echo $steamprofile['personaname']; ?>)</a>
                <ul>
                <li><a href="#">Nom réel : <?php echo $steamprofile['realname']; ?></a></li>
                <li><a href="#">Pseudo : <?php echo $steamprofile['personaname']; ?></a></li>
                <li><a href="#">SteamID : <?php echo $steamprofile['steamid']; ?></a></li>
                <li><a href="#">Dernière connexion : Le <?php echo $steamprofile['lastlogoff']; ?></a></li>
                <li><a href="#">Status : <?php echo $steamprofile['personastate']; ?></a></li>
                </ul>
              </li>
              <li><a href="?update">Mise à jour</a></li>
            </ul>
            <li><a href="?logout">Déconnexion</a></li>
          </li>
          <li><a href="#contact">Contact</a></li>
          <li><img src="<?php echo $steamprofile['avatar']; ?>" class="r" /></li>
        </ul>
      </nav><!-- .nav-menu -->
      

    </div>
    
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <img src="assets/img/Logo_noir_sanstexte.png" width="100" height="100" />
          <h2><?php echo $text; ?> <?php echo $steamprofile['realname']; ?> !</h2>
          <div class="d-flex">
            <a href="" class="btn-get-started scrollto">Rejoindre le serveur</a>
            <a href="" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Visionner notre trailer <i class="icofont-play-alt-2"></i></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/Logo_ca.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
    </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="icofont-computer"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-image"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-tasks-alt"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Services Section -->

  
  <section id="contact" class="section-bg">
  <div class="section-title">
          <span>Contact</span>
          <h2>Contact</h2>
          <p>Vous pouvez contacter le serveur <?php echo $name; ?> par mail ici ↓ : </p>
        </div>
        <div class="div_contact hide">
	<div class="center p-raleway">
	<br><br>
	
	<br>
	<div class="class-all">
    <h4 class="t-align-top">Réponse sous 48h max</h4>
	<div class=" class-mod">
	   <div>
		  <label class="label_name">NOM</label><br>
		  <input type="text" id="nom" placeholder="Spécifier votre nom">
	  </div>
	  <br><br>
	  <div style="margin-left: 50px;"></div>
	  <div>
		  <label class="label_user">PRENOM</label><br>
		  <input type="text"  id="prenom" placeholder="Spécifier votre prénom">
	  </div>
	  <br><br>
	</div>
	
	<div class="mod_mess">
		<label class="label_message">POURQUOI NOUS CONTACTEZ-VOUS (+email)</label><br>
		<textarea id="mess" placeholder="Spécifier la raison de votre message et votre email."></textarea>
	</div>
	</div>
	<div class="rower">
		<a class="send"><i class="fas fa-arrow-right height"></i> Envoyer </a>
</div>
</div>
	
</div>

  </section>  

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="center">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center center">
          <div class="col-lg-6">
            <h3>As you would or null</h3>
            <br>
            <div class="center align">
            <?php if($isOnline == 1) {
              echo '<span class="open-blink"></span><span style="color: white; background-color: #4caf50; padding-left: 5px; padding-right: 5px; padding-bottom:5px; padding-top:5px; border-radius: 3px; height: 5px; width: 20px;">Serveur ouvert ! ('.$players.'/'.$maxplayers.')</span>';
            }   
            else {
              echo '<span class="close-blink"></span>&nbsp;&nbsp;&nbsp;<span style="color: white; background-color: #af001b; padding-left: 5px; padding-right: 5px; padding-bottom:5px; padding-top:5px; border-radius: 3px; height: 5px; width: 20px;">Serveur fermé !</span>';
            }
            ?>
            </div>
          </div>
        </div>

    

        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>As you Would</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> and developed by <a href="https://lartaxx.yj.fr" target="_blank">Lartaxx</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="https://kit.fontawesome.com/0017d4f378.js" crossorigin="anonymous"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/notify.js"></script>
  <script src="assets/js/mailer.js"></script>
</body>

</html>