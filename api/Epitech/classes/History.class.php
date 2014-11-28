<?php

namespace api\Epitech\classes;

/**
 * Description of History
 *
 * @author Sheol
 */
class History {
    private $_history;
    private $_title;
    private $_id;
    private $_date;

    public function __construct($data) {
        if (!isset($data->message)) {
            $this->_history = $data->history;
        }
    }
    
    public function &getNbHistory() {
        return count($this->_history);
    }
    
    public function &getFirstHistory() {
        return $this->_history[0];
    }
    
    public function &getLastHistory() {
        return $this->_history[$this->getNbHistory() - 1];
    }
    
    public function &getHistory() {
        return $this->_history;
    }
    
    private function &getGoodInfos(&$categorie, $tmp) {
        if (isset($this->_history)) {
            foreach ($this->_history as $key => $value) {
                $categorie[$key] = $value->$tmp;
            }
        }
        return $categorie;
    }
    
    public function &getTitlesHistory() {
        return $this->getGoodInfos($this->_title, "title");
    }
    
    public function &getIdHistory() {
        return $this->getGoodInfos($this->_id, "id");
    }
    
    public function &getDateHistory() {
        return $this->getGoodInfos($this->_date, "date");
    }
}
