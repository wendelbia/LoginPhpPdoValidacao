<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Usuário</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
        <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
        <script type="text/javascript">
            $(document).ready(function () {
                $('input#input_text, textarea#textarea1').characterCounter();
            });

            $(document).ready(function () {
                $('.tooltipped').tooltip({delay: 50});
            });

            $(document).ready(function () {
                Materialize.updateTextFields();
            });
        </script>

    </head>
    <body>
        <div class="container">
            <div class="valign-wrapper">
                <h5 class="valign">Cadastro de Usuário</h5>
            </div>
            <div class="row">
                <form class="col s12" method="post" action="validacao/valid_insert.php">
                    <div class="row">
                        <div class="input-field col s8">
                            <input id="input_text" type="text" name="nome" class="validate">
                            <label for="input_text">Nome</label>
                        </div>
                        <div class="input-field col s8">
                            <input id="input_text" type="text" name="usuario">
                            <label for="input_text">Usuário</label>
                        </div>
                        <div class="input-field col s8">
                            <input id="email" type="email" class="validate" name="email">
                            <label for="email" data-error="wrong" data-success="right">Email</label>
                        </div>
                        <div class="input-field col s8">
                            <input id="password" type="password" class="validate" name="senha">
                            <label for="input_text">Senha</label>
                        </div>
                        <div class="input-field col s8">
                            <button class="btn-floating btn-large waves-effect waves-light red" input type="submit" name="cadastrar"><i class="material-icons">add</i></button>
                        </div>
                       <!--<input type="submit" name="cadastrar" value="Cadastrar"/>-->
                    </div>
                </form>
                <div class="input-field col s10">
                    <h6>Já é cadastrado? Então faça o login!</h6><a href="login.php">
                        <button class="waves-effect waves-light btn">Login</button></a>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>

    </body>
</html>