<?php
include('utils/db.php');
include('fonctions/produitUse.php');
$results = getProduitHome($pdo);
echo "<div class=\"container\">";
$index = 0;

foreach($results as $produit) {
  /*tous les 4 enregistrements, création d'une nouvelle ligne*/
  if($index%4 == 0){
    echo "<div class=\"row\">";//debut de la ligne
  }
    echo "<div class=\"col-sm-6 col-md-4 col-lg-3 mt-4\"><div class=\"card\"> 
    <img style='width:250px;' src='upload/" . $produit['IMAGE_PRODUIT'] . "' alt='img' >
    <div class=\"card-block\">
    <h4 class=\"card-title mt-3\">"
     . $produit["LIBELLE_PRODUIT"] . "</h4> <div class=\"card-text\">
     " . $produit["PRIX_PRODUIT"] . "</div> </div>";
    echo "<div class=\"card-footer\">
    <form action='index.php?page=description' method='post'>
    <input type='hidden' name='idProduit' value='". $produit['ID_PRODUIT'] . "'>
    <button name='detailProduit' class='btn btn-secondary' type='submit'>detail</button>
    </form></div></div></div>";
    if($index%4 == 4){
      echo "</div>";//fin de la ligne
    }
$index++;  

}
echo "</div>";
?>
<!-- <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div> -->