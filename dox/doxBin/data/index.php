<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Google Fonts  -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@500;700&display=swap" rel="stylesheet" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- Aos css  -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <link rel="stylesheet" href="Assets/vendors/Swiper/css/swiper-bundle.min.css" />

  <link rel="stylesheet" href="Assets/vendors/owlcarousel/distAssets/owl.carousel.css" />
  <link rel="stylesheet" href="Assets/vendors/owlcarousel/distAssets/owl.theme.default.css" />

  <link rel="stylesheet" href="Assets/vendors/boxicons/css/boxicons.min.css" />


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <link rel="stylesheet" href="Assets/vendors/bootstrap/css/bootstrap.min.css" />

  <link rel="stylesheet" href="Assets/css/index.css" />
  <title>deem.</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">deem.</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false">
        <i class="fa-solid fa-align-left navbar-toggler-icon"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mx-auto mb-2">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Notas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">FAQ</a>
          </li>
        </ul>
        <ul class="navbar-nav mb-2 mb-md-0 d-flex align-items-center justify-content-center">
          <li class="nav-item">
            <a href="/login.html" class="nav-link">Entrar</a>
          </li>
          <li class="nav-link">
            <a href="#" class="btn btn-btn">Inscreva-se</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="showcase">
    <div class="container-fluid">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item">
            <!-- <img src="..." class="d-block w-100" alt="..." /> -->
            <div class="row">
              <div class="col-md-6 showcase-text">
                <h1 class="showcase-title">Transações seguras</h1>
                <p class="showcase-content">
                Transações seguras entre compradores e vendedores para evitar
                   riscos.
                </p>
                <a href="/register" class="btn btn-btn">Iniciar</a>
              </div>
              <div class="col-md-6 showcase-img">
                <img src="Assets/img/img-2.png" class="img-fluid w-100" alt="" />
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-6 showcase-text">
                <h1 class="showcase-title">Melhores taxas de câmbio</h1>
                <p class="showcase-content">
                 
                </p>
                <a href="/register" class="btn btn-btn">Get Started</a>
              </div>
              <div class="col-md-6 showcase-img">
                <img src="Assets/img/img-3.png" class="img-fluid w-100" alt="" />
              </div>
            </div>
          </div>
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-6 showcase-text">
                <h1 class="showcase-title">
                  
                </h1>
                <p class="showcase-content">
                  
                </p>
                <a href="/register" class="btn btn-btn">Iniciar</a>
              </div>
              <div class="col-md-6 showcase-img">
                <img src="Assets/img/img-1.png" class="img-fluid w-100" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="wave">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#13192F" fill-opacity="1"
        d="M0,256L16,229.3C32,203,64,149,96,133.3C128,117,160,139,192,133.3C224,128,256,96,288,117.3C320,139,352,213,384,256C416,299,448,309,480,304C512,299,544,277,576,240C608,203,640,149,672,117.3C704,85,736,75,768,96C800,117,832,171,864,197.3C896,224,928,224,960,213.3C992,203,1024,181,1056,186.7C1088,192,1120,224,1152,240C1184,256,1216,256,1248,245.3C1280,235,1312,213,1344,170.7C1376,128,1408,64,1424,32L1440,0L1440,0L1424,0C1408,0,1376,0,1344,0C1312,0,1280,0,1248,0C1216,0,1184,0,1152,0C1120,0,1088,0,1056,0C1024,0,992,0,960,0C928,0,896,0,864,0C832,0,800,0,768,0C736,0,704,0,672,0C640,0,608,0,576,0C544,0,512,0,480,0C448,0,416,0,384,0C352,0,320,0,288,0C256,0,224,0,192,0C160,0,128,0,96,0C64,0,32,0,16,0L0,0Z">
      </path>
    </svg>
  </div>

  <section class="features">
    <div class="container-fluid">
      <div class="row g-5">
        <div class="col-md-4 mb-3">
          <div class="feature-icon">
            <i class="fa-solid fa-circle-check"></i>
          </div>
          <div class="feature-title">Fácil de Usar</div>
          <div class="feature-text">
            <span class="navbar-brand">deem.</span> é muito fácil de usar, não
             pondere sobre como usá-lo
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="feature-icon">
            <i class="fa-solid fa-right-left"></i>
          </div>
          <div class="feature-title">Boa Taxa</div>
          <div class="feature-text">
            <span class="navbar-brand">deem.</span> é rápido e confiável
             taxas de câmbio nas quais você pode confiar.
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-icon">
            <i class="fa-solid fa-lock"></i>
          </div>
          <div class="feature-title">Secure</div>
          <div class="feature-text">
            <span class="navbar-brand">deem.</span> está protegido para que você não
             precisar se preocupar com suas transações.
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="live-rate">
    <div class="container-fluid">
      <h1 class="exchange-rate-title">Taxa de câmbio ao vivo</h1>
      <div class="owl-carousel owl-theme owl-loaded owl-height">
        <div class="owl-stage-outer">
          <div class="owl-stage">
            <div class="owl-item">
              <div class="crypto-icon">
                <i class="fa-brands fa-bitcoin"></i>
              </div>
              <div class="crypto-info">
                <div class="crypto-name">
                  <div class="crypto-name">Bitcoin</div>
                  <div class="crypto-live-value">Live&nbsp;Value($)</div>
                </div>
                <div class="crypto-value">
                  <div class="crypto-rate">560/$</div>
                  <div class="crypto-value">$34,567</div>
                </div>
              </div>
            </div>
            <div class="owl-item">
              <div class="crypto-icon">
                <i class="fa-brands fa-ethereum"></i>
              </div>
              <div class="crypto-info">
                <div class="crypto-name">
                  <div class="crypto-name">Ethereum</div>
                  <div class="crypto-live-value">Live&nbsp;Value($)</div>
                </div>
                <div class="crypto-value">
                  <div class="crypto-rate">520/$</div>
                  <div class="crypto-value">$34,567</div>
                </div>
              </div>
            </div>
            <div class="owl-item">
              <div class="crypto-icon">
                <i class="fa-solid fa-litecoin-sign"></i>
              </div>
              <div class="crypto-info">
                <div class="crypto-name">
                  <div class="crypto-name">Litecoin</div>
                  <div class="crypto-live-value">Live&nbsp;Value($)</div>
                </div>
                <div class="crypto-value">
                  <div class="crypto-rate">R$155</div>
                  <div class="crypto-value">R$85</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="brand-ad">
    <div class="container-fluid">
      <div class="row g-5">
        <div class="col-md-6 ad">
          <h1 class="brand-ad-title">
            <span class="navbar-brand">deem.</span> Plataforma de serviço de encordoamento
            online no Brasil!
          </h1>
          <p class="brand-ad-content">
            <span class="brand">deem.</span> é a melhor plataforma que você pode comprar
             e venda criptomoedas e cartões-presente com pagamento rápido em
             sua conta.
          </p>
          <div class="btns g-5">
            <a href="/register" class="btn btn-btn">Registro</a>
            <a href="#" class="btn btn-dark">Login</a>
          </div>
        </div>
        <div class="col-md-6 d-flex justify-content-center brand-ad-img">
          <img src="Assets/img/slider-img.png" alt="" class="img-fluid w-75" />
        </div>
      </div>
    </div>
  </section>

  <section class="brand-ad-2">
    <div class="container-fluid">
      <div class="row g-5">
        <div class="col-md-6">
          <h1><span class="navbar-brand"> deem. </span> Troca de criptografia</h1>
          <ul class="brand-ad-2-ul">
            <li class="brand-ad-2-li">
              <span><i class="fa-brands fa-500px"></i></span> Boa 
              troca
            </li>
            <li class="brand-ad-2-li">
              <span><i class="fa-solid fa-jet-fighter-up"></i></span> Pagamento
              rápido
            </li>
            <li class="brand-ad-2-li">
              <span><i class="fa-solid fa-right-left"></i></span> Valores criptográficos em tempo real
            </li>
            <li class="brand-ad-2-li">
              <span><i class="fa-solid fa-shield"></i></span> Transações
              Seguras
            </li>
            <li class="brand-ad-2-li">
              <span><i class="fa-solid fa-rotate"></i></span> Troca de cartões
            </li>
          </ul>
          <div class="brand-ad-2-btn">
            <a href="/register" class="btn btn-btn">Iniciar</a>
          </div>
        </div>

        <div class="col-md-6 d-flex justify-content-center brand-ad-2-img">
          <img src="Assets/img/about-img.png" alt="" class="img-fluid w-75" />
        </div>
      </div>
    </div>
  </section>

  <section id="testimonials" class="testimonials section-bg">
    <div class="container-fluid" data-aos="fade-up">
      <div class="section-title">
        <h2>Depoimentos</h2>
        <p>
          Awesome reviews from people who have used
          <span class="brand">deem.</span> Try our service today .
        </p>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="Assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="" />
              <h3>Junior Murray Dartora</h3>
              <h4>Ceo &amp; Fundador </h4>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="Assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="" />
              <h3>Emilly Rodrigues</h3>
              <h4>Designer</h4>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Amo cada parte de meu program <3 !
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="Assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="" />
              <h3>Jeniffer Lumm da Silva</h3>
              <h4>Dona da Loja</h4>
            </div>
          </div>


          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
               
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="Assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="" />
              <h3>Apolo Schumacher D. </h3>
              <h4>Freelancer</h4>
            </div>
          </div>
 

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                H3ll0 w0rld!
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="Assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="" />
              <h3>Arthur Dartora</h3>
              <h4>Entrepreneur</h4>
            </div>
          </div>

        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
  
  <section class="download-app-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 download-text">
          <h1>Faça o download do <span class="navbar-brand">deem.</span>App</h1>
          <p>
            The <span class="brand">deem.</span>O aplicativo está disponível para download no Google Playstore e Apple Appstore.
          </p>
          <div class="btns g-5">
            <a href="#" class="btn btn-btn">
              <span><i class="fa-brands fa-google-play"></i></span>
              Playstore</a>
            <a href="#" class="btn btn-dark">
              <span><i class="fa-brands fa-apple"></i></span> Appstore</a>
          </div>
        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-center">
          <img src="Assets/img/app.png" alt="" class="img-fluid w-75" />
        </div>
      </div>
    </div>
  </section>

  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-contact">
            <h3 class="navbar-brand">deem.</h3>
            <p>
              5 Pearl Crescent <br />
             <br />
              Brasil<br /><br />
              <strong>Phone:</strong> +234 907 5341 378<br />
              <strong>Email:</strong> info@deem.com<br />
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Serviços</h4>
            <ul>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="#">Blog</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="#">Sobre</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="#">Notas</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Termos de serviço</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Politica de privacidade</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Socials</h4>
            <ul>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="#">Twitter</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Instagram</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Facebook</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="#">Marketing</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">info@deem.com</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>ERROR 404</h4>
            <p>
              Subscribe to our Newsletter to get new updates directly in your
              mail
            </p>
            <form action="" method="post">
              <input type="email" name="email" /><input type="submit" value="Inscreva-se" />
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright-wrap d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright
            <strong><span class="brand">deem.</span></strong> All Rights
            Reserved
          </div>
          <div class="credits">
            Designed by
            <a href="https://zuxxypml.netlify.app/">Akinade Adebisi</a>
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>
    </div>
  </footer>

</body>
<script src="https://kit.fontawesome.com/24f6148add.js" crossorigin="anonymous"></script>
<!-- jQuery  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Swiper Js  -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<!-- Owl JS  -->
<script src="Assets/vendors/owlcarousel/dist/owl.carousel.js"></script>
<!-- Bootstrap Js  -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
  integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
  integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<script src="Assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
<!-- Aos   -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Core   -->
<script src="Assets/js/index.js"></script>
<script>
  var owl = $(".owl-carousel");
  owl.owlCarousel({
    items: 4,
    nav: false,
    dots: false,
    loop: true,
    margin: 80,
    autoplay: true,
    autoplayTimeout: 1000,
    autoplayHoverPause: true,
    responsiveClass: true,
    responsive: {
      360: {
        items: 1,
      },
      480: {
        items: 3,
      },
      760: {
        items: 5,
        loop: true,
      },
    },
  });
</script>
<script>
  new Swiper(".testimonials-slider", {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    slidesPerView: "auto",
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true,
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 40,
      },

      1200: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
    },
  });
</script>
<script>
  AOS.init();
</script>

</html>
