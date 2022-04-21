<?php
include('./utils/db.php');
include('fonctions/marqueUse.php ');

?>
<!--recherche rapide-->
<div class="container">
    <div class="row">
        <div class="span12">
            <form action="index.php?page=reservation" method="post" id="custom-search-form" class="form-search form-horizontal pull-right">
                <div class="input-append span12">
                    <input name="fastSearchValue" type="text" class="search-query" placeholder="Search">
                    <button name="fastSearch" type="submit" class="btn"><img src="./public/medias/search.svg"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--recherche avancée-->
<p class="lead text-center font-weight-bold">Type de produit</p>
<div class="container mt-3">
    <form action="index.php?page=reservation" method="post">
        <div class="row">
            <div class="col">
                <select id="type_produit" name="type_produit" class="form-control">
                    <option selected></option>
                    <?php
                    $options = getTypeProduit($pdo);
                    foreach ($options as $option) {
                        echo $option;
                    }
                    ?>
                </select>
            </div>
            <div class="row">
                <div class="col">
                    <input type="submit" name="searchAdvance" id="search-advance" tabindex="4" class="form-control btn-secondary" value="Rechercher">
                </div>
            </div>
<?php
//RECHERCHE RAPIDE SOLLICITEE
if (isset($_POST['fastSearch'])) {
    if (isset($_POST['fastSearchValue'])) {//il y a bien une valeur de saisie
        //affichage du résultat de la recherche rapide
        $results = getListMaterielDispoFast($pdo, $_POST['fastSearchValue']);
        if (is_null($results)) {
            echo "<p>pas de résultat</p>";
        } else {
            echo "<div class=\"container mt-3\"><table class=\"table\">
                    <thead class=\"thead-light\">
                        <tr>
                        <th>Produits</th>
                        <th>Réserver</th>
                        </tr>
                        </thead>
                    <tbody>";
            foreach ($results as $result) {
                echo "<tr>";
                echo "<td>" . $result['LIBELLE_PRODUIT'] . "</td>";
                echo '<td><img src="./public/medias/calendar-check.svg"></td>';
                echo "<tr>";
            }
        }
    } else {
        echo "<div class='alert alert-danger text-center mt-2' role='alert'>
        Vous devez saisir une chaine de caractères pour la recherche rapide</div>";
    }
}
?>