<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Produtos | Odyssey</title>
  <link rel="icon" type="imagem/png" href="img/index/logo.png">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/produtos.css"><!--Detalhes de categorias e marcas-->
  <link rel="stylesheet" type="text/css" href="css/rolagem.css"><!--CSS para efeito de rolagem-->
  <link rel="stylesheet" type="text/css" href="css/footer.css"><!--CSS para footer-->
  <link rel="stylesheet" type="text/css" href="css/navbar.css"><!--CSS para navbar-->
  <link rel="stylesheet" type="text/css" href="css/components.css"><!--CSS para slider do header-->
  <link rel="stylesheet" type="text/css" href="css/general.css"><!--CSS das configurações universais-->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="css/teste.css">

    <?php require_once 'global.php' ?>
        <?php
            try {
                $produto = new Produto();
                $listaProdutos = $produto->listar();
            } catch(Exception $e) {
                echo '<pre>';
                    print_r($e);
                echo '</pre>';
                echo $e->getMessage();
            }
        ?>

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
      </div><!--Fim componentes navbar-->
    </div>
  </nav>
  <!--Fim navbar-->

        <div id="slider-k">
    <div class="frame-k">
        <img src="img/produtos/fifa.png" width="600px" height="300px" alt="" />
    </div>
    <div class="frame-k">
        <img src="img/produtos/embreve1.png" width="600px" height="300px"alt="" />
    </div>
    <div class="frame-k">
        <img src="img/produtos/god.png" width="600px" height="300px" alt="" />
    </div>
    <div class="frame-k">
        <img src="img/produtos/thelast.png" width="600px"height= "300px"/>
    </div>
       
</div>

    
  <br><br>
  <!--Desenvolvimento da pág-->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <div class="left-sidebar">

            <!--Inicio categorias-->
            <h2>Categoria</h2>
            <div class="panel-group category-products" id="accordian">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                      <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                      Jogos
                    </a>
                  </h4>
                </div>
                <div id="sportswear" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ul>
                      <li><a href="">Midia fisica </a></li>
                      <li><a href="">Online </a></li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Consoles</a></h4>
                </div>
              </div>
            </div>
            <!--Fim categorias-->

            <!--Inicio marcas-->
            <div class="brands_products">
              <h2>MARCAS</h2>
              <div class="brands-name">
                <ul class="nav nav-pills nav-stacked">
                  <li><a href=""> <span class="pull-right">(50)</span>Sega</a></li>
                  <li><a href=""> <span class="pull-right">(56)</span>Nintendo</a></li>
                  <li><a href=""> <span class="pull-right">(27)</span>Atari</a></li>
                  <li><a href=""> <span class="pull-right">(32)</span>Microsoft</a></li>
                  <li><a href=""> <span class="pull-right">(5)</span>Sony</a></li>
                </ul>
              </div>
            </div><!--Fim marcas-->              
          </div> 
            <div class="prop">
                <a href="https://www.clickjogos.com.br/Jogos-online/Classicos/Pacman-come-come"><img src="img/produtos/pacman.jpg" width="100%"></a>
            </div>
        </div>
        
   
      
          
        <!--Inicio itens-->
        <div class="col-sm-9 padding-right">
          <div class="features_items">
            <h2 class="title text-center">Itens</h2>   

            <div class="row">
                
            <?php
              foreach($listaProdutos as $linha){
                $idproduto=$linha['idproduto'];
                echo"<div class='product--blue'>";
                echo"<div class='product_inner'>";
                echo"<img src='".$linha['fotoproduto']."'width='300'>";
                echo"<br><br>";
                echo"<p>".$linha['descproduto']."</p>";
                echo"<p> R$".$linha['valorproduto']."</p>";
                echo"<a href='detalhes.php'>";
                echo"<button>Adicionar ao carrinho</button>";
                echo" </a>";
                echo"</div>";
                echo"</div>";
              }
              ?>
            </div>
            <!--Fim itens--->

            <!--Paginação-->
            <ul class="pagination">
              <li class="active"><a href="">1</a></li>
              <li><a href="">2</a></li>
              <li><a href="">3</a></li>
              <li><a href="">&raquo;</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Fim desenvolvimento da pág-->

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
      <li><a href=# class="generic-anchor footer-list-anchor" itemprop="significantLink">FAQ'S</a>
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
      <li><a href=# class="generic-anchor footer-list-anchor" itemprop="significantLink">PARCERIAS</a></li>
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
  <script src="js/jquery.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/banner.js"></script>
  <!--Fim JS-->
</body>
</html>