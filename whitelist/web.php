<?php 
 $whitelist = array('connexion', 'authentif', 'inscription', 'register', 'viderSession', 'reservation', 'profilUtilisateur','description', 'profilUtilisateurModif', 'ajout');
//if(isset($_SESSION["etatConnexion"]) && $_SESSION["etatConnexion"]==1) {
    //la connexion a été établie
    array_push($whitelist, 'home', 'deconnexion');
//}
//déclarer des accès specifique admin
?>