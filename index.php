<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Odyssey</title>
  <link rel="icon" href="img/index/logo.png">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" type="text/css" href="css/general.css"><!--CSS das configurações universais-->
  <link rel="stylesheet" type="text/css" href="./css/navbar.css"><!--CSS da navbar + sections-->
  <link rel="stylesheet" type="text/css" href="css/components.css"><!--CSS para slider do header, cards de produto, faixa de propaganda e slider final-->
  <link rel="stylesheet" type="text/css" href="css/sliderCategorias.css"><!--CSS para slider das categorias-->
  <link rel="stylesheet" type="text/css" href="css/footer.css"><!--CSS do footer-->
  <link rel="stylesheet" type="text/css" href="css/rolagem.css"><!--CSS para efeito de rolagem-->
</head>

<body id="page-top" class="index" data-pinterest-extension-installed="cr1.3.4">

  <!--Inicio da navbar-->
  <nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
    <div class="container">

      <!--Logo-->
      <div class="navbar-header page-scroll">
        <a class="navbar-brand page-scroll" href="#page-top"><img src="img/index/logo.png" width="25"> ODYSSEY</a>
      </div>

      <!--Componentes da navbar-->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
           <li class="">
            <a class="page-scroll" href="index.php">Home</a>
          </li>

          <li class="">
            <a class="page-scroll" href="produtos.php">Produtos</a>
          </li>

          <li class="">
            <a class="page-scroll" href="faleconosco.php">Contato</a>
          </li>

          <li class="">
            <a class="page-scroll" href="login.php">Entrar</a>
          </li>

        </ul>
      </div>
      <!--Fim componentes navbar-->
    </div>
  </nav>
  <!--Fim navbar-->

  <!--Inicio header -->
  <header>
    <div class="fnc-slider example-slider">
      <div class="fnc-slider__slides">

        <!--Inicio do primeiro slide-->
        <div class="fnc-slide m--blend-green m--active-slide">
          <div class="fnc-slide__inner">
            <div class="fnc-slide__mask">
              <div class="fnc-slide__mask-inner"></div>
            </div>
            <div class="fnc-slide__content">
              <h2 class="fnc-slide__heading">
                <div class="fnc-slide__heading-line">
                  <span>Chegou</span>
                </div>
                <div class="fnc-slide__heading-line">
                  <span>Demon's Souls</span>
                </div>
              </h2>
              <a href="produtos.php">
                <button type="button" class="fnc-slide__action-btn">
                  Saiba Mais
                  <span data-text="Saiba Mais">Saiba mais</span>
                </button>
              </a>
            </div>
          </div>
        </div>
        <!--Fim do primeiro slide-->

        <!--Inicio do segundo slide-->
        <div class="fnc-slide m--blend-dark">
          <div class="fnc-slide__inner">
            <div class="fnc-slide__mask">
              <div class="fnc-slide__mask-inner"></div>
            </div>
            <div class="fnc-slide__content">
              <h2 class="fnc-slide__heading">
                <div class="fnc-slide__heading-line">
                  <span>Encontre aqui </span>
                </div>
                <div class="fnc-slide__heading-line">
                  <span>GTA 5 para PS5</span>
                </div>
              </h2>
              <a href="produtos.php">
                <button type="button" class="fnc-slide__action-btn">
                  Saiba Mais
                  <span data-text="Saiba Mais">Saiba mais</span>
                </button>
              </a>
            </div>
          </div>
        </div>
        <!--Fim do segundo slide-->

        <!--Inicio do terceiro slide-->
        <div class="fnc-slide m--blend-red">
          <div class="fnc-slide__inner">
            <div class="fnc-slide__mask">
              <div class="fnc-slide__mask-inner"></div>
            </div>
            <div class="fnc-slide__content">
              <h2 class="fnc-slide__heading">
                <div class="fnc-slide__heading-line">
                  <span>Spider-Man </span>
                </div>
                <div class="fnc-slide__heading-line">
                  <span>Miles Morales:</span>
                </div>
              </h2>
              <a href="produtos.php">
                <button type="button" class="fnc-slide__action-btn">
                  Saiba Mais
                  <span data-text="Saiba Mais">Saiba mais</span>
                </button>
              </a>
            </div>
          </div>
        </div>
        <!--Fim do terceiro slide-->

        <!--Inicio do quarto slide-->
        <div class="fnc-slide m--blend-blue">
          <div class="fnc-slide__inner">
            <div class="fnc-slide__mask">
              <div class="fnc-slide__mask-inner"></div>
            </div>
            <div class="fnc-slide__content">
              <h2 class="fnc-slide__heading">
                <div class="fnc-slide__heading-line">
                  <span>Horizon:</span>
                </div>
                <div class="fnc-slide__heading-line">
                  <span> Forbidden West</span>
                </div>
              </h2>
              <a href="produtos.php">
                <button type="button" class="fnc-slide__action-btn">
                  Saiba Mais
                  <span data-text="Saiba Mais">Saiba mais</span>
                </button>
              </a>
            </div>
          </div>
        </div>
        <!--Fim do quartos lide-->

      </div>
      <nav class="fnc-nav">
        <div class="fnc-nav__bgs">
          <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
          <div class="fnc-nav__bg m--navbg-dark"></div>
          <div class="fnc-nav__bg m--navbg-red"></div>
          <div class="fnc-nav__bg m--navbg-blue"></div>
        </div>

        <!--Inicio controles do slider-->
        <div class="fnc-nav__controls">
          <button class="fnc-nav__control">
            Demon´s Soul
            <span class="fnc-nav__control-progress"></span>
          </button>
          <button class="fnc-nav__control">
            GTA 5
            <span class="fnc-nav__control-progress"></span>
          </button>
          <button class="fnc-nav__control">
            Spider Man
            <span class="fnc-nav__control-progress"></span>
          </button>
          <button class="fnc-nav__control">
            Horizon
            <span class="fnc-nav__control-progress"></span>
          </button>
        </div>
        <!--Fim controles do slider-->
      </nav>
    </div>
  </header>
  <!--Fim header-->

  <!--Desenvolvimento do side-->
  <section>

    <!--Inicio slider categorias-->
    <div class="container">
      <section class="customer-logos slider">
        <div class="slide">
            <a href="produtos.html">
          <div class="image-card" style="background-image: url('img/index/iconPlaystation.png')"></div>
                </a>
        </div>

        <div class="slide">
            <a href="produtos.php">
          <div class="image-card" style="background-image: url('img/index/iconXbox.png')"></div>
                </a>
        </div>

        <div class="slide">
            <a href="produtos.php">
          <div class="image-card" style="background-image: url('img/index/iconNitendo.png')"></div>
                </a>
        </div>

        <div class="slide">
            <a href="produtos.php">
          <div class="image-card" style="background-image: url('img/index/iconMarvel.png')"></div>
                </a>
        </div>

        <div class="slide">
            <a href="produtos.php">
          <div class="image-card" style="background-image: url('img/index/iconDc.png')"></div>
                </a>
        </div>

        <div class="slide">
            <a href="produtos.php">
          <div class="image-card" style="background-image: url('img/index/iconSega.png')"></div>
                </a>
        </div>

        <div class="slide">
            <a href="produtos.php">
          <div class="image-card" style="background-image: url('img/index/cod.jpeg')"></div>
                </a>
        </div>

        <div class="slide">
            <a href="produtos.php">
          <div class="image-card" style="background-image: url('img/index/deathstranding.jpg')"></div>
                </a>
        </div>

        <div class="slide">
            <a href="produtos.php">
          <div class="image-card" style="background-image: url('img/index/fortnite.jpg')"></div>
                </a>
        </div>

        <div class="slide">
            <a href="produtos.php">
          <div class="image-card" style="background-image: url('img/index/icongta.jpg')"></div>
                </a>
        </div>

        <div class="slide">
            <a href="produtos.php">
          <div class="image-card" style="background-image: url('img/index/Kratinhos.jpg')"></div>
                </a>s
        </div>

        <div class="slide">
            <a href="produtos.php">
          <div class="image-card" style="background-image: url('img/index/REvil.jpeg')"></div>
                </a>
        </div>

        <div class="slide">
            <a href="produtos.php">
          <div class="image-card" style="background-image: url('img/index/tombraider.jpg')"></div>
                </a>
        </div>
      </section>
    </div>
    <!--Fim slider categorias-->

    <!--Inicio sessão produtos mais vendidos-->
    <div class="container">

      <div class="row"><!--Titulo-->
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">
            <hr>Os mais vendidos
            <hr>
          </h2>
        </div>
      </div>

      <!--Produtos - 1º parte-->
      <div class="row">
        <div class='product--blue'>
          <div class='product_inner'>
              <a href="produtos.php">
                  <img src="img/index/360.png" width='300'>
            <br><br>
            <p>Xbox One + Kinect</p>
            <p>R$ 3.799,00</p>
            <button>Adicionar ao carrinho</button>
                  </a>

          </div>
        </div>

        <div class='product--blue'>
          <div class='product_inner'>
            <img src="img/index/kinect.png" width='300'>
            <br><br>
            <p>Kinect (Xbox One)</p>
            <p>R$ 999,00</p>
              <a href="produtos.php">
            <button>Adicionar ao carrinho</button>
                  </a>
          </div>
        </div>

        <div class='product--blue'>
          <div class='product_inner'>
            <img src="img/index/produtoSwitch.png" width='300'>
            <br><br>
            <p>Nintendo Switch</p>
            <p>R$ 2.260,00</p>
              <a href="produtos.php">
            <button>Adicionar ao carrinho</button>
                  </a>
          </div>
        </div>

        <div class='product--blue'>
          <div class='product_inner'>
            <img src="img/index/ps3.png" width='300'>
            <br><br>
            <p>PS3 Slim</p>
            <p>R$ 1.200,99</p>
              <a href="produtos.php">
            <button>Adicionar ao carrinho</button>
                  </a>
          </div>
        </div>
      </div><!--Fim produtos - 1º parte-->
    </div>
  </section>

  <!--Propaganda-->
  <section>
      <a href="produtos.php">
    <img width="100%" src="img/contato/testin.jpeg">
          </a>
  </section>
  
  <!--Continua sessão produtos mais vendidos-->
  <section>
    <div class="container">

      <!--Inicio produtos - 2º parte-->
      <div class="row">
        <div class='product--blue'>
          <div class='product_inner'>
            <img src="img/index/ps4Pro.png" width='300'>
            <br><br>
            <p>PS4 Pro</p>
            <p>R$ 3.974.27</p>
              <a href="produtos.php">
            <button>Adicionar ao carrinho</button>
                  </a>
          </div>
        </div>

        <div class='product--blue'>
          <div class='product_inner'>
            <img src="img/index/xoneColore.png" width='300'>
            <br><br>
            <p>Xbox One Gears 5</p>
            <p>R$ 3.599,90</p>
              <a href="produtos.php">
            <button>Adicionar ao carrinho</button>
                  </a>
          </div>
        </div>
        <div class='product--blue'>
          <div class='product_inner'>
            <img src="img/index/ps4Slim.png" width='300'>
            <br><br>
            <p>PS4 Slim</p>
            <p>R$ 2.599,00</p>
              <a href="produtos.php">
            <button>Adicionar ao carrinho</button>
                  </a>
          </div>
        </div>

        <div class='product--blue'>
          <div class='product_inner'>
            <img src="img/index/xoneP.png" width='300'>
            <br><br>
            <p>Xbox One</p>
            <p>R$ 2.399,00</p>
              <a href="produtos.php">
            <button>Adicionar ao carrinho</button>
                  </a>
          </div>
        </div>

        <div class='product--blue'>
          <div class='product_inner'>
            <img src="img/index/ps5.png" width='300'>
            <br><br>
            <p>PS5</p>
            <p>R$ 5.339,05</p>
              <a href="produtos.php">
            <button>Adicionar ao carrinho</button>
                  </a>
          </div>
        </div>
      </div>
      <!--Fim produtos - 2º parte-->

    </div>
  </section>
  <!--Fim sessão produtos mais vendidos-->

  <!--Inicio segunda propaganda - Desconto-->
  <section>
    <div class="wrapper-full">
      <div class="cta-wrapper">
        <div class="details-wrapper">
          <h2>Cadastre-se e receba as melhores promoções</h2>
          <p>Aqui você encontra os melhores produtos do mundo geek</p>
        </div>
        <a class="blue-cta-button" href="login.php">Cadastre-se</a>
        <div class="clearfix"></div>
      </div>
    </div><br><br>

    <!--Efeito etiqueta-->
    <div class="front">
      <a href="login.php">
        <div class="badges"><br>
          <p><br>
            <span class="secondLine">10% DE</span><br>
            <span class="firstLine">DESCONTO</span><br>

            <span class="fourthLine">NA SUA PRIMEIRA COMPRA</span>
          </p>
        </div>
      </a>
    </div>
    <!--Fim efeito etiqueta-->
  </section>
  <!--Fim propaganda - Desconto-->

  <!--Inicio slider com personagens de jogos-->
  <section>
    <div id="sequence" class="seq">
      <div class="seq-screen">
        
        <!--Personagens-->
        <ul class="seq-canvas">

          <li class="seq-in">
            <div class="seq-model">
              <img data-seq src="img/index/assassinscreed2.png" />
            </div>
            <div class="seq-title">
              <h2 data-seq>Assassin's Creed Origins</h2>
              <br><br><br>
              <a class="blue-cta-button" href="produtos.php">Comprar</a>
            </div>
          </li>

          <li>
            <div class="seq-model">
              <img data-seq src="img/index/LaraCroft.png" />
            </div>
            <div class="seq-title">
              <h2 data-seq>Tomb Raider</h2>
              <br><br><br><br>
              <br>
            </div>
          </li>

          <li>
            <div class="seq-model">
              <img data-seq src="img/index/Scorpion%20(2).png" />
            </div>
            <div class="seq-title">
              <h2 data-seq>Mortal Kombat XL</h2>
              <br><br><br><br><br>
            </div>
          </li>
          
        </ul>
        <!--Fim personagens-->
      </div>

      <!--Inicio controle do slider com personagens-->
      <ul role="navigation" aria-label="Pagination" class="seq-pagination">
        <li><a href="#step1" rel="step1" title="Go to slide 1"><img src="img/index/assassinscreed2.png"
              width="100px" /></a></li>
        <li><a href="#step3" rel="step3" title="Go to slide 3"><img src="img/index/LaraCroft.png" width="100px" /></a>
        </li>
        <li><a href="#step3" rel="step3" title="Go to slide 3"><img src="img/index/scorpion.png" width="100px" /></a>
        </li>
      </ul>
      <!--Fim controle do slider com personagens-->
    </div>
  </section>
  <!--Fim slider com personagens-->

  <!--Inicio cards de propaganda-->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a href="produtos.php">
            <img src="img/index/cyberpunk1.jpeg" class="img-responsive" alt="">
          </a>
        </div>

        <div class="col-md-4 col-s6 portfolio-item">
          <a href="produtos.php">
            <img src="img/index/cyberpunk2.png" class="img-responsive" alt="">
          </a>
        </div>

        <div class="col-md-4 col-sm-6 portfolio-item">
          <a href="produtos.php">
            <img src="img/index/cyberpunk3.jpeg" class="img-responsive" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>
  <!--Fim cards de propaganda-->

  <!--Inicio footer-->-->
  <footer class="flex-rw">

    <!--Sobre serviços-->
    <ul class="footer-list-top">
      <li>
        <h4 class="footer-list-header">Serviços</h4>
      </li>
      <li><a href=# class="generic-anchor footer-list-anchor" itemprop="significantLink">AJUDA</a>
      </li>
      <li><a href=# class="generic-anchor footer-list-anchor" itemprop="significantLink">FALE CONOSCO</a>
      </li>
      <li><a href=# class="generic-anchor footer-list-anchor"
          itemprop="significantLink">FAQ'S</a>
      </li>
    </ul>

    <!--Sobre mapa do site-->
    <ul class="footer-list-top">
      <li>
        <h4 class="footer-list-header">Mapa do site</h4>
      </li>
      <li><a href=# class="generic-anchor footer-list-anchor">CONSOLES</a></li>
      <li><a href=# class="generic-anchor footer-list-anchor"></a></li>
      <li><a href=# class="generic-anchor footer-list-anchor">JOGOS | MIDIA FISICA</a></li>
      <li><a href=# class="generic-anchor footer-list-anchor">JOGOS | MIDIA DIGITAL</a></li>
    </ul>

    <!--Sobre informações-->
    <ul class="footer-list-top">
      <li>
        <h4 class="footer-list-header">Informações</h4>
      </li>
      <li><a href=# class="generic-anchor footer-list-anchor" itemprop="significantLink">EMPRESA</a>
      </li>
      <li><a href=# class="generic-anchor footer-list-anchor" itemprop="significantLink">LOCALIZAÇÃO</a></li>
      <li ><a href=# class="generic-anchor footer-list-anchor" itemprop="significantLink">PARCERIAS</a></li>
    </ul>

    <!--Nome e redes sociais-->
    <section class="footer-social-section flex-rw">
      <span class="footer-social-overlap footer-social-connect">
        <span class="footer-social-small">ODYSSEY</span>
      </span>
      <span class="footer-social-overlap footer-social-icons-wrapper">
        <a href="https://www.pinterest.com/paviliongift/" class="generic-anchor" target="_blank" title="Pinterest"
          itemprop="significantLink"><i class="fa fa-pinterest"></i></a>
        <a href="https://www.facebook.com/paviliongift" class="generic-anchor" target="_blank" title="Facebook"
          itemprop="significantLink"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/PavilionGiftCo" class="generic-anchor" target="_blank" title="Twitter"
          itemprop="significantLink"><i class="fa fa-twitter"></i></a>
        <a href="http://instagram.com/paviliongiftcompany" class="generic-anchor" target="_blank" title="Instagram"
          itemprop="significantLink"><i class="fa fa-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UCYgUODvd0qXbu_LkUWpTVEg" class="generic-anchor" target="_blank"
          title="Youtube" itemprop="significantLink"><i class="fa fa-youtube"></i></a>
        <a href="https://plus.google.com/+Paviliongift/posts" class="generic-anchor" target="_blank" title="Google Plus"
          itemprop="significantLink"><i class="fa fa-google-plus"></i></a>
      </span>
    </section>
    <!--Fim nome e redes sociais-->

    <section class="footer-bottom-section flex-rw">
      <div class="footer-bottom-wrapper">
        <i class="fa fa-copyright" role="copyright">

        </i> <span class="footer-bottom-rights">Copyright © - All rights reserved. </span>
      </div>
      <div class="footer-bottom-wrapper">
        <a href="/terms-of-use.html" class="generic-anchor" rel="nofollow">Terms</a> | <a href="/privacy-policy.html"
          class="generic-anchor" rel="nofollow">Privacy</a>
      </div>
    </section>
  </footer>
  <!--Fim footer-->

  <!--Inicio JS-->
    
  <script src="js/banner.js"></script><!--JS para slider do header-->
   
  <script
    src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/jquery-1.11.0.js"></script>

  <script
    src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    
  <script
    src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/classie.js"></script>
    
  <script
    src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/cbpAnimatedHeader.js"></script>

  <script
    src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/jqBootstrapValidation.js"></script>
    
  <script
    src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/contact_me.js"></script>

  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/154/imagesloaded.pkgd.min.js"></script>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/154/hammer.min.js"></script>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/154/sequence.min.js"></script>
  <script src="js/sliderPersonagens.js"></script> <!--JS para slider com personagens-->
    
  <script src="js/sliderCategorias.js"></script> <!--JS para slider de categorias-->
  <!--Fim JS-->

</body>
</html>