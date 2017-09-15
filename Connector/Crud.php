<?php

/**
 * Created by PhpStorm.
 * User: vladimirs
 * Date: 15/09/2017
 * Time: 19:15
 */
class Crud
{
    CONST DATA_PATH = 'Data/Users.json';

    public $data;

    function __construct($db)
    {
        if(!file_exists($db)){
            echo 'File not found!';
        }
        $string = file_get_contents($db);
        $this->setData(json_decode($string, true));
    }

    public function setData($decodedJson)
    {
        $this->data = $decodedJson;
    }

    public function getData()
    {
        return $this->data;
    }

    public function read()
    {
        return $this->getData();
    }
}