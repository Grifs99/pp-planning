<?php

/**
 * Created by PhpStorm.
 * User: vladimirs
 * Date: 15/09/2017
 * Time: 19:15
 */
class Crud
{
    public $db;

    public $data;

    function __construct($db)
    {
        if(!file_exists($db)){
            echo 'File not found!';
        }
        $this->db = $db;
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

    public function createSession($data)
    {
        $session = [];
        $allSessions = $this->getData();
        $session['userA'] = $data['slack_id1'];
        $session['userB'] = $data['slack_id2'];
        $session['date'] = $data['date'];
        array_push($allSessions['sessions'],$session);
        file_put_contents($this->db, json_encode($allSessions));
    }
}