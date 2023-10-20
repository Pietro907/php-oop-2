<?php

/* variabili oggetti in vendita */

/* 
    public $cuccia;
    public $ciotola;
    public $giunzaio;
    public $croccantini;
    public $scatolette;
    public $spazzole;
    public $rasoioElettrico;
    public $antiparassitario;
    public $telo;
    public $teloAssorbenteMonouso;
    public $medagliette;
    public $giochi;
    public $tiragraffi;
    public $bustineBisogni;
    public $saponi;
    public $tagliaUnghie;
    public $cornoCervo;
    public $peluche;
    public $pupazziGomma;

 */

/* categorie */

//Cani

//Gatti

/* inizio la creazione delle classi */
class e_commerce {

}

class prodotti
{
    public $nome;
    public $prezzo;
    public $tipologia;
    public $immagine;
    public $quantita;
    public $icona;

    public function __construct($nome, $prezzo, $tipologia, $immagine, $quantita, $icona) {

        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->tipologia = $tipologia;
        $this->immagine = $immagine;
        $this->quantita = $quantita;
        $this->icona = $icona;
    }
}

$articoli = new prodotti('Collare', '10€', 'cane', 'https://picsum.photos/400/500', '1', 'fa-solid fa-cat');
$cibo = new prodotti('Royal Canin', '10€', 'cane', 'https://picsum.photos/400/500', '1', 'fa-solid fa-cat');
$tolettatura = new prodotti('Rasoio', '10€', 'cane', 'https://picsum.photos/400/500', '1', 'fa-solid fa-cat');



$articoliArray = array($articoli, $cibo, $tolettatura);
class categorie extends prodotti{
    
}
class cani extends prodotti {

}

class gatti extends prodotti {

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce for Animals</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- card che contengono info -->
    <!-- immagine, titolo, prezzo, icona della categoria  -->
    <div class="container mt-5">
        <div class="row m-5">

            <?php foreach($articoliArray as $info): ?>

            <div class="col-4">
                <div class="card">

                    <!-- immagine prodotto -->
                    <img style="width: 300px;" src="<?php echo $info->immagine ?>" alt="">

                    <!-- titolo -->
                    <h2><?php echo $info->nome ?></h2>

                    <!-- prezzo -->
                    <h3><?php echo $info->prezzo ?></h3>

                    <!-- icona categoria -->
                    <i class="<?php echo $info->icona ?>"></i>

                </div>
            </div>

            <?php endforeach; ?>
            
        </div>
    </div>



</body>

</html>