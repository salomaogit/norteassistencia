<?php
    class Conexao{
        public static function conectar(){
            $host = 'localhost';
            $dbName = 'norte';
            $username = 'root';
            $password = '';
            $stn = 'mysql:host='.$host.';dbname='.$dbName.';charset=utf8';
            try{                 
                $conn = new PDO($stn,$username,$password);
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                return $conn;
            }catch(PDOException $e){
                echo "Erro de conexao ".$e->getMessage();
            }
        }
    }
    