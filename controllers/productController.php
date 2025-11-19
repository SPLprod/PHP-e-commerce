<?php



function getAllProducts()
{
  // requetes sql pour chopper tous les produits
}

function getProductById($id) {}

function home()
{
  // appel de la fonction getAllProducts
  // inclure le fichier index dans le dossier views
  include __DIR__ . '/../views/index.php';
}

function viewProduct()
{
  include __DIR__ . '/../views/product.php';
}
