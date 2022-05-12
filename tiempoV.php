<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Conversión de tiempo</title>
</head>

<body>
    <center><b>
            <h1>CONVERSIÓN DE TIEMPO</h1>
        </b>
        <b>
            <h2>Elija la unidad a convertir</h2>
        </b>
    </center>
    <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method="REQUEST">
        <div class="input-group mb-3">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <span class="input-group-text">Convertir</span>
            <input type="number" class="form-control" name="n" required="">
            <select name="tiempo1" class="form-control">
                <option value="d1">Dia</option>
                <option value="h1">Hora</option>
                <option value="m1">Minuto</option>
                <option value="s1">Segundo</option>
            </select>
            <span class="input-group-text">a</span>
            <select name="tiempo2" class="form-control">
                <option value="d2">Dia</option>
                <option value="h2">Hora</option>
                <option value="m2">Minuto</option>
                <option value="s2">Segundo</option>
            </select>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        </div>
        <center><input type="submit" class="btn btn-primary" value="calcular" name="calcular">
            <button class="btn btn-success" onclick="location.href='index.php'">Menú principal</button>
        </center>
        <?php
        if (isset($_REQUEST['calcular']) || isset($tiempo1) || isset($tiempo2) || isset($n)) {
            $n = $_REQUEST['n'];
            $tiempo1 = $_REQUEST['tiempo1'];
            $tiempo2 = $_REQUEST['tiempo2'];
            if ($n > 0) {
                if (($tiempo1 == 'd1' && $tiempo2 == 'd2') || ($tiempo1 == 'h1' && $tiempo2 == 'h2') || ($tiempo1 == 'm1' && $tiempo2 == 'm2') || ($tiempo1 == 's1' && $tiempo2 == 's2')) {
                    $total = "<p><center><h4>Misma unidad a convertir, por favor seleccione unidades diferentes.</h4></center></p>";
                    echo $total;
                } else if ($tiempo1 == 'd1' && $tiempo2 == 'h2') {
                    $proceso = $n * 24;
                    $total = "<p><center><h4>{$proceso} horas.</h4></center></p>";
                    echo $total;
                } else if ($tiempo1 == 'd1' && $tiempo2 == 'm2') {
                    $proceso = $n * 1440;
                    $total = "<p><center><h4>{$proceso} minutos.</h4></center></p>";
                    echo $total;
                } else if ($tiempo1 == 'd1' && $tiempo2 == 's2') {
                    $proceso = $n * 86400;
                    $total = "<p><center><h4>{$proceso} segundos.</h4></center></p>";
                    echo $total;
                } else if ($tiempo1 == 'h1' && $tiempo2 == 'd2') {
                    $proceso = $n / 24;
                    $total = "<p><center><h4>{$proceso} dias.</h4></center></p>";
                    echo $total;
                } else if ($tiempo1 == 'h1' && $tiempo2 == 'm2') {
                    $proceso = $n * 60;
                    $total = "<p><center><h4>{$proceso} minutos.</h4></center></p>";
                    echo $total;
                } else if ($tiempo1 == 'h1' && $tiempo2 == 's2') {
                    $proceso = $n * 3600;
                    $total = "<p><center><h4>{$proceso} segundos.</h4></center></p>";
                    echo $total;
                } else if ($tiempo1 == 'm1' && $tiempo2 == 'd2') {
                    $proceso = $n * 0.000694444444;
                    $total = "<p><center><h4>{$proceso} dias.</h4></center></p>";
                    echo $total;
                } else if ($tiempo1 == 'm1' && $tiempo2 == 'h2') {
                    $proceso = $n / 60;
                    $total = "<p><center><h4>{$proceso} horas.</h4></center></p>";
                    echo $total;
                } else if ($tiempo1 == 'm1' && $tiempo2 == 's2') {
                    $proceso = $n * 60;
                    $total = "<p><center><h4>{$proceso} segundos.</h4></center></p>";
                    echo $total;
                } else if ($tiempo1 == 's1' && $tiempo2 == 'd2') {
                    $proceso = $n * 0.0000115740;
                    $total = "<p><center><h4>{$proceso} dias.</h4></center></p>";
                    echo $total;
                } else if ($tiempo1 == 's1' && $tiempo2 == 'h2') {
                    $proceso = $n / 3600;
                    $total = "<p><center><h4>{$proceso} horas.</h4></center></p>";
                    echo $total;
                } else if ($tiempo1 == 's1' && $tiempo2 == 'm2') {
                    $proceso = $n / 60;
                    $total = "<p><center><h4>{$proceso} minutos.</h4></center></p>";
                    echo $total;
                }
            } else {
                echo "<p><center><h4>Imposible operar números negativos.</h4></center></p>";
            }
        }
        ?>
    </form>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>-->
</body>

</html>