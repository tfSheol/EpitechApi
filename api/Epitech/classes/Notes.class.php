<?php

namespace Epitech;

/**
 * Description of Notes
 *
 * @author Sheol
 */
class Notes {
    private static $_notes;
    
    public function __construct($data) {
        $this->_notes = $data->board->notes;
    }
    
    public function &getNbNotes() {
        return count($this->_notes);
    }
    
    public function &getFirstNote() {
        return $this->_notes[0];
    }
    
    public function &getLastNote() {
        return $this->_notes[$this->getNbNotes() - 1];
    }
    
    public function &getNotes() {
        return $this->_notes;
    }
}
