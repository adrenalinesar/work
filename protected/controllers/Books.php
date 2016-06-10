<?php
/**
 * Created by PhpStorm.
 * User: adrenaline
 * Date: 10.06.16
 * Time: 13:46
 */

namespace controllers;


use core\Controller;
use models\Books as BookModel;

class Books extends Controller{

    public function indexAction(){
        header('Location: /books/show?type=books');
    }

    public function showAction(){
        if(isset($_GET['type'])){
            $book = new BookModel();

            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $data = $book->getBook($id);

                if(!empty($data)){
                    $this->render('Books/show.tpl', array(
                        'book' => $data
                    ));
                }
            }

            $data = $book->getAllBooks();
            if(!empty($data)){
                $this->render('Books/show_all.tpl', array(
                    'books' => $data
                ));

            }

        }
        $this->render('error.tpl');
    }
}