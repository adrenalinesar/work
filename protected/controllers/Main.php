<?php
/**
 * Created by PhpStorm.
 * User: adrenaline
 * Date: 08.06.16
 * Time: 11:01
 */

namespace controllers;


use core\Controller;
use core\FlashMessages;

class Main extends Controller{

    public function indexAction(){

        header('Location: /books/show');
    }

}