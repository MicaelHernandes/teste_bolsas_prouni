<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado!</title>
</head>
<body>
<?php

$salario = $_GET['salario'];
$pessoas = $_GET['pessoasj'];
$salariominimo = $_GET['salariomin'];

$prouni = $salario / $pessoas;

if($prouni <= $salariominimo+($salariominimo/2)){
    echo "Sua renda é compativel com as bolsas integrais do ProUni!";
}elseif($prouni <= $salariominimo*3){
    echo "Sua renda é compativel com as bolsas parciais do ProUni";
}else{
    echo "Sua renda é elevada para os padrões de bolsa do ProUni! tente o FIES";
    echo '<br>Acesse o FIES atraves desse link <a href="http://portalfies.mec.gov.br/"> FIES</a>';
}



?>
<a href="index.php"><br>Testar Novamente!</a>
</body>
</html>
