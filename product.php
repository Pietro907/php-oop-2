<?php

/* inizio la creazione delle classi */

class Prodotti
{
    public $nome;
    public $prezzo;
    public $immagine;
    public $icona;
    public $categorie;
    public $quantita;

    public function __construct($nome, $prezzo, $immagine, Categorie $categorie, $icona, $quantita,)
    {

        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->quantita = $quantita;
        $this->icona = $icona;
        $this->categorie = $categorie;

    }

    //Uso il trait
    use message1;

} 


trait message1 {
    public function mgs1(){
        echo 'E-Commerce Animals Welcome!';
    }

    
}

/* trait aviable {
    public function mgsNot(){
        
        echo 'Non disponibile';
    }

    
} */


/* class Quantita extends Prodotti {
    public $quantita;

    public function __construct($quantita)
    {

        $this->quantita->$quantita;
    }

    public function getQuantità(){
        try {
            //logica codice

            if ($this->quantita != 'Quantità: 0KG'){
                $valore = $this->quantita;
                return $valore;
            }else{
               throw new Quantita ('Non disponibile');
            }
        }catch (Quantita $valore){
            exit('Aiuto');
        }
    }
  
} */



