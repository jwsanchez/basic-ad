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
        <li><a href="#" data-title="Tiendas">Tiendas</a></li>
    </ul>
    <div class="container">
        <form action="" autocomplete="off">
            <h1>Contactanos</h1>
            <div class="inp">
                <div class="nombre">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required class="estandar">
                </div>
                <div class="estandar">
                    <input type="radio" id="queja" name="opt" value="reclamo">
                    <label for="queja">Reclamo</label><br>
                    <input type="radio" id="reclamo" name="opt" value="peticion">
                    <label for="css">Peticion</label><br>
                </div>
                <div class="email">
                    <input type="email" name="email" id="email" placeholder="E-mail" required class="estandar">
                </div>
                <div class="celular">
                    <input type="number" name="celular" id="celular" placeholder="3225221875" required class="estandar">
                </div>
                <div class="mensaje">
                    <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Escriba sus comentarios..."
                        required class="estandar"></textarea>
                </div>
                <div class="submit">
                    <button type="Submit">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>