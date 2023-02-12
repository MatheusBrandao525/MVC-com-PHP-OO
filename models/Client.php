<?php

require_once("./configuration/connect.php");

class ClientModel extends Connection
{
    private $table;

    function __construct()
    {
        parent::connect();
        $this->table = "clientes";
    }

    function getAll()
    {
        $sqlSelect = $this->conn->query("SELECT * FROM $this->table");
        $resultQuery = $sqlSelect->fetchAll();
        return $resultQuery;
    }
}