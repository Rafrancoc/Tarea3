<?php $this->load->view('partes/head');   ?>
<h1>Calculadora de Promedios</h1>
<form id="formulario-notas">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="nota1">Nota 1:</label>
    <input type="number" id="nota1" name="nota1" required>

    <label for="nota2">Nota 2:</label>
    <input type="number" id="nota2" name="nota2" required>

    <label for="nota3">Nota 3:</label>
    <input type="number" id="nota3" name="nota3" required>

    <button type="button" onclick="agregarEstudiante()">Agregar Estudiante</button>
</form>

<h2>Estudiantes</h2>
<table id="tabla-estudiantes" class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
            <th>Promedio</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>

<?php $this->load->view('partes/footer');   ?>
