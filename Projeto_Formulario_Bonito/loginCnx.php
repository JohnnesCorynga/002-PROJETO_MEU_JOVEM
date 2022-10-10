<?php 
    include_once("001_MPconexao.php");
    $usuario = $_POST["usuario"];
    $senha = $_POST["password"];

    $sql = "SELECT * FROM tb_login_usuario WHERE id_cliente = '$usuario' OR cpf_cliente = '$usuario' OR email = '$usuario'";//esse comando está verificando na tb_login_usuario se o id ou cpf ou email salvo no BD é == ao digitado no $usuario
    
    
/*  #ERROs para aprendizado
    $sql = "SELECT *FROM tb_login_usuario WHERE cpf_cliente = '$usuario'";

    $sql = "SELECT *FROM tb_login_usuario WHERE email = '$usuario'";
    */


    //execultando o comando $sql
    $dadosCliente = $conn->query($sql);
    $idCliente;
    $nmCliente;
    $cpfCliente;
    $emailCliente;
    $password_cliente;
   
    while ($exibir = $dadosCliente->fetch_assoc()) {//o fetch_assoc pega todos os dados do bd, como se fossem array
        $idCliente = $exibir["id_cliente"];
        $nmCliente = $exibir["nm_cliente"];
        $cpfCliente = $exibir["cpf_cliente"];
        $emailCliente = $exibir["email"];
        $passwordCliente = $exibir["password_unique"];
        
        /*
        //testando se os dados serão importado de acordo com o login
        echo "Esses são os dados do login digitado: <br>"."<br>Olá ".$exibir["nm_cliente"]." seja Bem_vindo <br>".$exibir["id_cliente"]."<br>".$exibir["cpf_cliente"]."<br>".$exibir["email"]."<br>".$exibir["password_unique"];
        */

    };
        if ($senha==$passwordCliente&&$usuario==$idCliente||$usuario==$cpfCliente||$usuario==$emailCliente) {
?>
            <script>window.location = "index2.php";</script>
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