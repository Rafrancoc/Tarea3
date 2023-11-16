<!DOCTYPE html>
<html lang="en">
<head>
    <title>Galeria de imagenes</title>
    <style>
        html, body{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            background: rgba(212, 235, 242, 1);
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            font-family: Arial;
        }
        .container{
            height: 500px;
            width: 500px;
            background: #fff;
            border-radius: 4px;
            box-shadow: 0 10px 28px rgba(0,0,0,0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .btn{
            background-color: #2b58de;
            color: #fff;
            padding: 10px 20px;
            border-radius: 58px;
            cursor: pointer;
            margin-bottom: 1rem;
            border: none;
        }
        .file-status{
            text-align: center;
            margin-bottom: 20px;
            color: rgba(0, 0, 0, 0.5);
        }
    </style>
    <script>
        function init (){
            var inputFile = document.getElementById('file');
            inputFile.addEventListener('change', mostrarImagen, false);
        }
        function mostrarImagen(event){
            var file = event.target.files[0];
            var leer = new FileReader();
            leer.onload = function(event){
                var img = document.getElementById('imgUsu');
                img.src=event.target.result;
            }
            leer.readAsDataURL(file);
        }
        window.addEventListener('load', init, false)
    </script>
</head>
<body>
    <div class="container">
        <form  action="upload.php" method="post" enctype="multipart/form-data">
            <img id="imgUsu" width="350" height="280" src="" alt=""/>
            <input id="file" name="file" type="file"><br><br>
            <button class="btn" type="submit">Guardar</button>
        </form>
    </div>
    
        
</body>
</html>