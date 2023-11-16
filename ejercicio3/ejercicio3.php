<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrusel de imagenes</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body{
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
    display: flex;
    height: 100vh;
    width: 100%;
    align-items: center;
    background: rgb(49,49, 49);
    }

    h4, h2, small, a {
        margin:0;
        padding: 0;
    }

    a {
        text-decoration: none;
    }

    .carousel {
        width: 100%;
        margin: 0px 0px;
    }

    @media(min-width:768) {
        .carousel{
            margin:0px 60px;
        }
    }
    .carousel h2 {
        font-size: 45px;
        line-height: 38px;
        padding-bottom: 50px;
        opacity: .9;
        text-transform: uppercase;
        font-weight: 600;
        text-align: center;
        color: #ffffff;

    }
    .carrusel-list {
        position: relative;
        display: flex;
        align-items: center;
        width: fit-content;
        height: 304px;
        padding: 10px 0px;
        margin: 0px auto;
        max-width: 90vw;
        overflow: hidden;

    }
    .carrusel-track {
        position: relative;
        top:0;
        left: 0;
        display: flex;
        justify-content: center;
        transition: .5s ease-in-out;
    }
    .carrusel {
        position: relative;
        width: 210px;
        padding: 0 18px;
        float: left;
        box-sizing: border-box;
        display: flex;
        height: 100%;
    }
    .carousel h4 {
        position: absolute;
        z-index: 1;
        font-size: 22px;
        line-height: 23px;
        color: #ffffff;
        padding: 15px;
    }
    .carrusel h4 small {
        font-size: 15px;
        display: block;
    }
    .carrusel a img {
        object-fit: cover;
        height: 300px;
        width: 200px;
        border-radius: 15px;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.5);
        transition: 3s ease-in-out;
    }
    @media(min-width:768) {
        .carrusel {
            width: 275px;
        }
        .carrusel a img {
            width:250px;
        }
    }
    .carrusel-arrow {
        border-radius: 30px;
        background-color: #ffffff;
        position: absolute;
        z-index: 4;
        width: 48px;
        height: 48px;
        text-align: center;
        border: 0;
        cursor: pointer;
    }

    .carrusel-arrow:focus {
        outline: 0;
    }

    .carrusel-arrow svg {
        width: 12px;
        height: 100%;
        color: rgba(0, 0, 0, 0.7);
    }
    .carrusel-prev {
        left:0;
    }

    .carrusel-next {
        right: 0px;
    }
    .header {
            background-color: r; 
            color: palevioletred; 
            text-align: center;
            padding: 20px;
    
        }

        .header h1 {
            font-size: 36px;
            margin: 0;
        }

        .header h2 {
            font-size: 20px;
            margin: 0;
        }

        .boton {
            background-color: transparent;
            border: none;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .boton img {
            width: 50px; 
            height: 50px; 
            margin: 0 50px;
        }

        .boton:hover {
            transform: scale(1.1); 
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .modal-content {
            background-color: #f4f4f4;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 60%;
            text-align: center;
            position: relative;
        }

        .close {
            color: #888;
            float: right;
            font-size: 30px;
            cursor: pointer;
        }

        .close:hover {
            color: #000;
        }

        .elemento {
            width: 200px;
            height: 200px;
            margin: 20px;
            text-align: center;
            line-height: 200px;
            font-size: 24px;
        }

        .boton-volver {
            margin-right:auto; 
            background-color: transparent;
            border: none;
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        .contador {
        font-size: 24px;
        color: #ffffff;
        text-align: center;
        margin-bottom: 20px;
    }
</style>
<body>
    <?php
        $txt_Visitas = "visitas.txt";
        if(!file_exists($txt_Visitas))
        {
            touch($txt_Visitas);
        }
        $ContenidoTxt = file_get_contents($txt_Visitas);

        if(empty($ContenidoTxt))
        {
            $visitas = 0;
        }
        else
        {
            $visitas = intval($ContenidoTxt);
        }

        $visitas++;

        file_put_contents($txt_Visitas, $visitas);
        
    ?>
    <div class="contador">
        <p>Número de visitas: <?php echo $visitas; ?></p>
    </div>
    <header class="header">
    <div class="carousel">

        <h2>Carrusel de Imágenes</h2>

        <div class="carrusel-list" id="carrusel-list">

            <button class="carrusel-arrow carrusel-prev" id="button-prev" data-button="button-prev"
                onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                    class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 320 512">
                    <path fill="currentColor"
                        d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                    </path>
                </svg>
            </button>

            <div class="carrusel-track" id="track">

                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Imagen</small> Mas </h4>
                            <picture>
                                <img src="images/11.jpg" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>
                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Imagen</small> Mas </h4>
                            <picture>
                                <img src="images/12.jpg" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>
                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Imagen</small> Mas </h4>
                            <picture>
                                <img src="images/13.jpg" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>
                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Imagen</small> Mas </h4>
                            <picture>
                                <img src="images/14.jpg" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>
                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Imagen</small> Mas </h4>
                            <picture>
                                <img src="images/15.jpg" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>
                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Imagen</small> Mas </h4>
                            <picture>
                                <img src="images/im1.jpg" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>
                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Imagen</small> Mas </h4>
                            <picture>
                                <img src="images/im2.jpg" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>
                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Imagen</small> Mas </h4>
                            <picture>
                                <img src="images/im3.jpg" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>
                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Imagen</small> Mas </h4>
                            <picture>
                                <img src="images/im4.jpg" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>
                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Imagen</small> Mas </h4>
                            <picture>
                                <img src="images/im5.jpg" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>
            </div>

            <button class="carrusel-arrow carrusel-next" id="button-next" data-button="button-next"
                onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                    class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 320 512">
                    <path fill="currentColor"
                        d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                    </path>
                </svg>
            </button>


        </div>

    </div>
    </header>
<script>
    function App() {}
    window.onload = function(event) {
        var app = new App();
        window.app= app;
    }
    App.prototype.processingButton = function(event){ 
        const btn = event.currentTarget;
        const carruselList = event.currentTarget.parentNode;
        const track = event.currentTarget.parentNode.querySelector('#track');
        const carrusel = track.querySelectorAll('.carrusel');

        const carruselWidth = carrusel[0].offsetWidth;

        const trackWidth = track.offsetWidth;

        const listWidth = carruselList.offsetWidth;

        track.style.left == "" ? leftPosition = track.style.left = 0 : leftPosition = parseFloat(track.style.left.slice(0,-2)*-1);
        btn.dataset.button == "button-prev" ? prevAction(leftPosition, carruselWidth,track) : nextAction(leftPosition, trackWidth, listWidth, carruselWidth,track);

    }
    
    let prevAction = (leftPosition, carruselWidth, track) => {
        if (leftPosition > 0) {
            track.style.left = `${-1 * (leftPosition - carruselWidth)}px`;

        }
    }
    let nextAction = (leftPosition, trackWidth, listWidth, carruselWidth, track) => {
        if (leftPosition < (trackWidth - listWidth)) {
            track.style.left = `${-1 * (leftPosition + carruselWidth)}px`;
        }
    }

</script>
</body>

</html>