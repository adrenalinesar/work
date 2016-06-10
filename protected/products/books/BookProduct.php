<?php

/**
 * Created by PhpStorm.
 * User: adrenaline
 * Date: 10.06.16
 * Time: 10:55
 */

use models\Books;

class BookProduct implements Product{
    private $name;
    private $author;
    private $length;
    private $type;
    private $book;
    
    public function __construct($name, $author, $length, $type){
        $this->name = $name;
        $this->author = $author;
        $this->length = $length;
        $this->type = $type;
        $this->book = new Books();
    }
    
      
    
    public function add(){

        if($this->book->addBook($this->name, $this->author, $this->type, $this->length)){
            return true;
        }
        
        return false;
    }
    
    public function delete(){
        
    }
    
    public function show($type, $id = null){
        
    }
}