<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinhando a senha</title>
</head>
<body>
<?php
print_r($_POST);
print_r($_GET);
print('<br><br>Mostrando a senha<br><br>');
print($_POST['senha']);
print('<br><br>Mostrando a senha<br><br>');
print($_POST['data']);
$data = explode("-", $_POST['data']);
print('<br><br>Data<br><br>');
print_r($data);
?>
</body>
</html>