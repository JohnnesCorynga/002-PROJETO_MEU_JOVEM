<?php include_once("001_MPconexao.php") ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .img-login{
            text-align: center;
        }
        img{
            border-radius: 50%;
            box-shadow: 0px 0px 10px #ccc;
        }
        
    </style>
</head>
<body>
    
        <div id="main-container">
            <h3>Cadastro de cliente</h3> 
            <div class="img-login">
                <img src="img/img_usuario.png" alt="">
            </div>
            <form action="003_adicionarCnx.php" id="register-form" method="POST">


                 <div class="half-box spacing">
                    <label for="name">Nome:</label>
                    <input type="text" name="name" id="name" placeholder="Digite seu nome" data-required data-min-length="3" data-max-length="16">
                </div>

                <div class="half-box">
                    <label for="lastname">Sobrenome</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Digite seu sobrenome" data-required data-only-letters>
                </div>
                
                <div class="full-box first">
                    <label for="cpf">CPF</label>
                    <input type="number" name="cpf" id="cpf" placeholder="000.000.000-00" maxlength="11" data-min-length="11" data-max-length="11" >
                    <!--Coloquei data-min-length para dizer que o mínimo de caracteres é 11-->
                </div>

                <div class="full-box first">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" placeholder="Digite seu em@ail.com" data-min-length="2"  data-email-validate>
                    <!--Coloquei data-min-length para dizer que o mínimo de caracteres é 3-->
                </div>
 
                <div class="half-box spacing">
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" placeholder="***********" data-password-validate data-required >
                </div>

                <div class="half-box">
                    <label for="passconfirmation">Confirmar senha</label>
                    <input type="password" name="passconfirmation" id="passconfirmation" placeholder="**********" data-equal="password">
                </div>

                <div class="full-box">
                    <input type="submit" id="btn-submit" value="Salvar">
                    <input type="reset" id="btn-submit" value="Cancelar">
                </div>

               
            </form>
    </div>
    <p class="error-validation template"></p>
    <script src="js555555555555555555555555555555555555555555/function.js"></script>
</body>
</html>