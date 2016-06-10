<?php
/**
 * Created by PhpStorm.
 * User: adrenaline
 * Date: 10.06.16
 * Time: 9:35
 */

namespace core;




class ProductFactory {
    public static function create($type, array $params){
        $product = '\\' . ucfirst($type) . 'Product';

        if(class_exists($product)){
            return new $product($params);
        } else {
            throw new \Exception('Ошибка создания объекта');
        }
    }
}