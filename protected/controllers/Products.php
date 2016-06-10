<?php
/**
 * Created by PhpStorm.
 * User: adrenaline
 * Date: 08.06.16
 * Time: 14:46
 */

namespace controllers;


use core\Controller;
use core\FlashMessages;
use core\ProductFactory;


class Products extends Controller {
    private $type = 'book'; //пока у нас только книги, объявим тип товара из кода. Лень-матушка...

    public function indexAction(){
        date("H:i:s", mktime(0, 0, 13600));
        header('Location:/');
    }

    public function addAction(){
        if(isset($_POST['params']) && $_POST['params']){
            $params = $_POST['params'];
            
            $product = ProductFactory::create($this->type, $params);

            if($product->add()){
                FlashMessages::addMessage('Книга успешно добавлена', 'success');
            } else {
                FlashMessages::addMessage('Ошибка!', 'error');
            }
        }
        $this->render('Product/add.tpl');
    }
    

}