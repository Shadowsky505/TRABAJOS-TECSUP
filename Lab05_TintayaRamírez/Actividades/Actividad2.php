<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad2</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input[type="text"], input[type="submit"] {
            margin: 10px 0;
            padding: 5px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        label {
            margin-bottom: 10px;
            font-weight: bold;
        }
        div {
            margin: 20px 0;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="cantidadTotal">Cantidad Total de gaseosas:</label>
        <input type="text" name="cantidadTotal" id="cantidadTotal">
        <label for="precioCompetencia">Precio de competencia:</label>
        <input type="text" name="precioCompetencia" id="precioCompetencia">
        <input type="submit" name="Pagar" value="Pagar">
        <?php
            if(isset($_POST["Pagar"])){
                $cantidadTotal=$_POST["cantidadTotal"];
                $precioCompetencia=$_POST["precioCompetencia"];
                $precioGaseosa=$precioCompetencia*0.95;
                $precioTotal=$cantidadTotal*$precioGaseosa;
                $descuento=$precioTotal*0.07;
                $regalo = $cantidadTotal*2;
                $pagar = $precioTotal-$descuento;
                echo "<div>Precio de la gaseosa: S/.".$precioGaseosa."</div>";
                echo "<div>Total a pagar: S/.".$precioTotal."</div>";
                echo "<div>Descuento: S/.".$descuento."</div>";
                echo "<div>Total a pagar: S/.".$pagar."</div>";
                echo "<div>Regalo: ".$regalo." caramelos</div>";
            }
        ?>
    </form>
</body>
</html>