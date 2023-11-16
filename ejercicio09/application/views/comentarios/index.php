<?php $this->load->view('partes/head');   ?>
    <h1>Comentarios</h1>
    <a href="<?= site_url('comentarios/nuevo_comentario'); ?>">Nuevo Comentario</a>
    <br/>
    <?php if (!empty($comentarios)) { ?>
        <?php foreach ($comentarios as $comentario) { ?>
            <div class='comentario'>
                <p><strong><?= $comentario['nombre']; ?></strong> - <?= $comentario['fecha']; ?></p>
                <p><?= $comentario['comentario']; ?></p>
            </div>
        <?php } ?>
    <?php }else { ?>
        <p>No hay comentarios.</p>
    <?php } ?>
<?php $this->load->view('partes/footer');   ?>