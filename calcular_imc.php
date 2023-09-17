<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>Resultado</h1>
    <?php
    
        function calcularIMC($peso, $altura) {
            return $peso / ($altura * $altura);
    }

   
    
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
               
                $peso = floatval($_POST["peso"]);
                $altura= floatval($_POST["altura"]); 
                
                $imc = calcularIMC($peso, $altura);

                
                $imc_formatado = number_format($imc, 2);
        
            
                echo "<p>Seu IMC é: " . $imc_formatado . "</p>";
            
        
                
            
        }
            
    
    ?>
    </main>
</body>
</html>
