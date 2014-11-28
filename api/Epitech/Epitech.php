<?php

namespace api\Epitech;

/**
 * Description of Epitech
 *
 * @author Sheol
 */

class Epitech {
    private $_login;
    private $_password;
    private $_data;
    private $_activites;
    private $_connect;
    private $_current;
    private $_divers;
    private $_history;
    private $_infos;
    private $_modules;
    private $_notes;
    private $_projets;
    private $_stages;
    private $_susies;
    private $_tickets;
    
    public function __construct($login, $password) {
        $this->_login = $login;
        $this->_password = $password;
        spl_autoload_register(__NAMESPACE__.'\\Epitech::loader');
        $this->_connect = new classes\Connect();
        $this->_data = $this->_connect->getData($this->_login, $this->_password);
        $this->_activites = new classes\Activites($this->_data);
        $this->_current = new classes\Current($this->_data);
        $this->_divers = new classes\Divers($this->_data);
        $this->_history = new classes\History($this->_data);
        $this->_infos = new classes\Infos($this->_data);
        $this->_modules = new classes\Modules($this->_data);
        $this->_notes = new classes\Notes($this->_data);
        $this->_projets = new classes\Projets($this->_data);
        $this->_stages = new classes\Stages($this->_data);
        $this->_susies = new classes\Susies($this->_data);
        $this->_tickets = new classes\Tickets($this->_data);
    }
    
    public function loader($classe) {
        $tab = explode('\\', $classe);
        echo __DIR__;
        if (file_exists(__DIR__.$tab[0].'/classes/'.$tab[1].'.class.php')) {
            require_once (__DIR__.$tab[0].'/classes/'.$tab[1].'.class.php');
        }
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

    public function &getData() {
        return $this->_data;
    }
    
    private function &findGoodMethod($class, $method) {
        foreach (get_class_methods($class) as $data) {
            if (strcmp($method, $data) === 0) {
                return $class->$method();
            }
        }
        echo 'ERROR: '.$method.' no found in '.get_class($class).' Class.';
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