<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
       h2{
        text-align: center;
       }
    </style>
</head>
<body class="container">
    <h1>EragonTech</h1>
    <h2>Essa é a parte do Administrador do Site</h2>
    

    <h2>Dados Clientes</h2>
    
    <?php
        //incorporandoo arquivo de conexão
        include_once("001_MPconexao.php");
        //Definindo string com o comando sql
        $sql = "SELECT *FROM tb_login_usuario order by id_cliente";
        //execultando o comando sql
        $dadosAdmi = $conn->query($sql);

        //verificando se foi retornado algum registro
        if ($dadosAdmi->num_rows>0) {
            //echo "foi retornado registro";
    ?>
        <table class="table table-dark">
            <tr>
                <th>Id Cliente</th>
                <th>Nome Cliente</th>
                <th>Cpf</th>
                <th>Email</th>
                <th>Senha</th>
            </tr>
    <?php
            while ($exibir = $dadosAdmi->fetch_assoc()) {
    ?>
            <tr>
                <td><?php print $exibir["id_cliente"] ?></td>
                <td><?php print $exibir["nm_cliente"] ?></td>
                <td><?php print $exibir["cpf_cliente"] ?></td>
                <td><?php print $exibir["email"] ?></td>
                <td><?php print $exibir["password_unique"]?></td>
            </tr>
    <?php
      };
    ?>
    </table>
    <?php
        }else{
            echo "Nenhum Registro encontrado!";
        };
    ?>
</body>
</html>