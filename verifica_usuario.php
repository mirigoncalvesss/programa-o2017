<?php

	session_start();

	function login(){

	    $existe_usuario = false;

        //le os usuarios do arquivo e converte em um array.
        $lista_usuarios = file_get_contents("usuarios.json");
        $lista_convertida = json_decode($lista_usuarios,true);

        $login = $_POST['login'];
        $senha = $_POST['senha'];

        foreach ($lista_convertida as $usuario){

            if ($login == $usuario['login'] && $senha == $usuario['senha']) {

                $existe_usuario = true;

                $_SESSION['nome'] = $usuario['nome'];
                $_SESSION['esta_logado'] = true;

                header("Location: index2.php");
            }
        }

        if ($existe_usuario == false){
            header("Location: login.php");

        }

    }
    function logout(){

	    session_destroy();
        //sair
        //redirecionar
        header("Location: login.php");

    }

    //ROTAS
    if ($_GET['acao'] == 'login'){
        login();
    }
    if ($_GET['acao'] == 'sair'){
        logout();
    }