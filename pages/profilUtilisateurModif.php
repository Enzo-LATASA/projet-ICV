<?php
include ("./utils/db.php");
$username = htmlspecialchars($_POST['username']);
$prenom = htmlspecialchars($_POST['firstname']);
$nom = htmlspecialchars($_POST['lastname']);
$pwd = htmlspecialchars($_POST['password']);
$id = $_SESSION["CLIENT_ID"];
try {
    $sql= 'UPDATE utilisateurs SET ident_util=?, prenom_util=?, nom_util=?, pwd_util=?
    WHERE id_util=?';
    echo "<p style=text-align:center>modification réussi</p>";
    $stmt=$pdo->prepare($sql);
    $stmt->execute([$username, $prenom, $nom, $id]);
    $stmt->fetch();
} catch(PDOException $e){
    echo $e;    
}
?>