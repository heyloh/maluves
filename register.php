<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <form action="" method="POST">
        <div class="form-group text-center">
            <h1 class="display-4">Cadastro de Usuário</h1>
        </div>

        <div class="row form-group">
            <div class="col">
                <span>Nome</span>
                <input type="text" name="firstname" id="firsname" class="form-control">
            </div>
            <div class="col">
                <span>Sobrenome</span>
                <input type="text" name="lastname" id="lastname" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="username">Nome de Usuário</label>
            <input type="text" name="username" id="username" class="form-control">
        </div>
        <div class="form-group">
            <label for="pwd">Senha</label>
            <input type="password" name="pwd" id="pwd">
        </div>
        <div class="form-group">
            <label for="pwd2">Senha</label>
            <input type="password" name="pwd2" id="pwd2">
        </div>
        <button type="submit" class="btn btn-primary btn-md btn-block">Cadastrar-se</button>
    </form>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>