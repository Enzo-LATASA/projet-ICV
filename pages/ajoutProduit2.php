<?php
include('utils/db.php');
 if(isset($_POST["Ajouter"])){
    $nom=$_REQUEST['nomProduit'];
    $reference=$_REQUEST['ref'];
    $prix=$_REQUEST['prix'];
    $description=$_REQUEST['description'];
    $repertoire="./";
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
        $req= "INSERT INTO produit
        VALUES (NULL,'$nom','$reference','$prix','$description','$repertoire$nouveau_nom',NULL,NULL,NULL)";
        $res=mysqli_query($lien,$req); 
        if(!$res){
            echo"ErreurSql".mysqli_error($lien);
        }
        else{
            echo " le produit est bien ajouté";
        }
    }
}
 }
?>
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="nomProduit" method="post" enctype="multipart/form-data" >
                                <div class="form-group">
                                    <input type="text" name="nomProduit"  id="nomProduit" tabindex="1" class="form-control" placeholder="nomProduit">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="ref" tabindex="2" class="form-control" placeholder="ref">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="prix" tabindex="3" class="form-control" placeholder="prix">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="description" tabindex="4" class="form-control" placeholder="description">
                                </div>
                                <div class="form-group">
                                    <input type="file" name="image" tabindex="5" class="form-control" placeholder="image">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="ajoutProduit-submit" id="ajoutProduit-submit" tabindex="6" class="form-control btn-secondary" value="Ajouter">
                                </div>
                            </form>
















                            <?php
include("utils/db.php");
include("fonctions/produitUse.php");
print_r($_POST);
 if(isset($_POST["Ajouter"])){
    // $nom=$_REQUEST['nomProduit'];
    // $reference=$_REQUEST['ref'];
    // $prix=$_REQUEST['prix'];
    // $description=$_REQUEST['description'];
    echo '1';
    $repertoire="./";
    $extenssion=array('jpg','jpeg','png');
    $image= $_FILES['image']['name'];
    $ext_photo=strrchr($image,".");
    $ext_photo=substr($ext_photo,1);
    $ext_photo=strtolower($ext_photo);

if(in_array($ext_photo,$extenssion)){
    echo '2';
    $nouveau_nom=uniqid().".$ext_photo";
    $envoi=move_uploaded_file($_FILES['image']['tmp_name'],$repertoire.$nouveau_nom);
    if(!$envoi){
        echo"erreur de transfert";
    }
    else{
        if(!createProduit($pdo,$_POST)){
            echo " l'enregistrement ne s'est pas fait";
        }
        else{
            echo " le produit est bien ajouté";
        }
    }
}
}
echo "je suis en ajout";
?>
<pre>
<?php
print_r ($_POST);
?>
</pre>
<form id="nomProduit" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" multipart/form-data" >
    nom du produit:<input type="text" name="nomProduit"  id="nomProduit" tabindex="1" class="form-control" placeholder="nomProduit">
    ref du produit:<input type="text" name="ref" tabindex="2" class="form-control" placeholder="ref">
    <input type="text" name="prix" tabindex="3" class="form-control" placeholder="prix">
    <input type="text" name="description" tabindex="4" class="form-control" placeholder="description">
    <input type="file" name="image" tabindex="5" class="form-control" placeholder="image">
    <input type="submit" name="ajoutProduit-submit" id="ajoutProduit-submit" tabindex="6" class="form-control btn-secondary" value="Ajouter">
</form>
