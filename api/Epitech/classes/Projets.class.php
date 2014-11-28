<?php

namespace api\Epitech\classes;

/**
 * Description of Projets
 *
 * @author Sheol
 */
class Projets {
    private $_projects;
    
    public function __construct($data) {
        if (!isset($data->message)) {
            $this->_projects = $data->board->projets;
        }
    }
    
    public function &getNbProjects() {
        return count($this->_projects);
    }
    
    public function &getFirstProject() {
        return $this->_projects[0];
    }
    
    public function &getLastProject() {
        return $this->_projects[$this->getNbProjects() - 1];
    }
    
    public function &getProjects() {
        return $this->_projects;
    }
}
