<?php
    require __DIR__.'/libs/JDK_config.php';
    require __DIR__.'/libs/db_base.php';
    $erro = "";
    

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {         
        $email = $_POST["inputEmail"];
        $senha = md5($_POST["inputSenha"]);
        try {
            $db = conectar();

            $sql = "select
                        id_cliente,
                        nome,
                        sobrenome,
                        email
                    from
                        trainning_ecom_oficial.cliente
                    where
                        email = '$email'
                        and senha = '$senha'
                        and ativo = 1";
            
            $clientes = read($db, $sql);
            if(!empty($clientes)){                
                session_start();
                $_SESSION["idCliente"] = $clientes[0]["id_cliente"];
                $_SESSION["nomeCliente"] = $clientes[0]["nome"];
                header("Location: index.php");
                exit;
            } else {
                $erro = "Email e/ou senha inválido(s)";
            }
        } catch (\Throwable $th) {
            //throw $th;
        }        

    }
?>

<!doctype html>
<html lang="pt-br">
<head>
    <?php require __DIR__."/html/link_head.html" ?>
    <!-- <link href="css/login.css" rel="stylesheet"> -->
</head>


<body>    
    <?php include __DIR__."/html/topo_Jumbo.html" ?>

    <div class="text-center">
        <form method="post" action="<?php $_SERVER["PHP_SELF"]?>" class="form-signin">
            <!-- <img class="mb-4" src="imagens/logo.png" alt="" width="200"> -->
            <h1 class="h3 font-weight-normal">Autenticação</h1>
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email" required autofocus value="">
            <label for="inputSenha" class="sr-only">Senha</label>
            <input type="password" id="inputSenha" name="inputSenha" class="form-control" placeholder="Senha" required>
            <span class="erro"><?php echo $erro; ?></span>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="lembreme"> Lembre-me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>        
            <div class="links">
                <a href="clientes">Não tenho cadastro</a>
            </div>
            <p class="text-muted">&copy; 2020</p>
        </form>
    </div>




</body>
</html>