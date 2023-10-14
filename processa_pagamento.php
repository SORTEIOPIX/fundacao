<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibo de Pagamento</title>
</head>
<body>
    <header>
        <h1>Recibo de Pagamento</h1>
    </header>
    <main>
        <?php
        // Recupere as informações do carrinho
        $numero_bilhete = $_POST['numero_bilhete'];
        $total_pagar = $_POST['total_pagar'];

        // Simule uma transação bem-sucedida (substitua por uma solução real)
        $transacao_bem_sucedida = true;

        if ($transacao_bem_sucedida) {
            
            
            echo "00020126360014BR.GOV.BCB.PIX0114+559898309471252040000530398654045.005802BR5906Ronald6008sao luis62070503***63047B85
<BR><BR>NAO ESQUECE COLOCA SEU PIX NA DESCRIÇAO";
            foreach (explode(',', $numero_bilhete) as $bilhete) {
                
            }
            
        } else {
            echo "<p>O pagamento falhou. Por favor, tente novamente.</p>";
        }
        ?>
    </main>
    <footer>
        <p>&copy; 2023</p>
    </footer>
</body>
</html>
