<?php
include("utils/db.php");
include("fonctions/produitUse.php");
//print_r($_SERVER);
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    // $nom=$_REQUEST['nomProduit'];
    // $reference=$_REQUEST['ref'];
    // $prix=$_REQUEST['prix'];
    // $description=$_REQUEST['description'];
    $repertoire="./upload/";
    $extenssion=array('jpg','jpeg','png');
    $image= $_FILES['image']['name'];
    $ext_photo=strrchr($image,".");
    $ext_photo=substr($ext_photo,1);
    $ext_photo=strtolower($ext_photo);

if(in_array($ext_photo,$extenssion)){
    $nouveau_nom=uniqid().".$ext_photo";
    $envoi=move_uploaded_file($_FILES['image']['tmp_name'],$repertoire.$nouveau_nom);
    if(!$envoi){
        echo"erreur de transfert";
    }
    else{
        if(!createProduit($pdo,$_POST,$nouveau_nom)){
            echo " l'enregistrement ne s'est pas fait";
        }
        else{
            echo " le produit est bien ajouté !";
        }
    }
}
}
?>
<form id="nomProduit" method="post" action="<?php echo htmlspecialchars("index.php?page=ajout"); ?>" enctype="multipart/form-data" >
    nom du produit:<input type="text" name="nomProduit"  id="nomProduit" tabindex="1" class="form-control" placeholder="nomProduit">
    ref du produit:<input type="text" name="ref" tabindex="2" class="form-control" placeholder="ref">
    <input type="text" name="prix" tabindex="3" class="form-control" placeholder="prix">
    <input type="text" name="description" tabindex="4" class="form-control" placeholder="description">
    <input type="file" name="image" tabindex="5" class="form-control" placeholder="image">
    <input type="submit" name="ajoutProduit-submit" id="ajoutProduit-submit" tabindex="6" class="form-control btn-secondary" value="Ajouter">
</form>
