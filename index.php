<!DOCTYPE html>
<html lang="en">

<head>
    <title>FORMULARIO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/styles.css">
    <script src="js/code.js"></script>
</head>


<body>

    <form action="./processes/calculo.proc.php" method="POST">
        Total de la cuenta <br> 
        <input type="number" name="cuenta" placeholder="total de la cuenta...">
        <br><br>¿Que tal el servicio? <br>
        <select name="servicio">
            <option value="Excelente">30% Excelente</option>
            <option value="Bueno">20% Bueno</option>
            <option value="Normal" selected>10% Normal</option>
            <option value="Mala">5% Mala</option>
        </select>
        <br><br>
        ¿Cuantas personas van a pagar? <br>
        <input type="number" name="personas" placeholder="Quien paga">
        <p><input type="submit" value="Calcular" name="submit"></p>

        
    </form>

<?php 
if(isset($_REQUEST['totalpropi'])) {
echo "<p>total a pagar<p>";
echo "<h3>".$_REQUEST['totalpropi']."por persona<h3>";
}

?>

</body>

</html>