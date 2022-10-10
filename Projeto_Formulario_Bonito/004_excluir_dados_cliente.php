<?php
    include_once("001_MPconexao.php");

    $idCliente = $_GET["idCliente"];
    $sql = "DELETE FROM tb_login_usuario WHERE id_cliente = $idCliente";

    if($conn->query($sql) === TRUE){
?>
    <script>
        alert("Dados do Cliente excluído com sucesso");
        window.location = "002_backEnd_admi.php"
    </script>
<?php
    }else{
?>
    <script>
        alert("Error ao excluir dados!");
        window.location = "002_backEnd_admi.php";
    </script>
<?php
    }
?>