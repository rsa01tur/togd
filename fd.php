<?php
require_once "Fazer.php";
class Bom implements Fazer {
 
public function executar(){
	if (isset($_POST["nome"])){
    shell_exec('docker run -p 500:22 -d debian/teste');
    }
       if (isset($_POST["nome1"])){
    shell_exec('docker run -p 501:22 -d debian/teste');
}
}}

if (isset($_POST["nome"])){
   $_POST["nome"] = new Bom();
   $_POST["nome"] -> executar();
echo "executar ssh teste3@ip  senha teste";
}

if (isset($_POST["nome1"])){
   $_POST["nome1"] = new Bom();
   $_POST["nome1"] -> executar();
echo ""executar ssh teste3@ip  senha teste"";
}

?>


