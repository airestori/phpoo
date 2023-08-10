<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de Formulário de retangulo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\styles.css">
</head>
<body>
    <div class="container">
        <h3>Preencha os Dados</h3>
        <form method="post">
            
            <div class="form-group">
                <label for="altura">altura:</label>
                <input type="text" class="form-control" id="altura" name="altura" required>
                
            </div>
            
            <div class="form-group">
                <label for="largura">largura:</label>
                <input type="text" class="form-control" id="largura" name="largura" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <?php
        include 'Retangulo.php';
        if ($_SERVER ["REQUEST_METHOD"]=="POST"){
            $altura = $_POST['altura'];
            $largura = $_POST['largura'];

            $retangulo1 = new Retangulo ($altura, $largura);
            echo "perimetro = ".$retangulo1 ->calcular_perimetro () . "<br>";
            echo "area = ".$retangulo1 ->calcular_area ();
        };     
               ?>
        
    </div>
</body>
</html>