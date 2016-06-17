<?php

/**
 * Created by PhpStorm.
 * User: adrenaline
 * Date: 10.06.16
 * Time: 10:55
 */
namespace products;
use models\Books;
use interf;


class BookProduct implements interf\Product{
    private $name;
    private $author;
    private $length;
    private $type;
    private $book;
    
    public function __construct(array $params){

        $this->name = $params['name'];
        $this->author = $params['author'];
        $this->length = $params['length'];
        $this->type = $params['type'];
        $this->book = new Books();
    }
    
      
    
    public function add(){

        if($this->book->addBook($this->name, $this->author, $this->length, $this->type)){
            return true;
        }
        
        return false;
    }
    
    public function delete(){
        
    }
    
    public function show($type, $id = null){
        
    }
}