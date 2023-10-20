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

    public function __construct($nome, $prezzo, $immagine, Categorie $categorie, $icona, $quantita,) {

        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->icona = $icona;
        $this->quantita = $quantita;
        $this->categorie = $categorie;
    }


}


class Categorie {

    public $categoria;

    
    public function __construct($categoria) {
        
        $this->categoria = $categoria;
    }
}


$scalibor = new Prodotti('Scalibor', '80€', 'https://picsum.photos/400/500', new Categorie('Cane'),'fa-solid fa-dog', '1');

$articoliArray = array($scalibor, $scalibor, $scalibor, $scalibor, $scalibor, $scalibor);

$result = $prodotti->categorie?->categoria;

echo $result;

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

                    <!-- quantità -->
                    <h3><?php echo $info->quantita ?></h3>
                    
                    <!-- prezzo -->
                    <h3><?php echo $result ?></h3>

                    <!-- icona categoria -->
                    <i class="<?php echo $info->icona ?>"></i>

                </div>
            </div>

            <?php endforeach; ?>
            
        </div>
    </div>



</body>

</html>