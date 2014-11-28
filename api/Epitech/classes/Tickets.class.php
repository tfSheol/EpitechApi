<?php

namespace api\Epitech\classes;

/**
 * Description of Tickets
 *
 * @author Sheol
 */
class Tickets {
    private $_tickets;
    
    public function __construct($data) {
        if (!isset($data->message)) {
            $this->_tickets = $data->board->tickets;
        }
    }
    
    public function &getNbTickets() {
        return count($this->_tickets);
    }
    
    public function &getFirstTicket() {
        return $this->_tickets[0];
    }
    
    public function &getLastTicket() {
        return $this->_tickets[$this->getNbTickets() - 1];
    }
    
    public function &getTickets() {
        return $this->_tickets;
    }
}
