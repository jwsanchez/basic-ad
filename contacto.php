<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>
    <link rel="stylesheet" href="estilos.css">
    
</head>

<body>
    <ul>
        <li><img src="img/logo.png" alt="logo" id="logo"><a href="#"></a></li>
        <li><a href="index.html" data-title="inicio">Inicio</a></li>
        <li><a href="mision.html" data-title="mision">Mision</a></li>
        <li><a href="promocion.php" data-title="promociones">Promociones</a></li>
        <li><a href="contacto.php" data-title="Contactanos">Contactanos</a></li>
        <li><a href="https://www.adidas.co/" data-title="Tiendas">Tiendas</a></li>
    </ul>
    <div class="container">
        <form action="" method="POST" id="form">
            <h1>Contactanos</h1>
            <div class="inp">
                <div class="nombre">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre"  class="estandar">
                </div>
                <div class="estandar">
                    <input class="inprd" type="radio" id="reclamo" name="opt" value="reclamo">
                    <label for="queja">Reclamo</label><br>
                    <input type="radio" id="peticion" name="opt" value="peticion">
                    <label for="css">Peticion</label><br>
                </div>
                <div class="email">
                    <input type="email" name="email" id="email" placeholder="E-mail"  class="estandar">
                </div>
                <div class="celular">
                    <input type="number" name="celular" id="celular" placeholder="3225221875"  class="estandar">
                </div>
                <div class="mensaje">
                    <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Escriba sus comentarios..."
                         class="estandar"></textarea>
                </div>
                <div class="submit">
                    <button type="submit">Enviar</button>
                    <p name="parrafo" id="war" class="war"></p>
                </div>  
            </div>
        </form>
    </div>
    <script src="validacion.js"></script>
</body>

</html>
