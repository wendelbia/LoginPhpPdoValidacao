<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
    </head>
    <body>
        <div class="container">
            <h3>Login</h3>
            <div class="row">
                <form class="col s12" method="post" action="validacao/valid_login.php">
                    <div class="row">
                        <div class="input-field col s8">
                            <input id="input_text" type="text" name="usuario">
                            <label for="input_text">Usuário</label>
                        </div>
                        <div class="input-field col s8">
                            <input id="input_text" type="password" name="senha">
                            <label for="input_text">Senha</label>
                        </div>
                        <div class="input-field col s8">
                            <button class="waves-effect waves-light btn" input type="submit" name="login">Login</button>
                        </div>
                    </div>
                </form>      
                <div class="input-field col s10">
                    <a href="index.php"><button class="waves-effect waves-light btn">Cadastro de Usuário</button></a>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
    </body>
</html>
