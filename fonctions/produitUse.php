<?php
function getProduitHome($pdoP)
{
    $stmt = $pdoP->prepare("SELECT LIBELLE_PRODUIT, IMAGE_PRODUIT, PRIX_PRODUIT, ID_PRODUIT FROM produit LIMIT 8;");
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}


function createProduit($pdoP,$values,$nomFichier)
{
    try {
        // [nomProduit] => test [ref] => 23232 [prix] => 2 [description] => testetyest [ajoutProduit-submit] => Ajouter
        $stmt = $pdoP->prepare("INSERT INTO produit (LIBELLE_PRODUIT, REF_PRODUIT, PRIX_PRODUIT, DESCRIPTION_PRODUIT,ID_TYPE_PRODUIT,ID_MARQUE,IMAGE_PRODUIT) VALUES (?,?,?,?,1,1,?)");
        $nomProduit = htmlspecialchars($_POST['nomProduit']);
        $ref_produit = htmlspecialchars($_POST['ref']);
        $prix_produit = htmlspecialchars($_POST['prix']);
        $description_produit = htmlspecialchars($_POST['description']);
        $stmt->execute([$values["nomProduit"], $values["ref"], $values["prix"], $values["description"], $nomFichier]);
        $stmt->fetch();
        //header('Location: index.php?page=home');
        //die();
        return true;
    } catch (PDOException $e) {
        echo "Erreur  : " . $e->getMessage();
        return false;
    }
}
