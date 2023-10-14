<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compre um Bilhete e Concorra a 1 Milhão</title>
</head>
<body>
    <header>
        <h1>Compre um Bilhete e Concorra a 1 Milhão</h1>
    </header>
    <main>
        <p>Compre um bilhete por apenas R$ 5,00 e tenha a chance de ganhar um prêmio incrível de R$ 1.000.000,00!</p>
        
        <form action="processa_pagamento.php" method="post">
            
            
            
            <label for="valor_compra">Valor (R$):</label>
            <input type="text" id="valor_compra" name="valor_compra" value="5.00" readonly>
            
            <button type="submit">Comprar Bilhete</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2023</p>
    </footer>
</body>
</html>
