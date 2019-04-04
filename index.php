<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>KNN</title>
    <link rel="stylesheet" type="text/css" href = "css/estilo2.css">
</head>
<body>
    <div class="header">
        <h2 class="logo"> Menu </h2>
        
            <ul class="menu">
                <a href="index.php">Home</a>
                <a href="pagina/knn.php">Inserir</a>
                <a href="pagina/database.php">Base de Dados</a>
            </ul>
    </div>
        <div class="container">
            <div id="conteudo">
            <h2>KNN (K-Nearest Neighbors)</h2>
            <br><br>
            <h3>O que é o KNN?</h3>
            <p>KNN(K — Nearest Neighbors) é um dos muitos algoritmos ( de aprendizagem supervisionada ) 
            usado no campo de data mining e machine learning, ele é um classificador onde o aprendizado é 
            baseado “no quão similar” é um dado (um vetor) do outro. O treinamento é formado por vetores de 
            n dimensões.<br></p>

            <h3>Como ele funciona?</h3>
            <p>O funcionamento do KNN é bem simples, imagine que você tem dados de:</p>

            <ul id = "texto">
            <li>altura e peso de homens</li>
            <li>altura e peso de mulheres</li>
            <li>uma altura e um peso de uma pessoa, mas, você não sabe se é um homem ou uma mulher.</li>
            </ul>

            <p>Ele irá comparar todos os dados que você possuí sobre essa pessoa com os dados que já 
            estão inseridos na base de dados e encontrar os mais próximos aos seus dados.<br></p>
            <h3>Como ele conseguirá fazer isso?</h3>
            <p>Simples! Ele utilizará de formulás matemáticas para encontrar as menores distâncias entre
            os seus dados e os dados da base de dados. Assim, vão ser classificados os 3 mais próximos e 
            haverá uma contagem, caso tenham mais homens do que mulheres, o dado que você possuí vai ser
            classificado como homem e vise-versa.</p> 


</body>
</html>
    
    