<?php

namespace api\Epitech\classes;

/**
 * Description of Stages
 *
 * @author Sheol
 */
class Stages {
    private $_stages;
    
    public function __construct($data) {
        if (!isset($data->message)) {
            $this->_stages = $data->board->stages;
        }
    }
    
    public function &getNbStages() {
        return count($this->_stages);
    }
    
    public function &getFirstStage() {
        return $this->_stages[0];
    }
    
    public function &getLastStage() {
        return $this->_stages[$this->getNbStages() - 1];
    }
    
    public function &getStages() {
        return $this->_stages;
    }
}
