<?php

class ConexaoBD
{
    public static function Conexao()
    {
        $servername = "localhost:3306";
        $dbname = "findinn";
        $username = "jeoston";
        $password = "14029510";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "entrou no catch" . $e->getmessage();
            return null;
        }
    }
}
