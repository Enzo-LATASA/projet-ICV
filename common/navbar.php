<link href="css/navbarStyle.css" rel="stylesheet" />
<link
  href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
  rel="stylesheet"
/>

<nav class="navbar">
  <!---->
  <div class="container-Nav">
    <!---->
    <div class="contactAndMedia">
      <!---->
      <div class="contact">
        <div>
          <a
            href="https://www.google.com/maps/place/ICV+Informatique/@47.3566176,0.6615192,17z/data=!3m1!4b1!4m5!3m4!1s0x47fcd5d31803b547:0xd3d586b6a8ba9adc!8m2!3d47.3566176!4d0.6637079"
            >10 Place de la Grange, 37300 Joué-Lès-Tours</a
          >
        </div>
        <div><a href="tel:+33246469730">O2 46 46 97 30</a></div>
        <div><a href="tel:+33971263756">09 71 26 37 56</a></div>
        <div>
          <a href="mailto:informatiquechezvous37@gmail.com"
            >informatiquechezvous37@gmail.com</a
          >
        </div>
      </div>
      <!---->
      <div class="socialMedia">
        <div class="linkSocial">
          <a href="https://www.facebook.com/INFORMATIQUECHEZVOUS"
            ><em class="bx bxl-facebook-circle"></em
          ></a>
        </div>

        <div class="linkSocial">
          <a href="https://www.instagram.com/icvinformatique/?hl=fr"
            ><em class="bx bxl-instagram-alt"></em
          ></a>
        </div>

        <div class="linkSocial">
          <a href="https://twitter.com/37Icv"><i class="bx bxl-twitter"></i></a>
        </div>

        <div class="linkSocial">
          <a href="https://www.linkedin.com/company/icv-informatique-sas/"
            ><em class="bx bxl-linkedin"></em
          ></a>
        </div>
      </div>
    </div>
    <!---->
    <div class="container-logo-name-navlink">
      <div class="containerLogoAndName">
        <div class="logo"><img src="media/cropped-Logo-icv.png" alt="" /></div>
        <div class="name-Branding" onclick="redirection('home')">
          <h1>ICV 37</h1>
        </div>
      </div>
      <!---->
      <div class="containerLink">
        <div class="box-link">
          <div class="navLink" onclick="redirection('accueil')">Accueil</div>
          <div class="navLink" onclick="redirection('Boutique')">Boutique</div>
          <div class="navLink" onclick="redirection('reparation')">
            Réparation
          </div>
          <div class="navLink" onclick="redirection('service')">
            ICV Services
          </div>
          <div class="navLink" onclick="redirection('atelier')">
            Prestation en Atelier
          </div>
          <div class="navLink" onclick="redirection('actualites')">
            Nos actualités
          </div>
          <div class="navLink" onclick="redirection('contact')">
            Nous Contacter
          </div>
        </div>
      </div>
    </div>
    <!---->
    <div class="navbarHamburger"><i class="bx bx-menu"></i></div>
  </div>
</nav>

<script>
  function redirection(url) {
    window.location.href = "index.php?page=" + url;
  }

  const buttonHamburger = document.querySelector(".navbarHamburger");
  const menuLink = document.querySelector(".containerLink");

  buttonHamburger.addEventListener("click", () => {
    buttonHamburger.classList.toggle("active");
    menuLink.classList.toggle("active");
  });
</script>
