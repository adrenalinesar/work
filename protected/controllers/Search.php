<?php
/**
 * Created by PhpStorm.
 * User: adrenaline
 * Date: 17.06.16
 * Time: 13:04
 */

namespace controllers;


use core\Controller;
use models\Search as SearchModel;

class Search extends Controller{
    public function indexAction(){
        if(isset($_POST['params']['type'], $_POST['params']['word'])){
            $result = array();
            $type = $_POST['params']['type'];
            $word = $_POST['params']['word'];
            $s = new SearchModel();
            $data = $s->searchAc($type, $word);

            foreach ($data as $d){
                array_push($result, $d[$type]);
            }

            echo json_encode($result);
        }

    }

    public function showAction(){

        if(isset($_POST['s-input'], $_POST['s-select'])){

            $word = $_POST['s-input'];
            $type = $_POST['s-select'];

            $s = new SearchModel();
            $data = $s->fullSearch($type, $word);
            $this->render('Search/show.tpl', array(
                'books' => $data
            ));
        }
        
    }
}