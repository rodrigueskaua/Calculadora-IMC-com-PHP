<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="pg.css">
</head>

<body>
    <header>
        <h1>Calculadora IMC</h1>
    </header>
    
    <section>
    <div class="container-fluid col-md-8">
        <form class="rol g-6 " action="index.php" method="post">

            <div class="col-md-12 input1">
                <input placeholder="Peso (kg):" class="form-control" type="text" name="n1" required>
            </div>

            <div class="col-md-12 ">
                <input placeholder="Altura (m):"  class="form-control" type="text" name="n2" required><br>
            </div>
            <div class="col-12 d-flex justify-content-center">
            <input type="submit" class="botao" value="Calcular">

            </div>


        </form>
    </div>

    </section>

    <footer>
        <!-- <p>&copy; Kauã Felipe</p> -->
    </footer>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<?php
if (!empty($_POST['n1'])) {


    /*
    1 – Escreva um algoritmo para somar dois números e multiplicar o resultado pelo primeiro número.
    */


    $n = floatval($_POST['n1']);
    $n2 = floatval($_POST['n2']);


    function imc($n, $n2)
    {


        $imc = round($n / ($n2 * $n2), 1);

        if ($imc < 18.5) {
            
            $a = "<div class='container-fluid resultado'><h2> Abaixo do peso normal<br> IMC: " . $imc . "</h2></div>";
        } elseif ($imc >= 18.5 and $imc <= 24.9) {
            $a = "<div class='container-fluid resultado'><h2> Peso normal <br> IMC: " . $imc . "</h2></div>";
        } elseif ($imc >= 25.0 and $imc <= 29.9) {
            $a = "<div class='container-fluid resultado'><h2> Excesso de peso <br> IMC: " . $imc . "</h2></div>";
        } elseif ($imc >= 30.0 and $imc <= 34.9) {
            $a = "<div class='container-fluid resultado'><h2> Obesidade classe I <br> IMC: " . $imc . "</h2></div>";
        } elseif ($imc >= 35.0 and $imc <= 39.9) {
            $a = "<div class='container-fluid resultado'><h2> Obesidade classe II <br> IMC: " . $imc . "</h2></div>";
        } else {
            $a = "<div class='container-fluid resultado'><h2> Obesidade classe III <br> IMC: " . $imc . "</h2></div>";
        }

        return $a;
    }

    echo imc($n, $n2);
}
?>