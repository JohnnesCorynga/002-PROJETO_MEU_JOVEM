<?php include_once("001_MPconexao.php");?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
        <div id="main-container">
            <h3>Entrar</h3>
            <form action="index2.php" id="register-form2" method="post">
                <div>
                    <div class="full-box first">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" class="usuario" id="usuario" placeholder="Digite seu Id, Email ou CPF" data-min-length="2">
                        <!--Coloquei data-min-length para dizer que o mínimo de caracteres é 3-->
                    </div>
                    <div class="half-box spacing">
                        <label for="password">Senha</label>
                        <input type="password" name="password" class="password" id="password" placeholder="***********" data-password-validate data-required >
                    </div>
                    
                    <div class="checkbox">
                        <input type="checkbox" onclick="password_show()" name="agreement" id="agreement">
                        <label for="agreement" id="agreement-label" >Mostrar senha</label><br>
                    </div>
                </div>
                <div>
                    <div class="checkbox">
                        <input type="checkbox" name="agreement" id="agreement">
                        <label for="agreement" id="agreement-label">Eu li e aceito os <a href="#">termos de uso</a></label><br>
                    </div>
                    
                    <div class="full-box">
                        <input onclick="entrar()" type="submit" id="btn-submit" value="Entrar">
                    </div>
                    <p>Não possui conta? <a href="cadastro_cliente.php">Cadastre-se</a>.</p>
                </div>
            </form>
    </div>
    <p class="error-validation template"></p>
    <script>
        //função para exibir/ocultar senha
        function password_show(){
            var senha = document.querySelector("#password");
            if (senha.type == "password") {
                senha.type = "text";
            }else{
                senha.type = "password";
            }
        }
    </script>
    <script src="jERRROOOOOOOOOOOs/function.js"></script>
</body>
</html>