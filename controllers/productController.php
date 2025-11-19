<?php
include_once __DIR__ . "/../database/db.php";


function getAllProducts($x)
{
  // requetes sql pour chopper tous les produits
  $result = $x->querry("SELECT * FROM products");
        $result = $result->fetch(PDO::FETCH_ASSOC);
        var_dump($result);

  // foreach ($result as $key => $value) {
  //       echo 
  //       '<div class="product">
  //       <h2></h2>
  //       <img src="" alt="" />
  //       <p>Prix: €</p>
  //       <a href="">Voir détails</a>
  //       </div>'
  //       ;
  //   }
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
