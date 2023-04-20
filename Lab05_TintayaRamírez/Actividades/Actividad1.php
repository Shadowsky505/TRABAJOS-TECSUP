<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad1</title>
    <style>
        label {
            display: inline-block;
            width: 200px;
        }
        input[type="text"] {
        padding: 5px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-bottom: 10px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        margin-bottom: 20px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        text-align: left;
        padding: 8px;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }
</style>
</head>
<body>
    <form method="post" action="">
        <label for="cantidadVendidad">Ingresar cantidad vendidad:</label>
        <input type="text" name="cantidadVendidad" id="cantidadVendidad"><br>
        <label for="nHijos">Ingresar cantidad de hijos:</label>
        <input type="text" name="nHijos" id="nHijos"><br>
        <input type="submit" name="Calcular" value="Calcular">
        <table>
        <tr>
            <th colspan="2">Detalle de Sueldo</th>
        </tr>
        <?php 
        if(isset($_POST["Calcular"])) {
            $cVendida=$_POST["cantidadVendidad"];
            $nHijos=$_POST["nHijos"];
            $sBruto=600;
            $bonoHijos=$nHijos*50;
            $comision=$cVendida*0.075;
            $descuento=$sBruto*0.11;
            $SueldoNoImp=$sBruto+$bonoHijos+$comision;
            $SueldoImp=$SueldoNoImp-$descuento;

            echo "<tr><td>Sueldo Bruto:</td><td>S/.".$sBruto."</td></tr>";
            echo "<tr><td>Bono por hijos:</td><td>S/.".$bonoHijos."</td></tr>";
            echo "<tr><td>Comision:</td><td>S/.".$comision."</td></tr>";
            echo "<tr><td>Descuento:</td><td>S/.".$descuento."</td></tr>";
            echo "<tr><td>Sueldo Neto:</td><td>S/.".$SueldoImp."</td></tr>";
        }
        ?>
    </table>
</form> 
</body>
</html>