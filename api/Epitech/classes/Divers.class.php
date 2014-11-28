<?php

namespace api\Epitech\classes;

/**
 * Description of Divers
 *
 * @author Sheol
 */
class Divers {
    private $_ip;
    
    public function __construct($data) {
        if (!isset($data->message)) {
            $this->_ip = $data->ip;
        }
    }
    
    public function getIp() {
        return $this->_ip;
    }
}
