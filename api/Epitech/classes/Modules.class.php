<?php

namespace api\Epitech\classes;

/**
 * Description of Modules
 *
 * @author Sheol
 */
class Modules {
    private $_modules;
    
    public function __construct($data) {
        if (!isset($data->message)) {
            $this->_modules = $data->board->modules;
        }
    }
    
    public function &getNbModules() {
        return count($this->_modules);
    }
    
    public function &getFirstModule() {
        return $this->_modules[0];
    }
    
    public function &getLastModule() {
        return $this->_modules[$this->getNbModules() - 1];
    }
    
    public function &getModules() {
        return $this->_modules;
    }
}
