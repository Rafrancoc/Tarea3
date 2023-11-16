<?php

$palabras = array("tigre", "león", "puma", "pantera", "pinguino", "hipopótamo", "murcielago", "ardilla", "Cebra", "mono");

$palabra_seleccionada = $palabras[array_rand($palabras)];

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.2/css/bootstrap.min.css">
    <title>Juego de adivinar la palabra</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Juego de adivinar la palabra</h1>

        <p class="text-center mt-5">Estoy pensando en una de las siguientes palabras:</p>

        <ul id="lista-palabras" class="list-group list-group-horizontal justify-content-center flex-wrap">
            <?php foreach ($palabras as $palabra): ?>
                <li class="list-group-item"><?php echo $palabra; ?></li>
            <?php endforeach; ?>
        </ul>

        <div class="text-center mt-5">
            <label for="adivinanza">¡Adelante! Intenta adivinar la palabra:</label>
            <input type="text" id="adivinanza">
            <button onclick="comprobar();" class="btn btn-primary ms-3">¡Adivina!</button>

            <p id="mensaje" class="mt-3"></p>
        </div>
    </div>

    <script>
        var palabra_seleccionada = "<?php echo $palabra_seleccionada; ?>";

        function comprobar() {
            var adivinanza = document.getElementById('adivinanza').value;

            if (adivinanza === palabra_seleccionada) {
                document.getElementById('mensaje').textContent = "¡Correcto! La palabra era "+ palabra_seleccionada;
                document.getElementById('mensaje').classList.add('text-success');
            } else {
                document.getElementById('mensaje').textContent = "Lo siento, inténtalo de nuevo.";
                document.getElementById('mensaje').classList.add('text-danger');
            }
        }
    </script>

</body>
</html>