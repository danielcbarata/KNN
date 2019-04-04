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
            <table>
            <tr>
            <th>Altura</th>
            <th>Peso</th>
            <th>Genero</th>
            </tr>

<?php 

    $medidas = array(
        array("altura" => 1.60, "peso" => 60, "genero" => "F"),
        array("altura" => 1.70, "peso" => 100, "genero" => "M"),
        array("altura" => 1.80, "peso" => 90, "genero" => "M"),
        array("altura" => 1.65, "peso" => 60, "genero" => "M"),
        array("altura" => 1.90, "peso" => 90, "genero" => "F"),
        array("altura" => 1.55, "peso" => 55, "genero" => "F")
    );
    foreach($medidas as $medida){
       if($medida["altura"] > 0){
           echo 
           "<tr>
           <td>{$medida['altura']}</td>
           <td>{$medida['peso']}</td>
           <td>{$medida['genero']}</td>
           
           </tr>";
       }
    }

    ?>
    </body>
    </html>