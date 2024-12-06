<?php

if($_GET && isset($_GET['pagina'])){
    $paginaUrl = $_GET['pagina'];
}else{
    $paginaUrl = null;
}

$titulo = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['titulo'])) ? $_POST['titulo'] : null;

$descricao = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['descricao'])) ? $_POST['descricao'] : null;

$imagem = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['fileToUpload'])) ? $_POST['fileToUpload'] : null;

$categoriaId = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['categoria'])) ? $_POST ['categoria'] : null;

if($paginaUrl === "cadastrarNoticia"){
    acesso::protegerTelaAdmin();
    $objNoticia = new Noticia($titulo, $descricao, $imagem, $categoriaId);
    $categorias = listarCategorias();
    include_once('./view/cadastrarNoticia-view.php');
    if($_POST){
        var_dump($titulo, $descricao, $imagem, $categoriaId);
        $nomeDaImagem = noticia::upload($imagem);
        $objNoticia->cadastrarNoticia();
    };
};
