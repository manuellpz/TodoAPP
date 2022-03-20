<?php
   declare(strict_types=1);

   class Conexion {
      private string $server;
      private string $user;
      private string $password;
      private string $db;

      public function __construct(string $server,string $user,string $password,string $db)
      {
         $this->server = $server;
         $this->user = $user;
         $this->password = $password;
         $this->db = $db;
      }

      public function conectar() {
         $conexion = mysqli_connect($this->server,$this->user,$this->password,$this->db);

         return $conexion;
      }
   }

?>