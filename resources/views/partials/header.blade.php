<div class="header_absolute s-pb-30">
<header class="page_header ds">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-xl-2 col-lg-3 col-11">
                {{-- <a href="./" class="logo text-center">
                    <img src="images/.png" alt="">
                </a> --}}
                <h4>Hestenn</h4>
            </div>
            <div class="col-xl-8 col-lg-6 col-1 text-sm-center">
                <!-- main nav start -->
                <nav class="top-nav">
                    <ul class="nav sf-menu">


                        <li class="active">
                            <a href="index.html">Accueil</a>                         
                        </li>
                        <li>
                            <a href="#Service">Services</a>
                        </li>
                        <!-- blog -->

                        <!-- gallery -->
                        <li>
                            <a href="#Projets">Nos projets</a>
                           
                        </li>
                        <!-- eof pages -->

                        <li>
                            <a href="about.html">Notre Équipe</a>
                        </li>
                        <!-- eof blog -->

                        <li>
                            <a href="#Contacte">Contacte</a>           
                        </li>

                    </ul>

                </nav>
                <!-- eof main nav -->
            </div>
            <div class="col-xl-2 col-lg-3 text-lg-left text-xl-right d-none d-lg-block">
                <div class="header_phone">
                    <h6>
                       
                    </h6>
                </div>
            </div>
        </div>
    </div>
    <!-- header toggler -->
    <span class="toggle_menu">
						<span></span>
					</span>
</header>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
      // Select all navigation links
      const navLinks = document.querySelectorAll("nav a");

// Attach click event listeners to the navigation links
      navLinks.forEach(function(link) {
        link.addEventListener("click", function(e) {
      e.preventDefault();

  // Get the target section ID from the href attribute
      const targetId = this.getAttribute("href");

  // Scroll smoothly to the target section
      document.querySelector(targetId).scrollIntoView({
        behavior: "smooth"
          });
});
});
});
</script>
