<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA_Compaible" content="IE=Edge"> 
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>
            Resultado de processamento
        </h1>
    </header>
    <main>
       <?php 
           $nome= $_GET["Nome"] ?? "Sem nome";
           $sobrenome= $_GET["Sobrenome"] ?? "Desconhecido";
           echo "<p>É um prazer te conhecer <strong>$nome $sobrenome</strong>.</p>";
       ?> 
       <p><a href="javascript:history.go(-1)">Voltar a página anterior</a></p>
    </main>
    
</body>
</html>