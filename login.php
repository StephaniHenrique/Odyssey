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
    <title>Cadastro | Odyssey</title>
    <link rel="icon" type="imagem/png" href="img/cadastro/logo.png">
     <link rel="stylesheet" href="./css/stylecadastro.css">
       <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
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
    



   <!---------------------------------------------------------------------------------------modal-------------------------------------------------------------------------------->
   <div class="containercadastro" id="containercad">
    <div class="form-container sign-up-container">

     <!----------------------------------------------------------------------------------Form cadastro--------------------------------------------------------------------------->
     <form name='cadastro-cliente' action='cadastrar-cliente.php' method='post'>
       <div>
           <a href="#"><img class="aaaa" src="./img/cadastro/teste.jpg" alt=""></a>
       </div>
       <h1 class="titulo">Cadastre-se</h1>
        <!--FB/GOOGLE/LINKEDIN-->
        <div class="social-container">
           <a href="#" class="social-f"><i class="fab fa-facebook-f"></i></a>
           <a href="#" class="social-g"><i class="fab fa-google-plus-g"></i></a>
           <a href="#" class="social-l"><i class="fab fa-linkedin-in"></i></a>
        </div>

            <!--Nome-->
            <input type="text" name="txtnome" placeholder="*Nome" />
            
             <!--Tabela pra deixar os elementos alinhados um ao lado do outro-->
             <table>
              <tr>
                <!--RG--> <!--Class="dois" especifica o tamanho dos elementos que estão com 2 na mesma linha-->
                <th> <input class="dois" type="text" name='txtcpf' placeholder="*CPF" /> </th> 
                <!--CPF-->
                <th>  <input class="dois" type="text" name='txtrg' placeholder="*RG" /> </th>
              </tr>
             </table>
             
            <!--Email-->
           <input type='email' name='txtemail' placeholder="*E-mail" />
            <br><br><br><br>
       
                                                        <!--BTN cadastrar-->
                                                     <button value='cadastrar'>Cadastrar</button>
   </form>
</div>
 <!------------------------------------------------------------------------------Fim Form cadastro------------------------------------------------------------------->

 <!---------------------------------------------------------------------------------Form Log In---------------------------------------------------------------------->
<div class="form-container sign-in-container">
   <form name='login' action='valida-login.php' method='post'>
       <div>
           <a href="#"><img class="spider" src="./img/cadastro/branco.png" alt=""></a>
       </div>
          <h1 class="titulo">Log In</h1>
          <!--FB/GOOGLE/LINKEDIN-->
           <div class="social-container">
             <a href="#" class="social-f"><i class="fab fa-facebook-f"></i></a>
             <a href="#" class="social-g"><i class="fab fa-google-plus-g"></i></a>
             <a href="#" class="social-l"><i class="fab fa-linkedin-in"></i></a>
           </div>
             <!--radio-button Cliente ou ADM-->
              <br> 
         <!--Inputs de login--> 
         <!--class="log e para especificar caracteristicas dos input de login-->
           <span>Insira o E-mail e Senha cadastrados.</span>
             <!--email-->
             <input class="log" type="text" name="txtlogin"  placeholder="E-mail" />
              <!--senha-->
              <input class="log"  type="password" name="txtsenha" placeholder="Senha" />
                <a href="#">Esqueceu a senha?</a>
                
                <table>
              <tr>
                
                <th>  <input class="ckek" type="radio" name='perfil' value='1' > Adm</th> 
                <th class="mds">............</th>
                <th>  <input class="chek" type="radio" name='perfil' value='2' checked > Cliente</th>
              </tr>
             </table>
             <br>
                
                                                           <!--BTN logar-->					 
                                                        <button value='Acessar'>Log In</button>
    </form>
</div>
 <!--------------------------------------------------------------------------------------Fim Form Login----------------------------------------------------------------->
 
 <!---------------------------------------------------------------------------------Container Imagem e frases----------------------------------------------------------->
<div class="overlay-container">
   <div class="overlay">
       <div class="overlay-panel overlay-left">
           <a href="#"><img class="logoo" src="./img/cadastro/logo.png" alt=""></a>
            <h1>Faça parte desse mundo!</h1>
             <p>Cadastre-se para ficar por dentro das melhores promoções do mundo Gamer!</p>
               <button class="ghost" id="signIn">Log In</button>
       </div>
       
       <div class="overlay-panel overlay-right">
            <a href="#"><img class="logoo" src="./img/cadastro/logo.png" alt=""></a>
             <h1>Bem vindo(a) ao Odyssey!</h1>
              <p>Entre com suas informações ou faça um cadastro.</p>
               <button class="ghost" id="signUp">Cadastre-se</button>
       </div>
   </div>
</div>
</div>


  <!---------------------------------------------------------------------------------Fim Container Imagem e frases----------------------------------------------------------->
  
  <!-----------------------------------------------------------------------------------fim modal----------------------------------------------------------------------------->
  
  <!-------------------------------------------------------------------------------- Variaveis Input------------------------------------------------------------------------->
                                                           <!--
                                                               Nome:             type="text" name="txtnome" id="txtnome"
                                                               CPF:              type="text" name="txtcpf" id="txtcpf
                                                               RG:               type="text" name="txtrg" id="txtrg
                                                               Email:            type="email" name="email" id="email"
                                                              
                                                            -->
                                                               
</body>
</html>

<script>
const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const containercadastro = document.getElementById("containercad");

signUpButton.addEventListener("click", () => {
   containercadastro.classList.add("right-panel-active");
});

signInButton.addEventListener("click", () => {
   containercadastro.classList.remove("right-panel-active");
});

</script>