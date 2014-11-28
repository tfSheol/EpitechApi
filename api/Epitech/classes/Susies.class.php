<?php

namespace Epitech;

/**
 * Description of Susies
 *
 * @author Sheol
 */
class Susies {
    private static $_susies;
    
    public function __construct($data) {
        $this->_susies = $data->board->susies;
    }
    
    public function &getNbSusies() {
        return count($this->_susies);
    }
    
    public function &getFirstSusie() {
        return $this->_susies[0];
    }
    
    public function &getLastSusie() {
        return $this->_susies[$this->getNbSusies() - 1];
    }
    
    public function &getSusies() {
        return $this->_susies;
    }
}
