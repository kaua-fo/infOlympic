<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="InfOlympic" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <?php if($paginaUrl === "detalhe"): ?>
            <link rel="stylesheet" href="./css/detalhe.css">
    <?php endif ?>
    <?php if($paginaUrl === "login" || $paginaUrl === "cadastrarNoticia" || $paginaUrl === "cadastrarCategoria" || $paginaUrl === "deletarNoticia"): ?>
        <link rel="stylesheet" href="./css/login.css">
    <?php endif ?>
    <?php if($paginaUrl === "contato" || $paginaUrl === "registro"): ?>
        <link rel="stylesheet" href="./css/contato.css">
    <?php endif ?>
<title>InfOlympic</title>
</head>
<header>
        <a href="<?= constant('URL_LOCAL_SITE_PAGINA').'principal'?>""><h6>InfOlympic</h6></a>
        <nav><button class="botao" type="button"><a href="<?= constant('URL_LOCAL_SITE_PAGINA').'login'?>">Login</a></button>
        <button class="botao" type="button"><a href="<?= constant('URL_LOCAL_SITE_PAGINA').'registro'?>">Registro</a></button>
        <button class="botao" type="button"><a href="<?= constant('URL_LOCAL_SITE_PAGINA').'contato'?>">Contato</a></button>
        <button class="botao" type="button"><a href="<?= constant('URL_LOCAL_SITE_PAGINA').'cadastrarNoticia'?>">Cadastrar Notícias</a></button>
        <button class="botao" type="button"><a href="<?= constant('URL_LOCAL_SITE_PAGINA').'cadastrarCategoria'?>">Cadastrar categorias</a></button>
        <button class="botao" type="button"><a href="<?= constant('URL_LOCAL_SITE_PAGINA').'deletarNoticia'?>">Deletar Notícias</a></button>
        <button class="botao" type="button"><a href="<?= constant('URL_LOCAL_SITE_PAGINA').'sair'?>">Sair</a></button></nav>
</header>
<body>