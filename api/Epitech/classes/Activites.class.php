<?php

namespace api\Epitech\classes;

/**
 * Description of Activites
 *
 * @author Sheol
 */
class Activites {
    private $_activites;
    
    public function __construct($data) {
        if (!isset($data->message)) {
            $this->_activites = $data->board->activites;
        }
    }
    
    public function &getNbActivites() {
        return count($this->_activites);
    }
    
    public function &getFirstActivite() {
        return $this->_activites[0];
    }
    
    public function &getLastActivite() {
        return $this->_activites[$this->getNbActivites() - 1];
    }
    
    public function &getActivites() {
        return $this->_activites;
    }
}
