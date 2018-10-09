<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerador de QRCODE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container col-md-6">
        <form action="index.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="input-nome" id="nome">
            </div>
            <div class="form-group">
                <label for="data">Data Nascimento</label>
                <input type="text" class="form-control" name="input-data" id="data">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" name="input-email" id="email">
            </div>
            <button type="submit" class="btn btn-primary">Gerar</button>
        </form>
    </div>
</body>
</html>