<?php
/**
 * Created by PhpStorm.
 * User: adrenaline
 * Date: 08.06.16
 * Time: 12:08
 */

namespace core;


class FlashMessages {

    static $types = array('success', 'error');


    /**
     * Add message of specified type to messages array
     * @param string $message
     * @param string $type influence style of message
     * @return bool
     */
    public static function addMessage($message, $type){
        if (in_array($type, self::$types)) {
            $_SESSION['flashMessages'][$type][] = $message;
            return true;
        }
        return false;
    }
    /**
     * Gets all messages and clears the array
     * @return array
     */
    public static function getMessage(){
        $flashMessages = array();
        if(isset($_SESSION['flashMessages'])){
            $flashMessages = $_SESSION['flashMessages'];
            unset($_SESSION['flashMessages']);
        }
        return $flashMessages;
    }

}