<!doctype html>
<html lang="pt-br">

  <head>
    <title>Produtos</title>
    <!--Meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--Fontes and icons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  </head>

  <body class="dark-edition">
  <?php
            include_once("valida-sentinela-adm.php");
        ?>
    <div class="wrapper ">
      <!-----------------------------------------inicio do sidebar ---------------------------------------------->
      <div class="sidebar" data-color="azure" data-background-color="black" data-image="./assets/img/sidebar-1.jpg">
        <div class="logo">
          <a href="home.php" class="simple-text logo-normal">
            Odyssey
          </a>
        </div>
        <div class="sidebar-wrapper">
          <ul class="nav">
            <li class="nav-item  ">
              <a class="nav-link" href="home.php">
                <i class="material-icons">dashboard</i>
                <p>Home</p>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="produtos.php">
                <i class="material-icons">shopping_cart</i>
                <p>Produtos</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="clientes.php">
                <i class="material-icons">person</i>
                <p>Clientes</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="vendas.php">
                <i class="material-icons">attach_money</i>
                <p>Vendas</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="../logout.php">
                <i class="material-icons">exit_to_app</i>
                <p>Sair</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!--------------------------------------------fim do sidebar ---------------------------------------------->
      <div class="main-panel">
        <!-----------------------------------------inicio do navbar ---------------------------------------------->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
          <div class="container-fluid">
            <div class="navbar-wrapper">
              <a class="navbar-brand" href="produtos.php">Produtos</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
              <span class="sr-only">Toggle navigation</span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
              <ul class="navbar-nav">
                
                <li class="nav-item">
                  <a class="nav-link" href="javascript:void(0)">
                    <i class="material-icons">notifications</i>
                    <p class="d-lg-none d-md-block">
                      Notifications
                    </p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!--------------------------------------------fim do navbar ----------------------------------------------->
        <!-----------------------------------------inicio do conteudo ---------------------------------------------->
        <div class="content">
          <div class="container-fluid">
            <!--------- inicio do formulário de cadastro -->
            <form  name='cadastro-produtos' enctype="multipart/form-data" 
              action='cadastrar-produto.php' method='post'>
              <!-- inicio do formulário de informações-->
              <div class="row">
                  <div class="card">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title">Novo Produto</h4>
                      <p class="card-category">Adicione um novo produto a sua loja</p>
                    </div>
                    <div class="card-body">
                      </br>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="bmd-label-floating">Título do Produto</label>
                              <input type="text"  name="txtdesc" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="bmd-label-floating">Preço</label>
                              <input type="text" name="txtvalor"class="form-control">
                            </div>
                          </div>
                        </div>
                      </br>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">Quantidade de produtos:</label>
                            <input type="text" name="txtqtde" class="form-control">
                          </div>
                        </div>
                      </div>
                      </br>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Sobre</label>
                            <div class="form-group">
                              <label class="bmd-label-floating"> Adicione aqui as informações detalhadas para que seu cliente conheça o produto</label>
                              <input type="textarea" name="txtsobre" class="form-control" rows="5"></input>
                            </div>
                          </div>
                        </div>
                      </div>
                      </br>
                      <!-- formulário de foto---------------------------------------------------------------->
                      <div class="">
                        <div class="photo-align">
                          <div class="photo_submit-container">
                            <div class="photo_submit-container">
                            <input type="file" id="foto" name="foto" accept="image/*">
                                </div>
                            </div>
                          </div>
                        </div>
                        <!-- final do formulário de foto-->
                        <input type="submit" class="btn btn-primary pull-right" name="sub" value="Cadastrar"></input>
                        <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
                <!-- fim do formulário de informações-->
              </form>
            </div>
          </div>
          <!-----------------------------------------inicio do footer ---------------------------------------------->
          <footer class="footer">
            <div class="container-fluid">
              <nav class="float-left">
                <ul>
                  <li>
                    <a href="home.php">
                    Odyssey
                    </a>
                  </li>
                </ul>
              </nav>
              <div class="copyright float-right">
              &copy;
              <script>
                document.write(new Date().getFullYear())
              </script>, Feito com <i class="material-icons">favorite</i> e <i class="material-icons">local_cafe</i> por
              <a href="#" target="_blank">Terena</a>
            </div>
            <!-----------------------------------------fim do footer ---------------------------------------------->
          </div>
        </footer>
      </div>
    </div>
          <!--   Core JS Files   -->
          <script src="./assets/js/core/jquery.min.js"></script>
          <script src="./assets/js/core/popper.min.js"></script>
          <script src="./assets/js/core/bootstrap-material-design.min.js"></script>
          <script src="https://unpkg.com/default-passive-events"></script>
          <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
          <!-- Place this tag in your head or just before your close body tag. -->
          <script async defer src="https://buttons.github.io/buttons.js"></script>
          <!--  Google Maps Plugin    -->
          <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
          <!-- Chartist JS -->
          <script src="./assets/js/plugins/chartist.min.js"></script>
          <!--  Notifications Plugin    -->
          <script src="./assets/js/plugins/bootstrap-notify.js"></script>
          <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
          <script src="./assets/js/material-dashboard.js?v=2.1.0"></script>
          <!-- Material Dashboard DEMO methods, don't include it in your project! -->
          <script src="./assets/demo/demo.js"></script>
          <script>
            $(document).ready(function() {
              $().ready(function() {
                $sidebar = $('.sidebar');

                $sidebar_img_container = $sidebar.find('.sidebar-background');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');

                window_width = $(window).width();

                $('.fixed-plugin a').click(function(event) {
                  // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                  if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                      event.stopPropagation();
                    } else if (window.event) {
                      window.event.cancelBubble = true;
                    }
                  }
                });

                $('.fixed-plugin .active-color span').click(function() {
                  $full_page_background = $('.full-page-background');

                  $(this).siblings().removeClass('active');
                  $(this).addClass('active');

                  var new_color = $(this).data('color');

                  if ($sidebar.length != 0) {
                    $sidebar.attr('data-color', new_color);
                  }

                  if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                  }

                  if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data-color', new_color);
                  }
                });

                $('.fixed-plugin .background-color .badge').click(function() {
                  $(this).siblings().removeClass('active');
                  $(this).addClass('active');

                  var new_color = $(this).data('background-color');

                  if ($sidebar.length != 0) {
                    $sidebar.attr('data-background-color', new_color);
                  }
                });

                $('.fixed-plugin .img-holder').click(function() {
                  $full_page_background = $('.full-page-background');

                  $(this).parent('li').siblings().removeClass('active');
                  $(this).parent('li').addClass('active');


                  var new_image = $(this).find("img").attr('src');

                  if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    $sidebar_img_container.fadeOut('fast', function() {
                      $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                      $sidebar_img_container.fadeIn('fast');
                    });
                  }

                  if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $full_page_background.fadeOut('fast', function() {
                      $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                      $full_page_background.fadeIn('fast');
                    });
                  }

                  if ($('.switch-sidebar-image input:checked').length == 0) {
                    var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                    $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                  }

                  if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                  }
                });

                $('.switch-sidebar-image input').change(function() {
                  $full_page_background = $('.full-page-background');

                  $input = $(this);

                  if ($input.is(':checked')) {
                    if ($sidebar_img_container.length != 0) {
                      $sidebar_img_container.fadeIn('fast');
                      $sidebar.attr('data-image', '#');
                    }

                    if ($full_page_background.length != 0) {
                      $full_page_background.fadeIn('fast');
                      $full_page.attr('data-image', '#');
                    }

                    background_image = true;
                  } else {
                    if ($sidebar_img_container.length != 0) {
                      $sidebar.removeAttr('data-image');
                      $sidebar_img_container.fadeOut('fast');
                    }

                    if ($full_page_background.length != 0) {
                      $full_page.removeAttr('data-image', '#');
                      $full_page_background.fadeOut('fast');
                    }

                    background_image = false;
                  }
                });

                $('.switch-sidebar-mini input').change(function() {
                  $body = $('body');

                  $input = $(this);

                  if (md.misc.sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    md.misc.sidebar_mini_active = false;

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                  } else {

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                    setTimeout(function() {
                      $('body').addClass('sidebar-mini');

                      md.misc.sidebar_mini_active = true;
                    }, 300);
                  }

                  // we simulate the window Resize so the charts will get updated in realtime.
                  var simulateWindowResize = setInterval(function() {
                    window.dispatchEvent(new Event('resize'));
                  }, 180);

                  // we stop the simulation of Window Resize after the animations are completed
                  setTimeout(function() {
                    clearInterval(simulateWindowResize);
                  }, 1000);

                });
              });
            });



            class PhotoSubmission {
            constructor() {
                const inputs = document.querySelectorAll('.js-photo_submit-input');

                for (var i = 0; i < inputs.length; i++) {
                    inputs[i].addEventListener('change', this.uploadImage);
                }
            }

            uploadImage(e) {
                const fileInput = e.target;
                const uploadBtn = fileInput.parentNode;
                const deleteBtn = uploadBtn.childNodes[7];

                const reader = new FileReader();

                reader.onload = function(e) {
                    uploadBtn.setAttribute('style', `background-image: url('${e.target.result}');`);
                    uploadBtn.classList.add('photo_submit--image');
                    fileInput.setAttribute('disabled', 'disabled');
                };

                reader.readAsDataURL(e.target.files[0]);

                deleteBtn.addEventListener('click', () => {
                    uploadBtn.removeAttribute('style');
                    uploadBtn.classList.remove('photo_submit--image');
                    
                    setTimeout(() => {
                        fileInput.removeAttribute('disabled', 'disabled');
                    }, 200);
                });
            }
        };

        new PhotoSubmission;
          </script>
  </body>
</html>