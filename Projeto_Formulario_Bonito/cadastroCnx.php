<?php
    include_once("001_MPconexao.php");
        $priN = $_POST["name"];
        $segN = $_POST["lastname"];
        //$fullName = $priN." ".$segN;    
        $cpf = $_POST["cpf"];
        $email = $_POST["email"];
        $senha = $_POST["password"];

        //$sql = "INSERT INTO tb_login_usuario (nm_cliente, cpf_cliente, email, password_unique) VALUES ('onaldo Silva', 05214875984, 'onaldo.15@gmail.com', 'senha')";
        $sql = "INSERT INTO tb_login_usuario (nm_cliente, cpf_cliente, email, password_unique)";
        $sql .= " VALUES ('$priN', $cpf, '$email', '$senha')";
    
        if ($conn->query($sql)===TRUE) {
?>
        <script>
            alert("Cadastrado Realizado com sucesso");
            window.location = "index.php";
        </script>
<?php 
        }else{
?>
        <script>
            alert("Eror ao fazer cadastro, Verifique o erro e tente novamente");
            window.history.back();
        </script>
<?php
        };
        
?>