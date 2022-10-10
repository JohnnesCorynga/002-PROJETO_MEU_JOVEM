<?php
    include_once("001_MPconexao.php");
    
    $idCliente = $_POST["id"];
    $nome = $_POST["name"];    
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $senha = $_POST["password"];

    //echo $fullName.$cpf.$email.$senha;
    $sql = "UPDATE tb_login_usuario SET nm_cliente = '$nome', cpf_cliente='$cpf', email='$email', password_unique ='$senha' WHERE id_cliente = $idCliente";
    //echo $sql;
    
    if($conn->query($sql)===TRUE){
?>
    <script>
        alert("Dados do cliente atualizado com sucesso!");
        window.location = "002_backEnd_admi.php"
    </script>
<?php
    }else{
?>
    <script>
        alert("Error ao atualizar os dados!");
        window.history.back();
    </script>
<?php
    }  
?>
