<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Descuentos</title>
    <link rel="stylesheet" href="estilos.css">
    <style>
    div.frozen-table {
        min-height: 150px;
        overflow: scroll;
        margin: 0 auto;
        width: 1100px;
        height: 400px;
    }

    table {
        min-width: 100%;
        min-height: 100%;
        border-collapse: collapse;
    }

    th {
        height: 100%;
        border: 0px none transparent;
        padding: 0;
    }

    span {
        display: block;
        padding: 20px;
        border-right: 1px solid #2d5aff;

    }

    thead,
    th {
        background-color: #0489EE;
        color: #000000;
        position: relative;
        z-index: 0;
    }

    td {
        position: relative;
        margin: auto 0;
        z-index: 0;
        text-align: center;
    }

    .espacio {
        background: #fff
    }
    </style>

</head>

<body>
    <ul>
        <li><img src="img/logo.png" alt="logo" id="logo"><a href="#"></a></li>
        <li><a href="index.html" data-title="inicio">Inicio</a></li>
        <li><a href="mision.html" data-title="mision">Mision</a></li>
        <li><a href="promocion.php" data-title="promociones">Promociones</a></li>
        <li><a href="contacto.php" data-title="Contactanos">Contactanos</a></li>
        <li><a href="./tiendas.html" data-title="Tiendas">Tiendas</a></li>
    </ul>
    <br>
    
    <div class="group">
    <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
        <g>
            <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>
        </g>
    </svg>
    <input placeholder="Search" type="search" class="input">
</div>





    <div class="frozen-table" data-table="both">
        <table>
            <thead>
                <tr>
                    <th><span>Vista Previa</span></th>
                    <th><span>Descripcion</span></th>
                    <th><span>Precio</span></th>
                    <th><span>Disponibles</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Contenido 1</td>
                    <td>Contenido 2</td>
                    <td>Contenido 3</td>
                    <td>Contenido 4</td>
                </tr>
                <tr>
                    <td>Contenido 1</td>
                    <td>Contenido 2</td>
                    <td>Contenido 3</td>
                    <td>Contenido 4</td>
                </tr>
                <tr>
                    <td>Contenido 1</td>
                    <td>Contenido 2</td>
                    <td>Contenido 3</td>
                    <td>Contenido 4</td>
                </tr>
            </tbody>
        </table>

        

        
    </div>
    <button class="btn">
  Listar
</button>

</body>

</html>