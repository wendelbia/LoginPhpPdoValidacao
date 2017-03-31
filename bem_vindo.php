<?php session_start();?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
    </head>
    <body>
        
        <div class="container">
        <?php if(isset($_SESSION['usuario'])){ ?>
            
        <h5>Bem vindo! <?php echo strtoupper($_SESSION['usuario']); ?>
            Área do conteudo do site.
        </h5>
        <form class="col s12" action="validacao/valid_logout.php" method="get">
            <button class="waves-effect waves-light btn" type="submit" name="sair">Sair</button>
        </form>
        <?php } else { ?>
        <h1>Essa área é apenas para usuários cadastrados!</h1>
        <a href="index.php"><button class="waves-effect waves-light btn">Cadastro de usuário</button></a>
        <a href="login.php"><button class="waves-effect waves-light btn">Login</button></a>
        <?php }?>
        
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <!-- Compiled and minified JavaScript -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
    </body>
</html>
