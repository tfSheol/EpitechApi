<?php

namespace api\Epitech\classes;

/**
 * Description of Connect
 *
 * @author Sheol
 */
class Connect {
    private function cleanJson($output) {
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
    
    public function checkLogin($msg) {
        if (strcmp($msg, "Le login et/ou le mot de passe sont invalides.") == 0)
            return false;
        else
            return true;
    }

    public function checkLocation($location) {
        if ($location == "FR/MAR")
            return true;
        else
            return false;
    }

    public function getData($login, $password) {
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
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postArray);
        
        return json_decode($this->cleanJson(htmlspecialchars_decode(curl_exec($curl))))[0];
    }
}