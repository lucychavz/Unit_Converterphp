<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Conversión de capacidad</title>
</head>

<body>
    <center><b>
            <h1>CONVERSIÓN DE CAPACIDAD</h1>
        </b>

        <h2>Elija la unidad a convertir</h2>
        </b>
    </center>

    <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method="REQUEST">
        <br>
        <br>
        <br>
        <b>
            <div class="input-group mb-3">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <span class="input-group-text">Convertir</span>
                <input type="number" class="form-control" name="n" required="">
                <select name="capacidad1" class="form-control">
                    <option value="kl1">Kilolitro</option>
                    <option value="hl1">Hectolitro</option>
                    <option value="dl1">Decalitro</option>
                    <option value="l1">Litro</option>
                    <option value="dlo1">Decilitro</option>
                </select>
                <span class="input-group-text">a</span>
                <select name="capacidad2" class="form-control">
                    <option value="kl2">Kilolitro</option>
                    <option value="hl2">Hectolitro</option>
                    <option value="dl2">Decalitro</option>
                    <option value="l2">Litro</option>
                    <option value="dlo2">Decilitro</option>
                </select>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            </div>
            <center><input type="submit" class="btn btn-primary" value="calcular" name="calcular">
                <br>
                <br>
                <button class="btn btn-success" onclick="location.href='index.php'">Menú principal</button>
            </center>
            </center>
            <?php
            if (isset($_REQUEST['calcular']) || isset($capacidad1) || isset($capacidad2) || isset($n)) {
                $n = $_REQUEST['n'];
                $capacidad1 = $_REQUEST['capacidad1'];
                $capacidad2 = $_REQUEST['capacidad2'];
                if ($n > 0) {
                    if (($capacidad1 == 'kl1' && $capacidad2 == 'kl2') || ($capacidad1 == 'hl1' && $capacidad2 == 'hl2') || ($capacidad1 == 'dl1' && $capacidad2 == 'dl2') || ($capacidad1 == 'l1' && $capacidad2 == 'l2') || ($capacidad1 == 'dlo1' && $capacidad2 == 'dlo2')) {
                        $total = "<p><center><h4>Misma unidad a convertir, por favor seleccione unidades diferentes.</h4></center></p>";
                        echo $total;
                    } else if ($capacidad1 == 'kl1' && $capacidad2 == 'hl2') {
                        $proceso = $n * 10;
                        $total = "<p><center><h4>{$proceso} hectolitros.</h4></center></p>";
                        echo $total;
                    } else if ($capacidad1 == 'kl1' && $capacidad2 == 'dl2') {
                        $proceso = $n * 100;
                        $total = "<p><center><h4>{$proceso} decalitros.</h4></center></p>";
                        echo $total;
                    } else if ($capacidad1 == 'kl1' && $capacidad2 == 'l2') {
                        $proceso = $n * 1000;
                        $total = "<p><center><h4>{$proceso} litros.</h4></center></p>";
                        echo $total;
                    } else if ($capacidad1 == 'kl1' && $capacidad2 == 'dlo2') {
                        $proceso = $n * 10000;
                        $total = "<p><center><h4>{$proceso} decilitros.</h4></center></p>";
                        echo $total;
                    } else if ($capacidad1 == 'hl1' && $capacidad2 == 'kl2') {
                        $proceso = $n * 0.1;
                        $total = "<p><center><h4>{$proceso} kilolitros.</h4></center></p>";
                        echo $total;
                    } else if ($capacidad1 == 'hl1' && $capacidad2 == 'dl2') {
                        $proceso = $n * 10;
                        $total = "<p><center><h4>{$proceso} decalitros.</h4></center></p>";
                        echo $total;
                    } else if ($capacidad1 == 'hl1' && $capacidad2 == 'l2') {
                        $proceso = $n * 100;
                        $total = "<p><center><h4>{$proceso} litros.</h4></center></p>";
                        echo $total;
                    } else if ($capacidad1 == 'hl1' && $capacidad2 == 'dlo2') {
                        $proceso = $n * 1000;
                        $total = "<p><center><h4>{$proceso} decilitros.</h4></center></p>";
                        echo $total;
                    } else if ($capacidad1 == 'dl1' && $capacidad2 == 'kl2') {
                        $proceso = $n / 100;
                        $total = "<p><center><h4>{$proceso} kilolitros.</h4></center></p>";
                        echo $total;
                    } else if ($capacidad1 == 'dl1' && $capacidad2 == 'hl2') {
                        $proceso = $n / 10;
                        $total = "<p><center><h4>{$proceso} hectolitros.</h4></center></p>";
                        echo $total;
                    } else if ($capacidad1 == 'dl1' && $capacidad2 == 'l2') {
                        $proceso = $n * 10;
                        $total = "<p><center><h4>{$proceso} litros.</h4></center></p>";
                        echo $total;
                    } else if ($capacidad1 == 'dl1' && $capacidad2 == 'dlo2') {
                        $proceso = $n * 100;
                        $total = "<p><center><h4>{$proceso} decilitros.</h4></center></p>";
                        echo $total;
                    } else if ($capacidad1 == 'l1' && $capacidad2 == 'kl2') {
                        $proceso = $n * 0.001;
                        $total = "<p><center><h4>{$proceso} kilolitros.</h4></center></p>";
                        echo $total;
                    } else if ($capacidad1 == 'l1' && $capacidad2 == 'hl2') {
                        $proceso = $n / 100;
                        $total = "<p><center><h4>{$proceso} hectolitros.</h4></center></p>";
                        echo $total;
                    } else if ($capacidad1 == 'l1' && $capacidad2 == 'dl2') {
                        $proceso = $n / 10;
                        $total = "<p><center><h4>{$proceso} decalitros.</h4></center></p>";
                        echo $total;
                    } else if ($capacidad1 == 'l1' && $capacidad2 == 'dlo2') {
                        $proceso = $n * 10;
                        $total = "<p><center><h4>{$proceso} decilitros.</h4></center></p>";
                        echo $total;
                    } else if ($capacidad1 == 'dlo1' && $capacidad2 == 'kl2') {
                        $proceso = $n / 100;
                        $total = "<p><center><h4>{$proceso} kilolitros.</h4></center></p>";
                        echo $total;
                    } else if ($capacidad1 == 'dlo1' && $capacidad2 == 'hl2') {
                        $proceso = $n * 0.001;
                        $total = "<p><center><h4>{$proceso} hectolitros.</h4></center></p>";
                        echo $total;
                    } else if ($capacidad1 == 'dlo1' && $capacidad2 == 'dl2') {
                        $proceso = $n * 0.01;
                        $total = "<p><center><h4>{$proceso} decalitros.</h4></center></p>";
                        echo $total;
                    } else if ($capacidad1 == 'dlo1' && $capacidad2 == 'l2') {
                        $proceso = $n / 10;
                        $total = "<p><center><h4>{$proceso} litros.</h4></center></p>";
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