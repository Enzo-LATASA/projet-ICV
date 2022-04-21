<?php
    //enregistrement en BD du nouvel utilisateur
    //chargement des paramètres de la BD
    include('./utils/db.php');
    //création de l'utilisateur


    try {
        $stmt = $pdo->prepare("INSERT INTO client (IDENTIFIANT, ADRESSE, CODE_POSTAL_CLIENT, PRENOM, MDP, EMAIL, VILLE_CLIENT, NOM) VALUES (?,?,?,?,?,?,?,UPPER(?))");
        $username = htmlspecialchars($_POST['username']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $code_postal = htmlspecialchars($_POST['code_postal']);
        $prenom = htmlspecialchars($_POST['firstname']);
        $pwdHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $email = htmlspecialchars($_POST['email']);
        $ville = htmlspecialchars($_POST['ville']);
        $nom = htmlspecialchars($_POST['lastname']);
        $stmt->execute([$username, $adresse, $code_postal, $prenom, $pwdHash, $email, $ville, $nom]);
        $stmt->fetch();
        header('Location: index.php?page=home');
        die();
    } catch(PDOException $e){
        echo "Erreur  : " . $e->getMessage();
    }
?>
