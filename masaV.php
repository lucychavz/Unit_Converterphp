<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Conversión de masa</title>

</head>

<body>
    <center><b>
            <h1>CONVERSIÓN DE MASA</h1>
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
            <select name="masa1" class="form-control">
                <option value=kg1>Kilogramo</option>
                <option value=l1>Libra</option>
                <option value=oz1>Onza</option>
                <option value=g1>Gramo</option>
                <option value=mg1>Miligramo</option>
            </select>
            <span class="input-group-text">a</span>
            <select name="masa2" class="form-control">
                <option value=kg2>Kilogramo</option>
                <option value=l2>Libra</option>
                <option value=oz2>Onza</option>
                <option value=g2>Gramo</option>
                <option value=mg2>Miligramo</option>
            </select>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        </div>
        <center><input type="submit" class="btn btn-primary" value="calcular" name="calcular">
            <button class="btn btn-success" onclick="location.href='index.php'">Menú principal</button>
        </center>
        <?php
        if (isset($_REQUEST['calcular']) || isset($masa1) || isset($masa2) || isset($n)) {
            $n = $_REQUEST['n'];
            $masa1 = $_REQUEST['masa1'];
            $masa2 = $_REQUEST['masa2'];
            if ($n > 0) {
                if (($masa1 == 'kg1' && $masa2 == 'kg2') || ($masa1 == 'l1' && $masa2 == 'l2') || ($masa1 == 'oz1' && $masa2 == 'oz2') || ($masa1 == 'g1' && $masa2 == 'g2') || ($masa1 == 'mg1' && $masa2 == 'mg2')) {
                    $total = "<p><center><h4>Misma unidad a convertir, por favor seleccione unidades diferentes.</h4></center></p>";
                    echo $total;
                } else if ($masa1 == 'kg1' && $masa2 == 'l2') {
                    $proceso = $n * 2.2;
                    $total = "<p><center><h4>{$proceso} libras.</h4></center></p>";
                    echo $total;
                } else if ($masa1 == 'kg1' && $masa2 == 'oz2') {
                    $proceso = $n * 35.2739619;
                    $total = "<p><center><h4>{$proceso} onzas.</h4></center></p>";
                    echo $total;
                } else if ($masa1 == 'kg1' && $masa2 == 'g2') {
                    $proceso = $n * 1000;
                    $total = "<p><center><h4>{$proceso} gramos.</h4></center></p>";
                    echo $total;
                } else if ($masa1 == 'kg1' && $masa2 == 'mg2') {
                    $proceso = $n * 1000000;
                    $total = "<p><center><h4>{$proceso} miligramos.</h4></center></p>";
                    echo $total;
                } else if ($masa1 == 'l1' && $masa2 == 'kg2') {
                    $proceso = $n / 2.2;
                    $total = "<p><center><h4>{$proceso} kilogramos.</h4></center></p>";
                    echo $total;
                } else if ($masa1 == 'l1' && $masa2 == 'oz2') {
                    $proceso = $n * 16;
                    $total = "<p><center><h4>{$proceso} onzas.</h4></center></p>";
                    echo $total;
                } else if ($masa1 == 'l1' && $masa2 == 'g2') {
                    $proceso = $n * 453.59;
                    $total = "<p><center><h4>{$proceso} gramos.</h4></center></p>";
                    echo $total;
                } else if ($masa1 == 'l1' && $masa2 == 'mg2') {
                    $proceso = $n * 453597.02;
                    $total = "<p><center><h4>{$proceso} miligramos.</h4></center></p>";
                    echo $total;
                } else if ($masa1 == 'oz1' && $masa2 == 'kg2') {
                    $proceso = $n * 0.0283495231;
                    $total = "<p><center><h4>{$proceso} kilogramos.</h4></center></p>";
                    echo $total;
                } else if ($masa1 == 'oz1' && $masa2 == 'l2') {
                    $proceso = $n * 0.0625;
                    $total = "<p><center><h4>{$proceso} libras.</h4></center></p>";
                    echo $total;
                } else if ($masa1 == 'oz1' && $masa2 == 'g2') {
                    $proceso = $n * 28.349523125;
                    $total = "<p><center><h4>{$proceso} gramos.</h4></center></p>";
                    echo $total;
                } else if ($masa1 == 'oz1' && $masa2 == 'mg2') {
                    $proceso = $n * 28349.5;
                    $total = "<p><center><h4>{$proceso} miligramos.</h4></center></p>";
                    echo $total;
                } else if ($masa1 == 'g1' && $masa2 == 'kg2') {
                    $proceso = $n / 1000;
                    $total = "<p><center><h4>{$proceso} kilogramos.</h4></center></p>";
                    echo $total;
                } else if ($masa1 == 'g1' && $masa2 == 'l2') {
                    $proceso = $n * 0.00220462262;
                    $total = "<p><center><h4>{$proceso} libras.</h4></center></p>";
                    echo $total;
                } else if ($masa1 == 'g1' && $masa2 == 'oz2') {
                    $proceso = $n * 0.0352739619;
                    $total = "<p><center><h4>{$proceso} onzas.</h4></center></p>";
                    echo $total;
                } else if ($masa1 == 'g1' && $masa2 == 'mg2') {
                    $proceso = $n * 1000;
                    $total = "<p><center><h4>{$proceso} miligramos.</h4></center></p>";
                    echo $total;
                } else if ($masa1 == 'mg1' && $masa2 == 'kg2') {
                    $proceso = $n / 1000000;
                    $total = "<p><center><h4>{$proceso} kilogramos.</h4></center></p>";
                    echo $total;
                } else if ($masa1 == 'mg1' && $masa2 == 'l2') {
                    $proceso = $n * 0.0000022046;
                    $total = "<p><center><h4>{$proceso} libras.</h4></center></p>";
                    echo $total;
                } else if ($masa1 == 'mg1' && $masa2 == 'oz2') {
                    $proceso = $n * 0.000035274;
                    $total = "<p><center><h4>{$proceso} onzas.</h4></center></p>";
                    echo $total;
                } else if ($masa1 == 'mg1' && $masa2 == 'g2') {
                    $proceso = $n / 1000;
                    $total = "<p><center><h4>{$proceso} gramos.</h4></center></p>";
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