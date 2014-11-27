<?php

namespace Epitech;

/**
 * Description of Epitech
 *
 * @author Sheol
 */

class Epitech {
    private static $_login;
    private static $_password;
    private static $_data;
    private static $_activites;
    private static $_connect;
    private static $_current;
    private static $_divers;
    private static $_history;
    private static $_infos;
    private static $_modules;
    private static $_notes;
    private static $_projets;
    private static $_stages;
    private static $_susies;
    private static $_tickets;
    
    public function __construct($login, $password) {
        $this->_login = $login;
        $this->_password = $password;
        spl_autoload_register(__NAMESPACE__.'\\Epitech::loader');
        $this->_connect = new Connect();
        $this->_data = $this->_connect->getData($this->_login, $this->_password);
        $this->_activites = new Activites($this->_data);
        $this->_current = new Current($this->_data);
        $this->_divers = new Divers($this->_data);
        $this->_history = new History($this->_data);
        $this->_infos = new Infos($this->_data);
        $this->_modules = new Modules($this->_data);
        $this->_notes = new Notes($this->_data);
        $this->_projets = new Projets($this->_data);
        $this->_stages = new Stages($this->_data);
        $this->_susies = new Susies($this->_data);
        $this->_tickets = new Tickets($this->_data);
    }
    
    private function loader($classe) {
        echo $classe.'<br/>';
        $tab = split('[\\]', $classe);
        if (file_exists('./api/'.$tab[0].'/classes/'.$tab[1].'.class.php'))
            require_once ('./api/'.$tab[0].'/classes/'.$tab[1].'.class.php');
    }
    
    public function connect() {
        $data = $this->_data;
        if ($this->_connect->checkLogin($data->message) === true)
        {
            if ($this->_connect->checkLocation($data->infos->location) === true)
            {
                $_SESSION['user'] = $this->_login;
                return true;
            }
        }
    }
    
    public function getData() {
        return $this->_data;
    }
    
    public function getActivites() {
        return $this->_activites;
    }
    
    public function getCurrent() {
        return $this->_current;
    }
    
    public function getDivers() {
        return $this->_divers[];
    }
    
    public function getHistory() {
        return $this->_history;
    }
    
    public function getInfos() {
        return $this->_infos;
    }
    
    public function getModules() {
        return $this->_modules;
    }
    
    public function getNotes() {
        return $this->_notes;
    }
    
    public function getProjets() {
        return $this->_projets;
    }
    
    public function getStages() {
        return $this->_stages;
    }
    
    public function getSusies() {
        return $this->_susies;
    }
    
    public function getTickets() {
        return $this->_tickets;
    }
}