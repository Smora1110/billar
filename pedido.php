<!DOCTYPE html>
<html>
<head>
    <title>Realizar Pedido</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#pedidoForm").submit(function(event) {
                event.preventDefault(); // Evita el envío tradicional del formulario
                
                var form = $(this);
                var url = form.attr('action');
                
                $.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(), // Serializa los datos del formulario
                    success: function(data) {
                        $("#respuesta").html(data); // Muestra la respuesta en el div con id "respuesta"
                    }
                });
            });
        });
    </script>
</head>
<body>
    <h1>Realizar Pedido</h1>
    <form id="pedidoForm" action="procesar_pedido.php" method="post">
        <label for="producto">Seleccione un producto:</label>
        <select name="producto" id="producto">
            <?php
            include 'conexion.php';

            $productos = obtenerProductos();

            foreach ($productos as $producto) {
                echo "<option value='" . $producto['id'] . "'>" . $producto['nombre'] . " - $" . $producto['precio'] . "</option>";
            }
            ?>
        </select>
        <br>
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" id="cantidad" min="1" value="1">
        <br>
        <input type="submit" value="Realizar Pedido">
    </form>
    <div id="respuesta"></div> <!-- Aquí se mostrará la respuesta del servidor -->
</body>
</html>
