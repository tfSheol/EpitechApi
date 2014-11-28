<?php

namespace Epitech;

/**
 * Description of Divers
 *
 * @author Sheol
 */
class Divers {
    private static $_ip;
    
    public function __construct($data) {
        $this->_ip = $data->ip;
    }
    
    public function getIp() {
        return $this->_ip;
    }
}
