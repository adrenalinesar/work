<?php
/**
 * Created by PhpStorm.
 * User: adrenaline
 * Date: 08.06.16
 * Time: 16:13
 */

namespace models;


use core\Model;

class Books extends Model {
    public function getAllBooks(){
        $q = "Select * from books";
        
        return $this->fetchAll($q);
    }

    public function getBook($id){
        $params = array();
        $params['id'] = $id;

        $q = "Select * from books where id = :id";
        return $this->fetchOne($q, $params);
    }

    public function addBook($name, $author, $type, $length){
        $params = array();
        $params['name'] = $name;
        $params['author'] = $author;
        $params['type'] = $type;
        $length['length'] = $length;

        $q = "insert into books ('name', 'author', 'length', 'type') values (:name, :author, :type, :length)";
        return $this->execute($q, $params);
    }
}