<?php

require_once('./models/Client.php');

class ClientsController
{
    private $model;

    function __construct()
    {
        $this->model = new ClientModel(); 
    }


    function getAll()
    {
        $resultData = $this->model->getAll();
    }
}