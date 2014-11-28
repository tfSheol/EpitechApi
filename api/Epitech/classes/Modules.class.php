<?php

namespace Epitech;

/**
 * Description of Modules
 *
 * @author Sheol
 */
class Modules {
    private static $_modules;
    
    public function __construct($data) {
        $this->_modules = $data->board->modules;
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
