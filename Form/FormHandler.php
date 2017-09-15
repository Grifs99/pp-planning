<?php

/**
 * Created by PhpStorm.
 * User: vladimirs
 * Date: 15/09/2017
 * Time: 20:56
 */
class FormHandler
{
    public $data;

    public $crudModel;

    function __construct(Crud $model)
    {
        $this->crudModel = $model;
        $this->addSession($_POST);
    }

    public function addSession($data)
    {
        /** validation TODO */

        $this->crudModel->createSession($data);
    }
}