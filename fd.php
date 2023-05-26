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
    This version is test.
*/
require_once "Fazer.php";
class Bom implements Fazer {
 
public function executar(){
	if (isset($_POST["nome"])){
    shell_exec('docker run -p 501:22 -d --name td1 debian/oi');
 }   
       elseif (isset($_POST["nome1"])){
      shell_exec('docker run -p 502:22 -d --name td2 debian/oi');

}
     else {
echo "errado";
}
}
}

if (isset($_POST["nome"])){
   $_POST["nome"] = new Bom();
   $_POST["nome"] -> executar();
echo "container1: executar ssh teste3@191.252.185.191 port: 501 senha teste";
}

if (isset($_POST["nome1"])){
   $_POST["nome1"] = new Bom();
   $_POST["nome1"] -> executar();
echo "container2: executar ssh teste3@191.252.185.191 port:502 senha teste";
}


?>


<html>
<head>
<title>Exemplo teste</title>
<body>
   <form method="post">
  container1 stop:      <input type="submit" name="button1" value="butao" class="button" /><br>
  Container2 stop:      <input type="submit" name="button2" value="button2" class="button" /><br>
 
 </form>

</body>
</html>
<?php

if(isset($_POST["button2"])){
shell_exec('docker stop td2');
shell_exec('docker rm td2');
}
if(isset($_POST["button1"])){
shell_exec('docker stop td1');
shell_exec('docker rm td1');
}
?>
