<?php 
include "Music.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des produits </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
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
    
</body>
</html>