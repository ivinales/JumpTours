@include('layouts.header')


  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url('https://storage.googleapis.com/chile-travel-static-content/2019/07/camping-portada.jpg')">
          <div class="carousel-container">
            <div class="carousel-content animated fadeInUp">
              <h2>Ven a Disfrutar y <span>Conocer</span></h2>
              <p>La diversidad de Lugares que Jump Tours tiene para ofrecer como Campings y Parques.</p>
              <div class="text-center"><a href="/login" class="btn-get-started">Ingresar</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url('https://www.america-retail.com/static//2018/09/restaurante-e1537888347497.jpg')">
          <div class="carousel-container">
            <div class="carousel-content animated fadeInUp">
              <h2>Ven a Disfrutar y Conocer</h2>
              <p>Los maravillosos e increibles destinos gastronomicos que Jump Tours tiene para Ofrecer.</p>
              <div class="text-center"><a href="/login" class="btn-get-started">Ingresar</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url('https://www.chileanski.com/fotos/hotel/hi/Centro_atardecer_3-1454355373.jpg')">
          <div class="carousel-container">
            <div class="carousel-content animated fadeInUp">
              <h2>Ven a Disfrutar y Conocer</h2>
              <p>Los extraordinarios y amplios servicios Hoteleros que Jump Tours tiene para Ofrecer.</p>
              <div class="text-center"><a href="/login" class="btn-get-started">Ingresar</a></div>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h2>Bienvenido <span>a</span> Jump Tours!</h2>
            <p> Conoce, publicita, explora los sorprendentes lugares que tenemos para ofrecer en Chile, se parte de esta aventura y registrate como turista o como propietario de una empresa con la cual podras mostrar toda la información, contenido
              del tu organizacion para que los turistas lo conozcan y sepan como llegar a aquellos lugares que seran imperdibles.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="/login">Registrate</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2 class="section-title">LUGARES <strong>RECOMENDADOS</strong></h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active tipografia2">Todos los destinos</li>
              <li data-filter=".filter-app" class="tipografia2">Restaurantes y Pubs</li>
              <li data-filter=".filter-card" class="tipografia2">Parques y Campings</li>
              <li data-filter=".filter-web" class="tipografia2">Hoteles</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/restaurantfaro.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Restaurant el Faro</h4>
              <p>Visitar Perfil</p>
              

              <a href="/login" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/hotelalmagro.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Hotel Almagro</h4>
              <p>Visitar Perfil</p>
              <a href="/login" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/campingalamos.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Camping Alamos</h4>
              <p>Visitar Perfil</p>
              
              <a href="/login" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/fogon-del-mar-coquimbo.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Fogon del Mar</h4>
              <p>Visitar Perfil</p>
              
              <a href="/login" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/hotelbaia.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Hotel Baia - Enjoy</h4>
              <p>Visitar Perfil</p>
             
              <a href="/login" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/pub6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pub El Muelle</h4>
              <p>Visitar Perfil</p>
              
              <a href="/login" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>



        </div>

      </div>
    </section><!-- End Portfolio Section -->


    <hr>


    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <!-- START THE FEATURETTES -->
    
      <div class="section-title" data-aos="fade-up">
        <h1 class="section-title">Conoce todos <strong>Nuestros Servicios</strong></h1>
      </div>

      <br><br>
      <br>

    
      <div class="row featurette section-title" data-aos="fade-up">
        <div class="col-md-7">
          <h2 class="featurette-heading section-title">Publicita tu emprendimiento, negocio de una forma agradable e intuitiva.</h2>
          <p class="lead tipografia">Inicia sesión en Jump Tours para que puedas publicitar tu negocio, si eres un empresario o si eres turista conocer innumerables destinos, que tenemos para ofrecer.</p>
        </div>
        <div class="col-md-3 order-md-1">
          <img src="assets/img/lugaresuwu.jpg">
        </div>
      </div>
    
      <hr class="featurette-divider">
    
      <div class="row featurette section-title" data-aos="fade-up">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading section-title">Disponible para todos los dispositivos.</h2>
          <p class="lead tipografia">Accede a Jump Tours desde cualquier lugar a traves de nuestra aplicación móvil y aplicación Web.</p>
        </div>
        <div class="col-md-5 order-md-1">
         <img src="assets/img/article2.jpg">
        </div>
      </div>
    
      <hr class="featurette-divider">
    
      <div class="row featurette section-title" data-aos="fade-ups">
        <div class="col-md-7">
          <h2 class="featurette-heading section-title">Ofrecemos numerosas herramientas para ayudar a aquellos emprendedores a publicitar y mejorar su negocio.</h2>
          <p class="lead tipografia">Dedicado a turistas, empresarios de lugares que quieran conocer y publicitar lugares.</p>
        </div>
        <div class="col-md-5 order-md-1">
      <img src="assets/img/negociosuwu.jpg">
      </div>
      </div>
    
    <hr class="featurette-divider">
    
    
      <div class="row featurette section-title" data-aos="fade-up">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading section-title">Unete a ese increible proyecto Conoce los lugares mas recomendados de las regiones.</h2>
          <p class="lead tipografia">Disponible para la región de Coquimbo y Proximamente para todos las Regiones.</p>
        </div>
        <div class="col-md-5 order-md-1">
         <img src="assets/img/coquimboxd.jpg">
        </div>
      </div>
      
    
    
      <!-- /END THE FEATURETTES -->
    
    </div><!-- /.container -->
    
    
    
      <br><br>
    
      <!--Cierre de info de forma amplia-->


  </main><!-- End #main -->


@include('layouts.footer')
