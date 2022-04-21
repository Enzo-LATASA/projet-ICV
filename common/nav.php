<div class="container-box-nav">

  <!--  1. Div : Contient les divs Contact et Social-->
  

  <!--  2. Div :Contient les divs Logo, Nom et liens-->
  <div class="container-LogoName-And-Link">

    <!--  2.1 Div Child 1: Contient les divs Logo et Nom-->
    <div class="logoAndName">


      <!--  2.1.2 Div Child 2: Contient le Nom-->
      <div class="Name">
        <h1>ICV 37</h1>
      </div>
      <!--  Fin de : 2.1 Div - divs Logo et Nom--->
    </div>

    <!--  2.2 Div Child 2: Contient la div container-Navlink-->
    <div class="container-Navlink">

      <!--2.2.1 Div Child 1 Contient les div des hyperliens-->
      <div class="container-box-Navlink" id="containerBoxNavLink">

        <!--2.2.n Div child 1-n : Contient les hyperliens-->
        <div class="navLink"><a href="">
            <div>
              <h2 class="h3-ICV">ICV 37</h2>
          </a></div>
      </div>
      <div class="navLink"><a href="index.php?page=home">Accueil</a></div>
      <div class="navLink"><a href="index.php?page=">Boutique</a></div>
      <div class="navLink"><a href="index.php?page=">Réparations</a></div>
      <div class="navLink"><a href="index.php?page=">ICV Services</a></div>
      <div class="navLink"><a href="index.php?page=">Prestation en Atelier</a></div>
      <div class="navLink"><a href="index.php?page=">Nos Actualités</a></div>
      <div class="navLink"><a href="index.php?page=">Nous Contacter</a></div>
      <?php
      if(isset($_SESSION["etatConnexion"])&& $_SESSION["etatConnexion"] == 1){
      ?>
      <div class="navLink"><a href="index.php?page=deconnexion">Deconnexion</a ></div>
      <?php
      }
      else{
      ?>
      <div class="navLink"><a href="index.php?page=connexion">Se connecter</a></div>
      <div class="navLink"><a href="index.php?page=inscription">S'inscrire</a></div>
      <?php
      }
      if(isset($_SESSION['ADMINISTRATEUR'])&& $_SESSION['ADMINISTRATEUR'] == 1){
      ?>
      <div class="navLink"><a href="index.php?page=ajout">Ajouter des produits</a></div>
      <?php
      }
      ?>
      <!--  Fin de : 2.2.1 Div - divs des hyperliens--->
    </div>
    <!--  Fin de : 2.2 Div -  container-Navlink--->
  </div>
  <!--Fin de : 2 Div - Logo, Nom et liens -->
</div>

<!-- 3. Div : Contient la div Menu-->
<div class="Container-menu-Hamburger">
  <!-- 3.1 Div Child 1 : Contient le menu -->
  <div class="menuHamburger">
    <i class='bx bx-menu'></i>
  </div>
</div>
<div class="background-Opacity"></div>
</div>

<script>
const menuHamburger = document.querySelector('.Container-menu-Hamburger');
const containerBoxNavLink = document.querySelector('#containerBoxNavLink');
const backgroundOpacity = document.querySelector('.background-Opacity');


menuHamburger.addEventListener('click', () => {
  menuHamburger.classList.toggle('active');
  containerBoxNavLink.classList.toggle('active');
  backgroundOpacity.classList.toggle('active');

})
</script>