<?php

$cani = new Prodotti('Monge All Breeds Adult Salmone e Riso', '€59,99', './assets/img/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.webp', new Categorie('Cane'), 'fa-solid fa-dog', 'Quantità: 12KG');
$cani2 = new Prodotti('Virtus Dog Adult Rustic', '€26,99', './assets/img/virtus-rustic-cane-adult.webp', new Categorie('Cane'), 'fa-solid fa-dog', 'Quantità: 2KG');
$cani3 = new Prodotti('Acana Classic Red', '€24,99', './assets/img/acana-dog-classic-red.webp', new Categorie('Cane'), 'fa-solid fa-dog', 'Quantità: 2KG');


$gatti = new Prodotti('Purina ONE Adult Pollo & Cereali integrali Crocchette', '€15,29', './assets/img/288303_mhi_purinaone_adult_huhn_vollkorngetreide_hs_01_7.jpg', new Categorie('Gatto'), 'fa-solid fa-cat', 'Quantità: 2,8KG');
$gatti2 = new Prodotti('Expecial Cat Complete Pollo', '€39,29', './assets/img/Expecial-Gatto-Adulto-Pollo--2-.webp', new Categorie('Gatto'), 'fa-solid fa-cat', 'Quantità: 10KG');
$gatti3 = new Prodotti('Ultima Cat Pollo', '€39,99', './assets/img/ultima-cat-pollo.webp', new Categorie('Gatto'), 'fa-solid fa-cat', 'Quantità: 7,5KG');

$articoliArray = [$cani, $gatti, $cani2, $gatti2, $cani3, $gatti3];

$result = $categoria->$categorie?->categoria;

var_dump($categoria->categorie?->categoria);



//echo $cani->mgs1();