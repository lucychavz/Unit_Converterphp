<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Conversión de longitud</title>
</head>

<body>
    <center><b>
            <h1>CONVERSIÓN DE LONGITUD</h1>
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
            <select name="longitud1" class="form-control">
                <option value=km1>Kilómetro</option>
                <option value=m1>Metro</option>
                <option value=cm1>Centímetro</option>
                <option value=mm1>Milímetro</option>
                <option value=ft1>Pie</option>
            </select>
            <span class="input-group-text">a</span>
            <select name="longitud2" class="form-control">
                <option value=km2>Kilómetro</option>
                <option value=m2>Metro</option>
                <option value=cm2>Centímetro</option>
                <option value=mm2>Milímetro</option>
                <option value=ft2>Pie</option>
            </select>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        </div>
        <center><input type="submit" class="btn btn-primary" value="calcular" name="calcular">
            <button class="btn btn-success" onclick="location.href='index.php'">Menú principal</button>
        </center>
        <?php
        if (isset($_REQUEST['calcular']) || isset($longitud1) || isset($longitud2) || isset($n)) {
            $n = $_REQUEST['n'];
            $longitud1 = $_REQUEST['longitud1'];
            $longitud2 = $_REQUEST['longitud2'];
            if ($n > 0) {
                if (($longitud1 == 'km1' && $longitud2 == 'km2') || ($longitud1 == 'm1' && $longitud2 == 'm2') || ($longitud1 == 'cm1' && $longitud2 == 'cm2') || ($longitud1 == 'mm1' && $longitud2 == 'mm2') || ($longitud1 == 'ft1' && $longitud2 == 'ft2')) {
                    $total = "<p><center><h4>Misma unidad a convertir, por favor seleccione unidades diferentes.</h4></center></p>";
                    echo $total;
                } else if ($longitud1 == 'km1' && $longitud2 == 'm2') {
                    $proceso = $n * 1000;
                    $total = "<p><center><h4>{$proceso} metros.</h4></center></p>";
                    echo $total;
                } else if ($longitud1 == 'km1' && $longitud2 == 'cm2') {
                    $proceso = $n * 100000;;
                    $total = "<p><center><h4>{$proceso} centímetros.</h4></center></p>";
                    echo $total;
                } else if ($longitud1 == 'km1' && $longitud2 == 'mm2') {
                    $proceso = $n * 1000000;
                    $total = "<p><center><h4>{$proceso} milímetros.</h4></center></p>";
                    echo $total;
                } else if ($longitud1 == 'km1' && $longitud2 == 'ft2') {
                    $proceso = $n * 3280.8;
                    $total = "<p><center><h4>{$proceso} piés.</h4></center></p>";
                    echo $total;
                } else if ($longitud1 == 'm1' && $longitud2 == 'km2') {
                    $proceso = $n / 1000;
                    $total = "<p><center><h4>{$proceso} kilometros.</h4></center></p>";
                    echo $total;
                } else if ($longitud1 == 'm1' && $longitud2 == 'cm2') {
                    $proceso = $n * 100;
                    $total = "<p><center><h4>{$proceso} centímetros.</h4></center></p>";
                    echo $total;
                } else if ($longitud1 == 'm1' && $longitud2 == 'mm2') {
                    $proceso = $n * 1000;
                    $total = "<p><center><h4>{$proceso} milímetros.</h4></center></p>";
                    echo $total;
                } else if ($longitud1 == 'm1' && $longitud2 == 'ft2') {
                    $proceso = $n * 3.281;
                    $total = "<p><center><h4>{$proceso} piés.</h4></center></p>";
                    echo $total;
                } else if ($longitud1 == 'cm1' && $longitud2 == 'km2') {
                    $proceso = $n / 100000;
                    $total = "<p><center><h4>{$proceso} kilómetros.</h4></center></p>";
                    echo $total;
                } else if ($longitud1 == 'cm1' && $longitud2 == 'm2') {
                    $proceso = $n * 0.01;
                    $total = "<p><center><h4>{$proceso} metros.</h4></center></p>";
                    echo $total;
                } else if ($longitud1 == 'cm1' && $longitud2 == 'mm2') {
                    $proceso = $n * 10;
                    $total = "<p><center><h4>{$proceso} milímetros.</h4></center></p>";
                    echo $total;
                } else if ($longitud1 == 'cm1' && $longitud2 == 'ft2') {
                    $proceso = $n / 30.48;
                    $total = "<p><center><h4>{$proceso} piés.</h4></center></p>";
                    echo $total;
                } else if ($longitud1 == 'mm1' && $longitud2 == 'km2') {
                    $proceso = $n * 0.000001;
                    $total = "<p><center><h4>{$proceso} kilómetros.</h4></center></p>";
                    echo $total;
                } else if ($longitud1 == 'mm1' && $longitud2 == 'm2') {
                    $proceso = $n / 1000;
                    $total = "<p><center><h4>{$proceso} metros.</h4></center></p>";
                    echo $total;
                } else if ($longitud1 == 'mm1' && $longitud2 == 'cm2') {
                    $proceso = $n / 10;
                    $total = "<p><center><h4>{$proceso} centímetros.</h4></center></p>";
                    echo $total;
                } else if ($longitud1 == 'mm1' && $longitud2 == 'ft2') {
                    $proceso = $n * 0.003281;
                    $total = "<p><center><h4>{$proceso} piés.</h4></center></p>";
                    echo $total;
                } else if ($longitud1 == 'ft1' && $longitud2 == 'km2') {
                    $proceso = $n * 0.0003048;
                    $total = "<p><center><h4>{$proceso} kilómetros.</h4></center></p>";
                    echo $total;
                } else if ($longitud1 == 'ft1' && $longitud2 == 'm2') {
                    $proceso = $n *  0.3048;
                    $total = "<p><center><h4>{$proceso} metros.</h4></center></p>";
                    echo $total;
                } else if ($longitud1 == 'ft1' && $longitud2 == 'cm2') {
                    $proceso = $n * 30.48;
                    $total = "<p><center><h4>{$proceso} centímetros.</h4></center></p>";
                    echo $total;
                } else if ($longitud1 == 'ft1' && $longitud2 == 'mm2') {
                    $proceso = $n * 304.800609601;
                    $total = "<p><center><h4>{$proceso} milímetros.</h4></center></p>";
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