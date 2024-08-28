<?php
include_once './includes/header.php';
?>


<?php
function calcular_total($cantidad)
{
  $total = $cantidad * 1.19;
  return $total;
}

$cantidad_pagar = calcular_total(1000);

echo $cantidad_pagar . "<br/>";

function pagar($total)
{
  $balance = 5000;

  if ($total > $balance) {
    echo "Hubo un error al pagar ";
  } else {
    echo "Pago Exitoso";
  }
}

pagar($cantidad_pagar)
?>
