<?php $this->load->view('partes/head');   ?>
    <h2>Deja un comentario</h2>
    <form action="<?= site_url('comentarios/guardar_comentario'); ?>" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <label for="comentario">Comentario:</label>
        <textarea id="comentario" name="comentario" rows="4" required></textarea>
        <button type="submit">Publicar comentario</button>
    </form>
<?php $this->load->view('partes/footer');   ?>