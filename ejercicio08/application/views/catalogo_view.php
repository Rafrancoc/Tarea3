<?php $this->load->view('partes/head');   ?>
     <!--cpntenedor principal-->
        <div class="container_12" id="contenedor">
            <!--contenedor de los artículos-->
            <ul class="grid_7" id="subcontenedor">
                <?php
                $agregado = $this->session->flashdata('agregado');
                $destruido = $this->session->flashdata('destruido');
                $productoEliminado = $this->session->flashdata('productoEliminado');
                if ($agregado) {
                    ?>
                    <li class="grid_6" id="productoAgregado"><?= $agregado ?></li>
                    <?php
                }elseif($destruido)
                {
                    ?>
                    <li class="grid_6" id="productoAgregado"><?= $destruido ?></li>
                    <?php
                }elseif($productoEliminado)
                {
                    ?>
                    <li class="grid_6" id="productoAgregado"><?= $productoEliminado ?></li>
                    <?php
                }
                ?>
                <?php
                foreach ($productos as $producto) {
                    ?>
                    <li id="individual">
                        <?php
                        if ($producto->opciones) {
                            $producto->opciones = explode(',', $producto->opciones);
                        }
                        ?>

                        <?= form_open(base_url('catalogo/agregarProducto')) ?>
                        <div id="nombre">
                            <?= ucfirst($producto->nombre) ?>
                        </div>
                        <div id="imagen">
                            <img src="<?= base_url('asset/imagenes/'.$producto->imagen) ?>" width="120" height="110" />
                        </div>
                        <div id="precio">
                            <?= $producto->precio ?>
                        </div>
                        <div id="opciones">
                            <?php
                            if ($producto->opcion) {
                                echo form_label(ucfirst($producto->opcion), 'opcion_' . $producto->id);
                                echo form_dropdown(
                                        $producto->opcion, $producto->opciones, NULL, 'id="opcion_' . $producto->id . '"'
                                );
                            }
                            ?>
                        </div>
                        <?= form_hidden('uri', $this->uri->segment(3)) ?>
                        <?= form_hidden('id', $producto->id) ?>
                        <?= form_submit('action', 'Agregar al carrito') ?>
                        <?= form_close() ?>
                        <?php
                    }
                    ?>
                </li>
            </ul>
            <?php
            if ($carrito = $this->cart->contents()) {
                ?>
                <div class="grid_5" id="contenidoCarrito">
                    <table>
                       <legend>Carrito de la compra</legend>
                        <tr>
                            <th>Nombre</th>
                            <th>Opción</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Eliminar</th>
                        </tr>
                    <?php
                    foreach ($carrito as $item) {
                        ?>
                        <tr>
                            <td><?= ucfirst($item['name']) ?></td>
                            <td>
                                <?php
                                $nombres = array('nombre' => ucfirst($item['name']));
                                $precio = array();
                                $precio = $item['price'];
                                if ($this->cart->has_options($item['rowid'])) {
                                    foreach ($this->cart->product_options($item['rowid']) as $opcion => $value) {
                                        echo $opcion . ": <em>" . $value . "</em>";
                                    }
                                }
                                ?>
                            </td>
                            <td><?= $item['price'] ?></td>
                            <td><?= $item['qty'] ?></td>
                            <td id="eliminar"><?= anchor('catalogo/eliminarProducto/' . $item['rowid'], 'Eliminar') ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    <tr id="total">
                        <td><strong>Total:</strong></td>
                        <td colspan="1"><?= $this->cart->total() ?> dolares.</td>
                        <td colspan="4" id="eliminarCarrito"><?= anchor('catalogo/eliminarCarrito', 'Vaciar carrito')?></td>
                    </tr>
                </table>
                </div>
            <?php
            }
            ?>
            <div class="grid_7">
              <!-- <?= $this->pagination->create_links() ?> -->
            </div>
        </div>
        <?php $this->load->view('partes/footer');   ?>