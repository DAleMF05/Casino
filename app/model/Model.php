<?php
require_once "config.php";

class Model{
    
    protected $conexion;

    public function __construct()
    {
         $this->conexion = $this->createConexion();
         $this->deploy();
       
    }
    function createConexion(){
      try {
          $db = new PDO("mysql:host=".MYSQL_HOST.";charset=utf8", MYSQL_USER, MYSQL_PASS);
         
          $this->createOrUseDatabase($db);

      
      } catch(Exception $e){
          die("Error al conectar a la base de datos: " . $e->getMessage());
      }

      return $db;

  }

  /*FUNCION QUE VERIFICA SI EXISTE LA BASE DE DATOS, SI EXISTE HACE USO DE LA MISMA CASO CONTRARIO LA CREA.*/
  private function createOrUseDatabase($db){
    $query = $db->query("SHOW DATABASES LIKE '".MYSQL_DB."'");
    $databaseExists = $query->rowCount() > 0;

    if(!$databaseExists) {
        $db->query("CREATE DATABASE ".MYSQL_DB."");
    }
    
    $db->query("USE ".MYSQL_DB."");
}



  private function deploy() {
    $this->createTables();           
}
// CREATE TABLE IF NOT EXISTS


private function createTables() {
         
         $sql = "CREATE TABLE IF NOT EXISTS `agentes` (
          `id_agente` int(11) NOT NULL,
          `nombre` varchar(250) NOT NULL,
          `saldo` double(10,2) NOT NULL,
          `email` varchar(250) NOT NULL,
          `activado` tinyint(1) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
        
        
        INSERT INTO `agentes` (`id_agente`, `nombre`, `saldo`, `email`, `activado`) VALUES
        (11, 'Lucas', 320.00, 'lucasgaturrososa@hotmail.com', 1),
        (12, 'Ale', 320.00, 'Alejandro@gmail.com', 1),
        (13, 'Manuel', 320000.00, 'manueliriart@gmail.com', 0);
        
        -- --------------------------------------------------------
        

        
        CREATE TABLE IF NOT EXISTS`cliente` (
          `id_cliente` int(11) NOT NULL,
          `nombre_usuario` varchar(100) NOT NULL,
          `saldo` double(10,2) NOT NULL,
          `activado` tinyint(1) NOT NULL,
          `id_agente` int(11) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
        
        -- --------------------------------------------------------
        

        
        CREATE TABLE IF NOT EXISTS`usuario` (
          `id_usuario` int(11) NOT NULL,
          `email` varchar(250) NOT NULL,
          `password` varchar(250) NOT NULL,
          `rol` varchar(20) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
        

        
        INSERT INTO `usuario` (`id_usuario`, `email`, `password`, `rol`) VALUES
        (1, 'lucassosa2019@hotmail.com', '$2y$10$30sN3AyNuJhBMKXh19yDj.5J/9Xi3epHL2xQzZMbYXnEy4GT5skem', 'admin');
        

        ALTER TABLE `agentes`
          ADD PRIMARY KEY (`id_agente`);
        

        ALTER TABLE `cliente`
          ADD PRIMARY KEY (`id_cliente`),
          ADD KEY `fk_cliente_agentes` (`id_agente`);
        

        ALTER TABLE `usuario`
          ADD PRIMARY KEY (`id_usuario`);
        

        ALTER TABLE `agentes`
          MODIFY `id_agente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
        

        ALTER TABLE `cliente`
          MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;
        

        ALTER TABLE `usuario`
          MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
        

        ALTER TABLE `cliente`
          ADD CONSTRAINT `fk_cliente_agentes` FOREIGN KEY (`id_cliente`) REFERENCES `agentes` (`id_agente`);
        COMMIT;
        " ;
        $this->conexion->query($sql);
        }
    

      }