<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Listado de Productos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
echo "<h1 class='display-6 text-center'>Listado de productos</h1>";
echo "<table class='table table-dark table-striped'>";
echo "<thead>";
echo "<tr>";
echo "<th>";
echo "Codigo";
echo "</th>";
echo "<th>";
echo "nombre del producto";
echo "</th>";
echo "<th>";
echo "precio";
echo "</th>";
echo "<th>";
echo "Fecha";
echo "</th>";
echo "<th>";
echo "id_categoria";
echo "</th>";
echo "</thead>";
echo "<tbody>";
foreach ($datos as $dato) {
echo "<tr>";
echo "<td>";
echo $dato["id_product"] . "<br/>";
echo "</td>";
echo "<td>";
echo $dato["product_name"] . "<br/>";
echo "</td>";
echo "<td>";
echo $dato["price"] . "<br/>";
echo "</td>";
echo "<td>";
echo $dato["start_date"] . "<br/>";
echo "</td>";
echo "<td>";
echo $dato["id_category"] . "<br/>";
echo "</td>";
echo "</tr>";
}
echo "</tbody>";
echo "</table>";

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>