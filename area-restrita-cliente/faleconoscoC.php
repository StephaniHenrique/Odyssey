<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="css/general.css"><!--CSS das configurações universais-->
    <link rel="stylesheet" type="text/css" href="./css/navbar.css"><!--CSS da navbar + sections-->
    <link rel="stylesheet" type="text/css" href="css/footer.css"><!--CSS do footer-->
    <title>Cadastro | Odyssey</title>
    <link rel="icon" type="imagem/png" href="img/cadastro/logo.png">
     <link rel="stylesheet" href="./css/stylecontato.css">
</head>
<body>
<?php
            include_once("valida-sentinela-cliente.php");
        ?>
     <!--Inicio da navbar-->
  <nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
    <div class="container">

      <!--Logo-->
      <div class="navbar-header page-scroll">
        <a class="navbar-brand page-scroll" ><img src="img/index/logo.png" width="25"> ODYSSEY</a>
      </div>

      <!--Componentes da navbar-->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="">
            <a class="page-scroll" href="indexC.php">Home</a>
          </li>

          <li class="">
            <a class="page-scroll" href="produtosC.php">Produtos</a>
          </li>

          <li class="">
            <a class="page-scroll" href="faleconoscoC.php">Contato</a>
          </li>

          <li class="">
            <a class="page-scroll" href="#">
              <i class="material-icons white">add_shopping_cart</i>
              <span class="item-quantity badge position-absolute rounded-circle d-flex align-items-center justify-content-center">2</span>
            </a>
          </li>

          <li class="">
            <a class="page-scroll" href="../logout.php">Sair</a>
          </li>
        </ul>
      </div>
      <!--Fim componentes navbar-->
    </div>
  </nav>
  <!--Fim navbar-->
    








  
    <!--MODAL-->
    <div class="containercontato">

        <!--tela-->
        <div class="area-contato">

        <!-----------------------------------------------------------------------BOTÕES NINTENDO-------------------------------------------------------------------------------------->
                 <!--btn x do nintendo-->
                 <div class="x" onclick="cor()">
                 </div>

                                <!--btn y do nintendo-->
                                <div class="y" onclick="cor1()">
                                </div>

                                                <!--btn a do nintendo-->
                                                <div class="a" onclick="cor2()">
                                                </div>

                                                                    <!--btn b do nintendo-->
                                                                    <div class="b" onclick="cor3()">
                                                                    </div>

                                                                                <!--btn "casinha" do nintendo HOME-->
                                                                                <div class="btn-home" onclick="home()">
                                                                                </div>
        
                                                                    <!--btn "seta pra cima" do nintendo-->
                                                                    <div class="cima" onclick="seta()">
                                                                    </div>

                                                <!--btn "seta pra baixo" do nintendo-->
                                                <div class="baixo" onclick="seta1()">
                                                </div>

                                <!--btn "seta pra esquerda" do nintendo-->
                                <div class="esquerda" onclick="seta2()">
                                </div>

                <!--btn "seta pra direita" do nintendo-->
                <div class="direitaburra" onclick="seta3()">
                </div>

        <!--------------------------------------------------------------------------IMAGEM--------------------------------------------------------------------------------------------->
           <div class="area-cards" >

             <img src="" alt="" style="width: 100%; height: 100%; border-radius: 15px; display: none;" id="foto" >

               <div class="area-input img" id="imagenzinha">

                 <img src="./img/contato/mario.png" alt="" style="width: 100%;">

             </div>

       <!-----------------------------------------------------------------------FORMULARIO MENSAGEM------------------------------------------------------------------------------------->
             <div class="area-input" id="sumir">
                
                <form id="form">  
                        
                    <h3 class="titulo">Contato</h3>

                      <p class="subtitulo"> Tire duvidas, de sujestões e receba promoções no seu e-mail.</p>

                        <input name="name" type="text" id="nome" class="feedback-input" placeholder="Nome" />

                          <input name="email" type="email" id="email" class="feedback-input" placeholder="E-mail" />

                            <textarea name="text" class="feedback-input" id="mensagem" name="mensagem" placeholder="Mensagem"></textarea>

                              <input type="submit" class="button" value="ENVIAR">

                               <h7 class="clique"> clique nos botões do nintendo</h7>

                        </form>

                    </div>

                </div>

            </div>

        </div>



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

   </body>

</html>

<!---------------------------------------------------------------------------------INPUT CONTATO--------------------------------------------------------------------------------------->
                                                                <!--
                                                                     NOME:         name="name" type="text" id="nome"
                                                                     E-MAIL:       name="email" type="email" id="email"
                                                                     MENSAGEM:     name="text" id="mensagem" name="mensagem"
                                                                 -->

<script>

    function cor() {
        foto.style.display="block";
        sumir.style.display="none";

         foto.src="./img/contato/god.png";
       
    }

    function cor1() {
        foto.style.display="block";
        sumir.style.display="none";

         foto.src="./img/contato/thelast.png";
       
    }

    function cor2() {
        foto.style.display="block";
        sumir.style.display="none";

         foto.src="./img/contato/embreve.png";
      
    }

    function cor3() {
        foto.style.display="block";
        sumir.style.display="none";

         foto.src="./img/contato/fifa.png";
        
    }

    function home(){
        imagenzinha.style.display="block";
        sumir.style.display="block";
        foto.style.display="none";
        form.style.display="block";
    }

    function seta() {
        foto.style.display="block";
        sumir.style.display="none";

         foto.src="./img/contato/insta.png";
        
    }

    function seta1() {
        foto.style.display="block";
        sumir.style.display="none";

         foto.src="./img/contato/promocao.png";
        
    }

    function seta2() {
        foto.style.display="block";
        sumir.style.display="none";

         foto.src="./img/contato/apartir.png";
        
    }

    function seta3() {
        foto.style.display="block";
        sumir.style.display="none";

         foto.src="./img/contato/consoles.png";
        
    }

</script>

</html>