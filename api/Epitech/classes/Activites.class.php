<?php

namespace Epitech;

/**
 * Description of Activites
 *
 * @author Sheol
 */
class Activites {
    private static $_activites;
    
    public function __construct($data) {
        $this->_activites = $data->board->activites;
    }
    
    public function &getNbActivites() {
        return count($this->_activites);
    }
    
    public function &getFirstActivites() {
        return $this->_activites[0];
    }
    
    public function &getLastActivites() {
        return $this->_activites[$this->getNbActivites() - 1];
    }
    
    public function &getActivites() {
        return $this->_activites;
    }
}
