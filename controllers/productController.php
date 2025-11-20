<?php



function getAllProducts() {
 // requetes sql pour chopper tous les produits
 global $pdo;
  $result = $pdo ->query("SELECT * FROM products");
        $result = $result->fetchall(PDO::FETCH_NUM);
        
        for ($i=0; $i<count($result); ++$i) {
          //var_dump($result[$i]);
          echo '<div class="product">';
          foreach ($result[$i] as $key => $value) {
            echo $key . $value;
            if($key == "nom" ) {
              echo "<h2> $value </h2>";
            }
            if($key == "image" ) {
              echo " <img src='__DIR__. '/../public/img' . $value ' alt='' />";
            }
            if($key == "prix" ) {
              echo "<p>Prix: $value €</p>";
            }
            /*echo '<div class="product">
               <h2>Votre produit</h2>
               <img src="" alt="" />
               <p>Prix: €</p>
               <a href="">Voir détails</a>'*/
               
          }
          echo '</div>';
        
         }
      }


function getProductById($id) {}

function home()
{$prod = getAllProducts ();
  // appel de la fonction getAllProducts
  // inclure le fichier index dans le dossier views
  include __DIR__ . '/../views/index.php';
}

function viewProduct()
{
  include __DIR__ . '/../views/product.php';
}
