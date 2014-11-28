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
    
    /**
     * A delete
     * @return type
     */
    public function &getData() {
        return $this->_data;
    }
    
    private function &findGoodMethod($class, $method) {
        foreach (get_class_methods($class) as $data) {
            if (strcmp($method, $data) === 0) {
                return $class->$method();
            }
        }
        echo 'ERROR: '.$method.' no found in '.get_class($class).' Class';
    }
    
    public function &getActivites($method) {
        return $this->findGoodMethod($this->_activites, $method);
    }
    
    public function &getCurrent($method) {
        return $this->findGoodMethod($this->_current, $method);
    }
    
    public function &getDivers($method) {
        return $this->findGoodMethod($this->_divers, $method);
    }
    
    public function &getHistory($method) {
        return $this->findGoodMethod($this->_history, $method);
    }
    
    public function &getInfos($method) {
        return $this->findGoodMethod($this->_infos, $method);
    }
    
    public function &getModules($method) {
        return $this->findGoodMethod($this->_modules, $method);
    }
    
    public function &getNotes($method) {
        return $this->findGoodMethod($this->_notes, $method);
    }
    
    public function &getProjets($method) {
        return $this->findGoodMethod($this->_projets, $method);
    }
    
    public function &getStages($method) {
        return $this->findGoodMethod($this->_stages, $method);
    }
    
    public function &getSusies($method) {
        return $this->findGoodMethod($this->_susies, $method);
    }
    
    public function &getTickets($method) {
        return $this->findGoodMethod($this->_tickets, $method);
    }
}