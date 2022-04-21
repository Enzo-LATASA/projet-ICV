<?php
//fonction qui va renvoyer un tableau contenant toutes les options 
//pour construire la liste déroulante de toutes les marques
function generateOptionHTML($pdoP)
{
    $stmt = $pdoP->prepare("SELECT ID_TYPE_PRODUIT, LIBELLE_TYPE_PROD FROM type_produit");
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


function getListMaterielDispoFast($pdoP,$value){
    $stmt = $pdoP->prepare("SELECT produit.ID_MARQUE, produit.LIBELLE_PRODUIT, type_produit.LIBELLE_TYPE_PROD, marque.LIBELLE_MARQUE
FROM produit
INNER JOIN type_produit ON produit.ID_TYPE_PRODUIT = type_produit.ID_TYPE_PRODUIT
INNER JOIN marque ON produit.ID_MARQUE = marque.ID_MARQUE
WHERE produit.LIBELLE_PRODUIT LIKE ? ");
$stmt->execute(['%'.$value.'%']);
return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
