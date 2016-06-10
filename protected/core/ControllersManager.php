<?php
/**
 * Created by PhpStorm.
 * User: adrenaline
 * Date: 08.06.16
 * Time: 9:55
 */

namespace core;

class ControllersManager {

    public function run(){
        $url = isset($_GET['route']) ? $_GET['route'] : null;

        if ($url) {
            $urlArr = explode("/", $url);
            $class = "controllers\\" . (ucfirst($urlArr[0]));
            if (empty($urlArr[1])) {
                $method = "index";
            } else {
                $method = $urlArr[1];
            }
        } else {
            $class = "controllers\\Main";
            $method = "index";
        }
        if (class_exists($class, TRUE)){
            $classInstance = new $class;
        } else {
            throw new \Exception('Requested page not found. Existing class required');
        }
        $method .= 'Action';
        if(method_exists($classInstance, $method)){
            $classInstance->$method();
        } else {
            throw new \Exception('Requested page not found. Existing method required');
        }
    }
}