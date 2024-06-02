<?php

require_once "app/model/Model.php";

class AgenteModel extends Model{

    
function getAll(){
    //abrimos la conexion;
    $db = $this->createConexion();
   
    //Enviar la consulta
    $sentencia = $db->prepare("SELECT * FROM agentes");
    $sentencia->execute();
    $agentes = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $agentes;
}

function insertAgent($nombre, $saldo, $email, $activado){
    //abrimos la conexion;
    $db = $this->createConexion();
    //Enviar la consulta
    $resultado= $db->prepare("INSERT INTO agentes (nombre, saldo, email, activado) VALUES (?,?,?,?)");
    $resultado->execute([$nombre, $saldo, $email, $activado]); // ejecuta
}


function delete($id){
    $db = $this->createConexion();
    $resultado= $db->prepare("DELETE FROM agentes WHERE id_agente = ?");
    $resultado->execute([$id]); // ejecuta
}

function finalize($id){
    $db = $this->createConexion();
    $resultado= $db->prepare("UPDATE agentes SET activado = ? WHERE id_agente = ?");
    $resultado->execute([1,$id]); // ejecuta
}

function getAgent($id){
    //abrimos la conexion;
    $db = $this->createConexion();
   
    //Enviar la consulta
    $sentencia = $db->prepare("SELECT * FROM agentes WHERE id_agente = ?");
    $sentencia->execute([$id]);
    $agente = $sentencia->fetch(PDO::FETCH_OBJ);
    return $agente;
}

}