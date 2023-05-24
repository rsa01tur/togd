<?php

/*
 This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <https://www.gnu.org/licenses/>5.

*/

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


