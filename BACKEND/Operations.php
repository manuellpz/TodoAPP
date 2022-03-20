<?php
   require_once("Conexion.php");

   $conexion = new Conexion('localhost','root','','test');

   $con = $conexion->conectar();


   if(isset($_POST['item'])) {
      $item = $_POST['item'];
      $query = "INSERT INTO todo(item) VALUES('{$item}')";
      mysqli_query($con,$query);
      echo "OK";
   }
   
   if(isset($_GET['consulta'])) {
      $query = "SELECT * FROM todo";
      $result = mysqli_query($con,$query);
      $data = array();

      while($row = mysqli_fetch_array($result)) {
         $data[] = array(
            'id' => $row['id'],
            'item' => $row['item'],
            'status' => $row['status']
         );
      }
      echo json_encode($data);
   }

   if(isset($_GET['delete'])) {
      $idItem = $_GET['delete'];
      $query = "DELETE FROM todo WHERE id='{$idItem}'";
      mysqli_query($con,$query);
      echo "OK";
   }
?>