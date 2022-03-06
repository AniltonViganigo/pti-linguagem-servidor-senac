<?php
require 'inicio.php';
?>

<h1>
    Cálculo de IMC
</h1>

<form method="get" action="calculoimc.php">       
    <p>Informe a sua altura:
        <input type="text" name="altura" id="altura" placeholder="Exemplo: 1.75"> 
    </p>
    <p>Informe o seu peso   :
        <input type="text" name="peso" id="peso" placeholder="Exemplo: 89.65"> 
    </p>    
    <button type="submit">Calcular</button>
</form>

<?php
require 'fim.php';
?>