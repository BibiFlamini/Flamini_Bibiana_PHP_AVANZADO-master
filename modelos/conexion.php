<?php
class conexion{
    public static function conectar(){
        try {
            $mbd = new PDO("mysql:host=localhost;dbname=flamini_bibiana","root","");
            return $mbd; 
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }    
    }
}