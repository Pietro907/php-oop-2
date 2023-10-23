<?php


/* inizio la creazione delle classi */

class Prodotti
{
    public $nome;
    public $prezzo;
    public $immagine;
    public $icona;
    public $quantita;
    public $categorie;

    public function __construct($nome, $prezzo, $immagine, Categorie $categorie, $icona, $quantita,)
    {

        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->icona = $icona;
        $this->quantita = $quantita;
        $this->categorie = $categorie;
    }
}


class Categorie
{
    public $categoria;

    public function __construct($categoria)
    {
        $this->categoria = $categoria;
    }

/*     public function get_categ() {
        return $this.$categoria->categoria;
    } */
}


$cani = new Prodotti('Monge All Breeds Adult Salmone e Riso', '€59,99', './assets/img/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.webp', new Categorie('Cane'), 'fa-solid fa-dog', 'Quantità: 12KG');
$cani2 = new Prodotti('Virtus Dog Adult Rustic', '€26,99', './assets/img/virtus-rustic-cane-adult.webp', new Categorie('Cane'), 'fa-solid fa-dog', 'Quantità: 2KG');
$cani3 = new Prodotti('Acana Classic Red', '€24,99', './assets/img/acana-dog-classic-red.webp', new Categorie('Cane'), 'fa-solid fa-dog', 'Quantità: 2KG');


$gatti = new Prodotti('Purina ONE Adult Pollo & Cereali integrali Crocchette', '€15,29', './assets/img/288303_mhi_purinaone_adult_huhn_vollkorngetreide_hs_01_7.jpg', new Categorie('Gatto'), 'fa-solid fa-cat', 'Quantità: 2,8KG');
$gatti2 = new Prodotti('Expecial Cat Complete Pollo', '€39,29', './assets/img/Expecial-Gatto-Adulto-Pollo--2-.webp', new Categorie('Gatto'), 'fa-solid fa-cat', 'Quantità: 10KG');
$gatti3 = new Prodotti('Ultima Cat Pollo', '€39,99', './assets/img/ultima-cat-pollo.webp', new Categorie('Gatto'), 'fa-solid fa-cat', 'Quantità: 7,5KG');

$articoliArray = [$cani, $gatti, $cani2, $gatti2, $cani3, $gatti3];
//var_dump($articoliArray);

$result = $cani->$categorie?->categoria;

var_dump($categoria->categorie?->categoria);


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
        <div class="row m-5">

            <?php foreach ($articoliArray as $info) : ?>

                <div class="col-4 p-2 my-2">
                    <div class="card h-100 d-flex justify-content-center align-items-center p-4">

                        <!-- immagine prodotto -->
                        <img class="w-100" src="<?php echo $info->immagine ?>" alt="">

                        <!-- nome -->
                        <h5 class="text-center p-3"><?php echo $info->nome ?></h5>

                        <!-- quantità -->
                        <p><?php echo $info->quantita ?></p>

                        <!-- categoria animale -->
                        <h5 class="my-1"><?php echo $result ?></h5>

                        <!-- icona categoria -->
                        <i style="font-size: 25px;" class="py-2 <?php echo $info->icona ?>"></i>

                        <!-- prezzo -->
                        <h5><?php echo $info->prezzo ?></h5>


                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>



</body>

</html>