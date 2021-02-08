<?php
    $login = $_POST['txtlogin'];
    $senha = $_POST['txtsenha'];
    $perfil = $_POST['perfil'];

    switch($perfil){
        case 1: //Administrador
            if (($login == 'adm') && ($senha == '123')){
                session_start();
                $_SESSION['login-session'] = $login;
                $_SESSION['senha-session'] = $senha;
                $_SESSION['perfil'] = $perfil;
                header("Location: area-restrita-adm/home.php");
            }
            else{
                header("Location: index.php");
            }
        break;
        case 2: //Cliente
            require_once 'global.php';
            
            $cliente = new Cliente();
            $lista = $cliente->listar();

            $achou = false;

            foreach ($lista as $linha){ 
                if (($login == $linha['emailcliente']) && ($senha == $linha['rgcliente'])){
                    $achou = true;
                }
            }

            if($achou){
                session_start();
                $_SESSION['login-session'] = $login;
                $_SESSION['senha-session'] = $senha;
                $_SESSION['perfil'] = $perfil;
                header("Location: area-restrita-cliente/indexC.php");
            }
            else{
                header("Location: index.php");
            }
        break;
    }

?>