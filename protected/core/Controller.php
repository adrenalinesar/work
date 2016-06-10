<?php
/**
 * Created by PhpStorm.
 * User: adrenaline
 * Date: 08.06.16
 * Time: 12:38
 */

namespace core;


class Controller {

    protected function render($tplPath, $args = array()){
        $smarty = new \Smarty();
        
        $smarty->setTemplateDir('protected/vendor/smarty/templates/');
        $smarty->setCompileDir('protected/vendor/smarty/templates_c/');
        $smarty->setConfigDir('protected/vendor/smarty/configs/');
        $smarty->setCacheDir('protected/vendor/smarty/cache/');
        
        $smarty->escape_html = true;
        
        $smarty->assign($args);
        
        $config = Registry::get('config');
        
        $smarty->assign(array(
            '_root' => $config['root'],
            '_flashMessages' => FlashMessages::getMessage()
        ));
        
        $smarty->display('protected/views/' . $tplPath);
        exit();
    }
    

}