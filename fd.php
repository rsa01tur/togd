<?php
require_once "Fazer.php";
class Bom implements Fazer {
 
public function executar(){
	if (isset($_POST["nome"])){
    shell_exec('docker run --name teste22 debian -p 500:22');
    }
       if (isset($_POST["nome1"])){
    shell_exec('docker run --name teste33 debian -p 500:22');
}
}}

if (isset($_POST["nome"])){
   $_POST["nome"] = new Bom();
   $_POST["nome"] -> executar();
echo "oii";
}

if (isset($_POST["nome1"])){
   $_POST["nome1"] = new Bom();
   $_POST["nome1"] -> executar();
echo "oii";
}

?>


