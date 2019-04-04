<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>KNN</title>
    <link rel="stylesheet" type="text/css" href = "../css/estilo2.css">
</head>
<body>
    <div class="header">
        <h2 class="logo"> Menu </h2>
        
            <ul class="menu">
                <a href="../index.php">Home</a>
                <a href="knn.php">Inserir</a>
                <a href="database.php">Base de Dados</a>
            </ul>
    </div>
        <div class="container">
            <div id="conteudo">

    <h2>Insira os Dados</h2>
            <form method = "post" action = "knn.php">
                <label>Altura:</label><br>
                <input text="text" name="altura" placeholder="Digite a altura">
                <br><br>
                <label>Peso:</label><br>
                <input text="text" name="peso" placeholder="Digite o peso">
                <br><br>
                <input type = "submit" value = "Inserir">
            </form>

    <?php

            $medidas = array(
                array("altura" => 1.60, "peso" => 60, "genero" => "F"),
                array("altura" => 1.70, "peso" => 100, "genero" => "M"),
                array("altura" => 1.80, "peso" => 90, "genero" => "M"),
                array("altura" => 1.65, "peso" => 60, "genero" => "M"),
                array("altura" => 1.90, "peso" => 90, "genero" => "F"),
                array("altura" => 1.55, "peso" => 55, "genero" => "F")
            );
            @$altura = $_POST['altura'];
            @$peso = $_POST['peso'];

            $dado = array(
                array("altura" => $altura, "peso" => $peso)
            );

            $lista = array(

            );

            $genero = array(

            );
            
            if($altura > 0){
                foreach($medidas as $medida){
                    if($medida["altura"] > 0){
                    $distancia = sqrt (
                        ((($dado[0]['altura'] *100) - ($medida['altura'] *100)) 
                        * 
                        (($dado[0]['altura'] *100) - ($medida['altura']*100)))
                        +
                        (($dado[0]['peso'] - $medida['peso'])
                        *
                        ($dado[0]['peso'] - $medida['peso'])));
                        array_push($lista, $distancia);
                        array_push($genero, $medida['genero']);
                    }
                }
            }

            $m = 0;
            $f = 0;
            if($altura > 0){
                array_multisort($lista, $genero);
                foreach($lista as $listas => $valor){
                    if($listas < 3){
                    if($genero[$listas] == 'M'){ 
                        $m++;
                    }else{
                        $f++;
                    }
                    }
                }
            }
            if($altura > 0){
                foreach($dado as $dados){
                    if($m > $f){
                        echo "{$dados['altura']} - {$dados['peso']} - ";
                        echo "Genêro: M";
                    } else{
                        echo "{$dados['altura']} - {$dados['peso']} - ";
                        echo "Genêro: F";
                    }  
                }
            }
            $dado = array();
            $lista = array();
            $genero = array();
            $m = 0;
            $h = 0;

            ?>
</body>
</html>
