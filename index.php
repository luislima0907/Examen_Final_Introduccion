<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border: 5px solid black;
            margin: 5px;
            background-color: white;
            font-size: 20px;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            background-color: black;
            color: white;
            width: 500px;
            border-radius: 10px;
            padding: 10px;
            display: flex;
            justify-content: center;
        }

        html {
            background-color: gray;
        }

    </style>
    <title>Base de Datos</title>
</head>
<body>
    <?php 
        $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
        $conexion = new PDO("mysql:host=localhost;dbname=_0907_23_20758", "root", "", $pdo_options);

        $select = $conexion->query("SELECT Codigo, Nombre, Precio, Existencia FROM producto");
    ?>
    <?php 
    echo "<h1>Base de Datos de Productos</h1>"
    ?>
    <table border=1 width=500px>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Existencia</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($select->fetchAll() as $producto) { ?>
                <tr>
                    <td> <?php echo $producto["Codigo"] ?> </td>
                    <td> <?php echo $producto["Nombre"] ?> </td>
                    <td> <?php echo $producto["Precio"] ?> </td>
                    <td> <?php echo $producto["Existencia"] ?> </td>
                </td>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>