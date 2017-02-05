<?php
/**
 * Created by PhpStorm.
 * User: shayegh
 * Date: 2/5/17
 * Time: 1:01 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends Application {

    function __construct()
    {
        parent::__construct();
    }

    public function index() {

        $this->data['pagebody'] = 'justone';
        $record = $this->quotes->last();
        $this->data = array_merge($this->data, $record);

        $this->render();
    }
}