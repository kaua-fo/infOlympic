<?php

if($_GET && isset($_GET['pagina'])){
    $paginaUrl = $_GET['pagina'];
}else{
    $paginaUrl = null;
}

$login = ($_SERVER["REQUEST_METHOD"] == "POST"
 && !empty($_POST['login'])) ? $_POST['login'] : null;

$senha = ($_SERVER["REQUEST_METHOD"] == "POST"
 && !empty($_POST['senha'])) ? criptografia($_POST['senha']) : null;

if($paginaUrl === "login"){
   $mensagemErro = false;
   $mensagemAcesso = false;
   $infoUser = verificarLogin($login);
   if($infoUser && validacaoSenha($infoUser['senha'],$senha)){
       registrarAcessoValido($infoUser);
       $mensagemAcesso = true;
   }
   if($login && !$infoUser){
       $mensagemErro = true;
   };
   include_once('./view/login-view');
};