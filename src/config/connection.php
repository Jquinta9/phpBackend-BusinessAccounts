<?php
namespace App\config;

use \PDO;
    class connection
    {
        private string $serverName = "DESKTOP-C0TS2TB"; //serverName\instanceName
        private string $dbName = "BusinessAccounts&Sales";
        private string $dbUserName = "";
        private string $dbPassword = "";


        public function connectDB(): PDO
        {

            $conn = new PDO("sqlsrv:Server=$this->serverName;Database=$this->dbName", $this->dbUserName, $this->dbPassword);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
    }
?>