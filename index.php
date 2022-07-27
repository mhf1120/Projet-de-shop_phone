<?php 
include "produits.php";
?>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>HOME</title>
    <link rel="shortcut icon" href="images/logo1.jpeg" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> SHOP PHONE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0"><!DOCTYPE html>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Music.php">Produit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Mac.php">occasion</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contact-form-16/index.html">Contact</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="HOME.." aria-label="Apple">
        <button class="btn btn-outline-success" type="submit">Rechercher</button>
      </form>
    </div>
  </div>
  
</body>

</nav>
<img src="https://images.frandroid.com/wp-content/uploads/2017/09/galaxy_s8.jpg" width="100%"  class="" alt="Shop PHONE" style="">
<img src="https://www.buzzwebzine.fr/wp-content/uploads/2022/03/pub-iphone-13-pro-et-iphone-13-1024x576.png" width="100%"  class="" alt="Shop PHONE" style="">

<div class="container border">
        <div class="row">
          <?php foreach($produits as $c=>$v){?>      
                <div class="col-md-4 text-center  mb-2 pb-3 ">
                    <img src="<?=$v['image']?>" alt="" class="img-fluid">
                    <h3 ><?=$v['libelle']?></h3>
                    <a href="details.php?id=<?=$c?>" class="btn btn-primary">En savoir plus</a href="details.php?id=1">
                </div>
            <?php } ?>

        </div>
    
    </div>
</html>

<!-- ======= Footer ======= -->

<footer id="footer">

<div class="footer-top">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6 footer-info">

<h3>SHOP IPHONE</h3>
<p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>

</div>

<div class="col-lg-3 col-md-6 footer-links">

<h4>Useful Links</h4>

<ul>

<li><i class="bi bi-chevron-right"></i><a href="#">Home</a></li>

<li><i class="bi bi-chevron-right"></i><a href="music.php">Produit</a></li>

<li><i class="bi bi-chevron-right"></i><a href="Mac.php">occasion</a></li>
<li><i class="bi bi-chevron-right"></i><a href="Mac.php">Contact</a></li>

</ul>

</div>

<div class="col-lg-3 col-md-6 footer-contact">

<h4>Contact Us</h4>
<p>
 <br>

 Casablanca sbata <br>

 <br>

<strong>Phone:</strong> 0628871731<br>

<strong>Email:</strong> anass.mahfad.1gmail.com<br>

</p>

<div class="social-links">
<a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
<a href="#" class="facebook"><i class="bi bi-facebook"></i></a>

<a href="#" class="instagram"><i class="bi bi-instagram"></i></a>

<a href="#" class="instagram"><i class="bi bi-instagram"></i></a>

<a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
</div>

</div>

<div class="col-lg-3 col-md-6 footer-newsletter">
<h4>Our Newsletter</h4>

<p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>

<form action=""method="post">

<input type="email"name="email"><input type="submit" value="Rechercher">

</form>

</div>

</div>

</div>

</div>

<div class="container">

<div class="copyright">
                                            
</div>

<divclass="credits">
<!--

        All the links in the footer should remain intact.

        You can delete the links only if you purchased the pro version.

        Licensing information: https://bootstrapmade.com/license/

        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage

      -->

<ahref="https://bootstrapmade.com/"></a>

</div>

</div>
</footer><!-- End Footer -->
