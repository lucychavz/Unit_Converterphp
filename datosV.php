<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Conversión de datos</title>
</head>

<body>
    <center><b>
            <h1>CONVERSIÓN DE DATOS</h1>
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
            <select name="datos1" class="form-control">
                <option value="tb1">Terabyte</option>
                <option value="gb1">Gigabyte</option>
                <option value="mb1">Megabyte</option>
                <option value="kb1">Kilobyte</option>
            </select>
            <span class="input-group-text">a</span>
            <select name="datos2" class="form-control">
                <option value="tb2">Terabyte</option>
                <option value="gb2">Gigabyte</option>
                <option value="mb2">Megabyte</option>
                <option value="kb2">Kilobyte</option>
            </select>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        </div>
        <center><input type="submit" class="btn btn-primary" value="calcular" name="calcular">
            <button class="btn btn-success" onclick="location.href='index.php'">Menú principal</button>
        </center>
        <?php
        if (isset($_REQUEST['calcular']) || isset($datos1) || isset($datos2) || isset($n)) {
            $n = $_REQUEST['n'];
            $datos1 = $_REQUEST['datos1'];
            $datos2 = $_REQUEST['datos2'];
            if ($n > 0) {
                if (($datos1 == 'tb1' && $datos2 == 'tb2') || ($datos1 == 'gb1' && $datos2 == 'gb2') || ($datos1 == 'mb1' && $datos2 == 'mb2') || ($datos1 == 'kb1' && $datos2 == 'kb2')) {
                    $total = "<p><center><h4>Misma unidad a convertir, por favor seleccione unidades diferentes.</h4></center></p>";
                    echo $total;
                } else if ($datos1 == 'tb1' && $datos2 == 'gb2') {
                    $proceso = $n * 1024;
                    $total = "<p><center><h4>{$proceso} gigabytes.</h4></center></p>";
                    echo $total;
                } else if ($datos1 == 'tb1' && $datos2 == 'mb2') {
                    $proceso = $n * 1048576;
                    $total = "<p><center><h4>{$proceso} megabytes.</h4></center></p>";
                    echo $total;
                } else if ($datos1 == 'tb1' && $datos2 == 'kb2') {
                    $proceso = $n * 1000000000;
                    $total = "<p><center><h4>{$proceso} kilobytes.</h4></center></p>";
                    echo $total;
                } else if ($datos1 == 'gb1' && $datos2 == 'tb2') {
                    $proceso = $n / 1024;
                    $total = "<p><center><h4>{$proceso} terabytes.</h4></center></p>";
                    echo $total;
                } else if ($datos1 == 'gb1' && $datos2 == 'mb2') {
                    $proceso = $n * 1024;
                    $total = "<p><center><h4>{$proceso} megabytes.</h4></center></p>";
                    echo $total;
                } else if ($datos1 == 'gb1' && $datos2 == 'kb2') {
                    $proceso = $n * 1000000;
                    $total = "<p><center><h4>{$proceso} kilobytes.</h4></center></p>";
                    echo $total;
                } else if ($datos1 == 'mb1' && $datos2 == 'tb2') {
                    $proceso = $n / 1000000;
                    $total = "<p><center><h4>{$proceso} terabytes.</h4></center></p>";
                    echo $total;
                } else if ($datos1 == 'mb1' && $datos2 == 'gb2') {
                    $proceso = $n / 1024;
                    $total = "<p><center><h4>{$proceso} gigabytes.</h4></center></p>";
                    echo $total;
                } else if ($datos1 == 'mb1' && $datos2 == 'kb2') {
                    $proceso = $n * 1024;
                    $total = "<p><center><h4>{$proceso} kilobytes.</h4></center></p>";
                    echo $total;
                } else if ($datos1 == 'kb1' && $datos2 == 'tb2') {
                    $proceso = $n / 1073741824;
                    $total = "<p><center><h4>{$proceso} terabytes.</h4></center></p>";
                    echo $total;
                } else if ($datos1 == 'kb1' && $datos2 == 'gb2') {
                    $proceso = $n / 1048576;
                    $total = "<p><center><h4>{$proceso} gigabytes.</h4></center></p>";
                    echo $total;
                } else if ($datos1 == 'kb1' && $datos2 == 'mb2') {
                    $proceso = $n / 1024;
                    $total = "<p><center><h4>{$proceso} megabytes.</h4></center></p>";
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