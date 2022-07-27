<?php 
include "imagemusuc.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>les Produit</title>
    <link rel="shortcut icon" href="images/logo1.jpeg" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> SHOP IPHONE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0"><!DOCTYPE html>
        <li class="nav-item">
          <a class="nav-link " href ="index.php" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="Music.php">Produit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Mac.php">occasion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact-form-16/index.html.php">contact</a>
        </li>


      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Produit.." aria-label="Apple">
        <button class="btn btn-outline-success" type="submit">Rechercher</button>
      </form>
    </div>
  </div>

</body>

</nav>

<div class="airpod">
<img src="https://p6.focus.de/img/fotos/id_13541552/smartphones-chip.jpg?im=Crop%3D%280%2C37%2C1200%2C600%29%3BResize%3D%281200%2C627%29&impolicy=perceptual&quality=medium&hash=9d87fd69ea831579befc08035677ba016e730b784c7b598b666af0e0f167d433" width="100%"  class="" alt="Shop IPHONE" style="">
</div>

<div class="container border">
        <div class="row">
          <?php foreach($produits as $c=>$v){?>      
                <div class="col-md-4 text-center  mb-2 pb-3 ">
                    <img src="<?=$v['image']?>" alt="" class="img-fluid">
                    <h3 ><?=$v['libelle']?></h3>
                    <a href="detailsairpods.php?id=<?=$c?>" class="btn btn-primary">En savoir plus</a href="detailsairpods.php?id=1">
                </div>
            <?php } ?>

        </div>
    
    </div>
</html>
