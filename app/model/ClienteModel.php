<?php

require_once "app/model/Model.php";

class ClienteModel extends Model{

    
function getAll(){
    //abrimos la conexion;
    $db = $this->createConexion();
   
    //Enviar la consulta
    $sentencia = $db->prepare("SELECT * FROM clientes");
    $sentencia->execute();
    $clientes = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $clientes;
}

function getAllCliete_y_Agente(){
    //abrimos la conexion;
    $db = $this->createConexion();
   
    //Enviar la consulta
    $sentencia = $db->prepare("SELECT * FROM clientes c, agentes a WHERE c.id_agente = a.id_agente");
    $sentencia->execute();
    $clientes = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $clientes;
}

function insertClient($nombre, $saldo, $activado, $id){
    //abrimos la conexion;
    $db = $this->createConexion();
   
    //Enviar la consulta
    $resultado= $db->prepare("INSERT INTO clientes (nombre_usuario, saldo_cliente, activado, id_agente) VALUES (?,?,?,?)");
    $resultado->execute([$nombre, $saldo, $activado, $id]); // ejecuta
}


function delete($id){
    $db = $this->createConexion();
    $resultado= $db->prepare("DELETE FROM clientes WHERE id_cliente = ?");
    $resultado->execute([$id]); // ejecuta
}

function editClient($nombre,$saldo,$activado,$id_cliente){
    $db = $this->createConexion();
    $resultado= $db->prepare("UPDATE clientes SET nombre = ?, saldo = ?, activado = ? WHERE clientes.id_cliente = ?");
    $resultado->execute([$nombre,$saldo,$activado,$id_cliente]);

}

function getClients($id){
    //abrimos la conexion;
    $db = $this->createConexion();
   
    //Enviar la consulta
    $sentencia = $db->prepare("SELECT * FROM clientes WHERE id_agente = ?");
    $sentencia->execute([$id]);
    $cliente = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $cliente;
}

}