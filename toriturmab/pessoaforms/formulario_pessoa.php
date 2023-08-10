<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de Formulário de pessoa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\styles.css">
</head>
<body>
    <div class="container">
        <h3>Preencha os Dados</h3>
        <form method="post">
            <div class="form-group">
                <label for="altura">altura:</label>
                <input type="date" class="form-control" id="altura" name="altura" required>
                
            </div>
            
            <div class="form-group">
                <label for="largura">profissão:</label>
                <input type="text" class="form-control" id="largura" name="largura" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <?php
        include 'Pessoa.php';
        if ($_SERVER ["REQUEST_METHOD"]=="POST"){
            $altura = $_POST['altura'];
            $largura = $_POST['largura'];

            $pessoa1 = new Pessoa ( $altura, $largura);
            echo "Pessoa 1 = ".$pessoa1 ->apresentar ();
        }     
               ?>
        
    </div>
</body>
</html>