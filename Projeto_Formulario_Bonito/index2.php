<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EragonTech</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
   
    <h2>EragonTech</h2>
    <h3>Olá, Mundo! Seja Bem-vindo ao meu site...</h3>
    <br><br>
    <table class="table table-dark">
        <h3>Esses são os dados do login digitado</h3>
        
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>CPF</th>
            <th>EMAIL</th>
            <th>SENHA</th>
        </tr>
<?php 
    include_once("001_MPconexao.php");
    $usuario = $_POST["usuario"];
    $senha = $_POST["password"];

    $sql = "SELECT * FROM tb_login_usuario WHERE id_cliente = '$usuario' OR cpf_cliente = '$usuario' OR email = '$usuario'";
    $dadosCliente = $conn->query($sql);
    $idCliente;
    $nmCliente;
    $cpfCliente;
    $emailCliente;
    $password_cliente;
    while ($exibir = $dadosCliente->fetch_assoc()) {
        $idCliente = $exibir["id_cliente"];
        $nmCliente = $exibir["nm_cliente"];
        $cpfCliente = $exibir["cpf_cliente"];
        $emailCliente = $exibir["email"];
        $passwordCliente = $exibir["password_unique"];
    };
        if ($senha==$passwordCliente&&$usuario==$idCliente||$usuario==$cpfCliente||$usuario==$emailCliente) {
?>
        <tr>
            <td><?php echo $idCliente; ?></td>
            <td><?php echo $nmCliente; ?></td>
            <td><?php echo $cpfCliente; ?></td>
            <td><?php echo $emailCliente; ?></td>
            <td><?php echo $passwordCliente; ?></td>
        </tr>
<?php  
        }else if($senha==""||$usuario==""){
?>   
            <script>
                alert("Error} !Usuario ou Senha iválido")
                window.history.back()
            </script>
<?php
        };
?>
    </table>
    <button class="btn btn-outline-dark"><a style="text-decoration: none;" href="cadastro_cliente.php">Cadastre-se</a></button>
    <button class="btn btn-outline-dark"><a style="text-decoration: none;" href="login_cliente.php">Entrar</a></button>

</body>
</html>