<?php
include('utils/db.php');
include('fonctions/produitUse.php');

if(isset($_POST['detailProduit'])){
$stmt = $pdo->prepare("SELECT * FROM produit WHERE ID_PRODUIT = ?");
$stmt->execute([$_POST['idProduit']]);
$produits = $stmt->fetch(PDO::FETCH_ASSOC);
echo "<div class='container'>
        <div class='row justify-content-around'>
            <div class='col-4'>
                <img style='width:250px;' src='upload/" . $produits['IMAGE_PRODUIT'] . "' alt='img' >" . 
            "</div>
            <div class='col' id='info-description'>
                <div style='font-size:20px'>" . $produits["LIBELLE_PRODUIT"] . "</div>" . " " . 
                "<div style='font-size:30px'>" . $produits["PRIX_PRODUIT"] . "€" . "</div>" . "<br>" . 
        "</div> </div>" .
                $produits["DESCRIPTION_PRODUIT"] . 
            
     "</div>";
} else {
    echo "fail" ;
}

//foreach($results as $produits) {
//    if(oui) {
//        echo $produits["IMAGE_PRODUIT"] . $produits["LIBELLE_PRODUIT"] . $produits["PRIX_PRODUIT"] . $produits["DESCRIPTION_PRODUIT"];
//    }
//}
?>