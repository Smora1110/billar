<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
</head>
<body>
    <h1>Listado de Productos</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
        </tr>
        <?php
        include 'conexion.php';

        $productos = obtenerProductos();

        foreach ($productos as $producto) {
            echo "<tr>";
            echo "<td>" . $producto['id'] . "</td>";
            echo "<td>" . $producto['nombre'] . "</td>";
            echo "<td>" . $producto['descripcion'] . "</td>";
            echo "<td>" . $producto['precio'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
