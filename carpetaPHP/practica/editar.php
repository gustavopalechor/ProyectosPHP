<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>

  <?php 

  include ("conexion.php");

  if(!isset($_POST["bot_actualizar"])){
  $Id=$_GET["Id"];
  $Nom=$_GET["nom"];
  $Ape=$_GET["ape"];
  $Dir=$_GET["dir"];
  }
  else{
  $Id=$_POST["id"];
  $Nom=$_POST["nom"];
  $Ape=$_POST["ape"];
  $Dir=$_POST["dir"];

 $sql="UPDATE DATOS_USUARIOS SET NOMBRE=:miNom, APELLIDO=:miApe, DIRECCION=:miDir WHERE ID=:miId";

  $resultado=$base->prepare($sql);

  $resultado->execute(array(":miId"=>$Id, ":miNom"=>$Nom, ":miApe"=>$Ape, ":miDir"=>$Dir));

  header("Location:index.php");


  }



  ?>
<h1>ACTUALIZAR</h1>

<p>
 
</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <table width="25%" border="0" align="center">
    <tr>
      <td></td>
      <td><label for="id"></label>
      <input type="hidden" name="id" id="id" value="<?php echo $Id ?>"></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><label for="nom"></label>
      <input type="text" name="nom" id="nom" value="<?php echo $Nom ?>"></td>
    </tr>
    <tr>
      <td>Apellido</td>
      <td><label for="ape"></label>
      <input type="text" name="ape" id="ape" value="<?php echo $Ape ?>"></td>
    </tr>
    <tr>
      <td>Dirección</td>
      <td><label for="dir"></label>
      <input type="text" name="dir" id="dir" value="<?php echo $Dir ?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>