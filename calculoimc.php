<?php
require 'inicio.php';
?>

<?php
function verificaFaixa($result) {
				
        $faixas = array(
          'Magreza' => 18.5,
          'Saudável' => 24.9,
          'Sobrepeso' => 29.9, 
          'Obesidade grau I' => 34.9,
          'Obesidade grau II' => 39.9,
          'Obesidade grau III' => 99.9);          
          
          foreach ($faixas as $descricao => $faixa) {
            if ($result <= $faixa) {
              echo "Atenção, seu IMC é " . number_format($result,2,".","") . ", e você está classificado como " . $descricao . ".";
              break;
            }
          }
        }        
?>

<?php
if(isset($_GET["altura"])){        
  $altura = str_replace(',','.', $_GET["altura"]);
  $peso = $_GET["peso"];
  if ($peso <= 0) 
  {
    echo "Erro! Peso inválido!<br>";
  }

  else if ($altura <= 0) 
  {
    echo "Erro! Altura inválida!<br>";
  }
  else
  {
    $result = ($peso / ($altura * $altura));    
    echo verificaFaixa($result);
  }        
}    
?>









