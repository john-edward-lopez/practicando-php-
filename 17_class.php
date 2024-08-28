<?php
include_once './includes/header.php';
?>

<?php
class Cliente
{
  public function __construct($nombre)
  {
    $this->nombre = $nombre;
  }

  public function mostrar_nombre()
  {
    echo "El nombre es " . $this->nombre;
  }
}


$cliente = new Cliente("juan");
$cliente->mostrar_nombre();
echo " <br />";


$cliente2 = new Cliente("john");
$cliente2->mostrar_nombre();

echo "<pre>";
var_dump($cliente);
var_dump($cliente2);
echo "</pre>";


?>
