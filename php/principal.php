<div class="container">
<?php $listaNoticia = criarLista(); ?>
    <?php include_once('tituloSite.php'); ?>
    <section class="gridContainer">
        <div class="mainContent">
    <?php foreach ($listaNoticia as $topico) : ?>
                <a class="pag-link" href="<?= $topico["href"] ;?>">
                    <div class="categoryCard">
                        <img src="<?= $topico["imagem"] ;?>" alt="mainCardImg" class="mainCardImg" width=320px height=180px>
                        <p class="mainCategoryCardTitle"><?= $topico["titulo"] ;?></p>
                        <p class="mainCategoryCardDescription"><?= reduzirStr($topico["descricao"], 200) ;?></p>
                    </div>
                </a>
    <?php endforeach ?>
        </div>
        <aside class="sidebar">
            <div class="sidebarContent">
                <div class="IMC">
                    <form method="POST" action="#">
                            <p>Índice de massa corporal</p>
                            <br>
                            <label for="itext">Peso(Kg):</label>
                            <br>
                            <br>
                            <input name="peso" placeholder="Digite seu peso..." id="itext" type="text"/>
                            <br>
                            <br>
                            <label for="itext">Altura(M):</label>
                            <br>
                            <br>
                            <input name="altura" placeholder="Digite sua altura..." id="itext" type="text"/>
                            <br>
                            <br>
                            <input type="submit" value="Calcular"/>
                    </form>
                    reposta: <?= $resposta ?><br>
                    estado: <?= $estado ?>
                </div>
            </div>
        </aside>
        </section>
</div>