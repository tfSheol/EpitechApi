<?php

/**
 * Epitech Api
 * 
 * Connect with Epitech login
 *
 * @author Sheol
 */

class Epitech
{    
    /**
     * Clean Json Format
     * 
     * @param string $output
     * @return string
     */
    private function cleanJson($output)
    {
        $output = str_replace('// epitech JSON webservice ...', '', $output);
        $output = str_replace('// Epitech JSON webservice ...', '', $output);
        $output = str_replace('null', '"null"', $output);
        $output = trim($output);
        if (strpos($output, '[') != 0)
                $output = '['.$output;
        if (strrpos($output, ']') != (strlen($output) - 1))
                $output = $output.']';
        return $output;
    }    
    
    /**
     * Check if good login
     * 
     * @param string $msg
     * @return boolean
     */
    private function checkLogin($msg)
    {
        if (strcmp($msg, "Le login et/ou le mot de passe sont invalides.") == 0)
            return false;
        else
            return true;
    }
    
    /**
     * Check if user is from
     * Marseille
     * 
     * @param string $location
     * @return boolean
     */
    private function checkLocation($location)
    {
        if ($location == "FR/MAR")
            return true;
        else
            return false;
    }
    
    /**
     * Get data from Epitech page
     * 
     * @param string $login
     * @param string $password
     * @return type
     */
    private function getData($login, $password) {
        $postArray = array('login' => urlencode($login),
                           'password' => urldecode($password));
        $curl = curl_init('https://intra.epitech.eu/?format=json');
        $tmp_fname = tempnam('/tmp', 'COOKIE');
        curl_setopt($curl, CURLOPT_ENCODING, 'gzip');
        curl_setopt($curl, CURLOPT_COOKIESESSION, true);
        curl_setopt($curl, CURLOPT_COOKIE, 'language=fr');
        curl_setopt($curl, CURLOPT_COOKIEJAR, $tmp_fname);
        curl_setopt($curl, CURLOPT_COOKIEFILE, $tmp_fname);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postArray);
        
        return curl_exec($curl);
    }
    
    /**
     * Login
     * 
     * @param string $login
     * @param string $password
     * @return boolean
     */
    public function connect($login, $password)
    {
        $data = json_decode($this->cleanJson(htmlspecialchars_decode($this->getData($login, $password))))[0];
        if ($this->checkLogin($data->message) === true)
        {
            if ($this->checkLocation($data->infos->location) === true)
            {
                $_SESSION['user'] = $login;
                return true;
            }
        }
    }
}
