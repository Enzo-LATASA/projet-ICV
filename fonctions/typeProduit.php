<?php
function getTypeProduit($pdoP, $value) {
    $stmt = $pdoP->prepare("SELECT marque.LIBELLE_MARQUE, produit.LIBELLE_PRODUIT, type_produit.LIBELLE_TYPE_PROD FROM type_produit
    INNER JOIN produit ON produit.ID_TYPE_PRODUIT = type_produit.ID_TYPE_PRODUIT
    INNER JOIN marque ON marque.ID_MARQUE = produit.ID_MARQUE;");
    $stmt->execute();
    $options = [];//tableau qui va contenir toutes les options HTML
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $i = 0;//indice du tableau options
    foreach ($results as $result) {
        $options[$i] = '<option value="' . $result['ID_TYPE_PRODUIT'] . '">' . $result['LIBELLE_TYPE_PROD'] . '</option>';
        $i++;
    }
    return $options;
}
?>