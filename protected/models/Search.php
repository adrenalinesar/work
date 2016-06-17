<?php
/**
 * Created by PhpStorm.
 * User: adrenaline
 * Date: 17.06.16
 * Time: 13:45
 */

namespace models;


use core\Model;

class Search extends Model {
    public function searchAc($type, $word){
        $params = array();

        $params['type'] = $type;
        $params['word'] = $word;
        //не безопасно, но с преперед стетсментс запрос не завелся, сколько я не бился.
        $q = "select DISTINCT ({$type}) from books where {$type} like '%{$word}%'";
    
                
        return $this->fetchAll($q);
    }

    public function fullSearch($type, $word){
        $q = "select * from books where  {$type} like '%{$word}%'";
        
        return $this->fetchAll($q);
    }
}