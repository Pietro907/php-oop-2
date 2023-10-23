<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

require_once __DIR__ . './categoty.php';
require_once __DIR__ . './product.php';
require_once __DIR__ . './item.php';

/* function checkNum($number) {
    if($number>1) {
      throw new Exception("Value must be 1 or below");
    }
    return true;
  }
  
  //trigger exception
  checkNum(2);
 */






//var_dump($articoliArray);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce for Animals</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

    <!-- card che contengono info -->
    <!-- immagine, titolo, prezzo, icona della categoria  -->
    <div class="container mt-5">

        <div class="title text-center text-primary shadow bg-dark"><h1><?php echo $cani->mgs1(); ?></h1></div>

        <div class="row m-5">

            <?php foreach ($articoliArray as $info) : ?>

                <?php include __DIR__ . './partials/col.php' ?>   

            <?php endforeach; ?>

        </div>
    </div>



</body>

</html>