    <?php 
    //include('common/functions.php');
    // accessibilité à la session courante de l'utilisateur
    session_start();
    // Affichage « de la partie haute » de votre site, commun à l'ensemble de votre site
    include('./common/header.php');
    // Pages autorisées : whitelist
    include('./whitelist/web.php');
    //nav commune à tout le site
    include('./common/nav.php'); 
    // Gestion de l'affichage de la page demandée
    if(isset($_GET['page']) && in_array($_GET['page'], $whitelist)) {
        include("pages/" . $_GET['page'] . '.php');
    } else {
        //si le champ page n'est pas accessible dans l'URL OU que l'accès à la page n'est pas possible
        //alors on demande une authentification 
        include('pages/home.php');
    }
    // Affichage de la partie basse de votre site, commun à l'ensemble de votre site. 
    include('./common/footer.php'); 
    ?>
