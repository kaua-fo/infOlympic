<?php include_once('tituloSite.php');

if($_GET && isset($_GET['noticia'])){
    $noticiaId = $_GET['noticia'];
}else{
    $noticiaId = null;
}
$noticia = buscarNoticia($noticiaId);
?>
<div class="divExterna">
<div class="divInterna">
    <img class="imgAtleta" src="<?= constant("URL_LOCAL_SITE").'imagens/'.$noticia["img"] ;?>">
    <h1 class="title"><?= $noticia['titulo'];?></h1>
    <br>
    <p class="info"><?= $noticia['descricao'];?></p>
</div>
<br><h4 class="infoRelacionadas"> Notícias relacionadas: </h4><br>
<?php
$noticiaRelacionada = noticiasRelacionadas($noticia["categoria"],$noticia["id"]);
?>
<div class="noticiasRelacionadas">
    <span class="noticiacard">
    <?php foreach ($noticiaRelacionada as $topico) : ?>
        <a class="pag-link" href="<?= constant('URL_LOCAL_SITE_PAGINA').'detalhe'?>&noticia=<?= $topico["id"] ;?>">
            <div class="interncategoryCard">
                <img src="<?= constant("URL_LOCAL_SITE").'imagens/'.$topico["img"] ;?>" alt="mainCardImg" class="mainCardImg" width=320px height=180px>
                <p class="mainCategoryCardTitle"><?= $topico["titulo"] ;?></p>
                <p class="mainCategoryCardDescription"><?= reduzirStr($topico["descricao"], 200) ;?></p>
            </div>
        </a>
    <?php endforeach ?>
    </span>
</div>
</div>