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
    //Uso il trait
    use message1;

    public function getQuantità(){
        try {
            //logica codice

            if ($this->categorie != 'cane' && $this->categorie != 'gatto'){
                $valore = $this->categorie;
                return $valore;
            }else{
               throw new Exception ('Non disponibile');
            }
        }catch (Categorie $categorie){
            exit('Aiuto');
        }
    }
    

}

trait message1 {
    public function mgs1(){
        echo 'E-Commerce Animals Welcome!';
    }
}



