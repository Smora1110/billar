<!DOCTYPE html>
<html>
<head>
    <title>Lista de Pedidos</title>
</head>
<body>
    <h1>Lista de Pedidos</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre Cliente</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Fecha del Pedido</th>
        </tr>
        <?php
        include 'conexion.php';

        // Consulta SQL para obtener todos los pedidos
        $sql = "SELECT * FROM pedido";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nombre_cliente'] . "</td>";
                echo "<td>" . $row['descripcion'] . "</td>";
                echo "<td>" . $row['precio'] . "</td>";
                echo "<td>" . $row['fecha_pedido'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No hay pedidos.</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
