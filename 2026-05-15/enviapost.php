<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com POST</title>
</head>
<body>
    <form action="recebepost.php" method="POST">
        <p>
            Digite seu nome: <input type="text" name="nome" size="20" />
        </p>
        <p>Digite sua cidade: <input type="text" name="cidade" size="20" />
        </p>
        <p>
            Anda de: <select name="transporte">
                <option value="carro" selected="selected">Carro</option>
                <option value="moto">Moto</option>
                <option value="Onibus">Onibus</option>
            </select>
        </p>
        <p>
            <input type="submit" value="enviar" />
            <input type="reset"  value="limpar" />
        </p>
    </form>
    
</body>
</html>