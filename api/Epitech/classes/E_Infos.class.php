<?php

namespace api\Epitech\classes;

/**
 * Description of I_Infos
 *
 * @author Sheol
 */
abstract class E_Infos {
    const MAR = "Marseille";
    const BDX = "Bordeaux";
    const LYN = "Lyon";
    const MPL = "Montpellier";
    const NAN = "Nantes";
    const PAR = "Paris";
    const STG = "Strasbourg";
    const LIL = "Lille";
    const NCY = "Nancy";
    const NCE = "Nice";
    const REN = "Rennes";
    const TLS = "Toulouse";
    
    public static function isValide($value) {
        echo $value;
        echo self::MAR;
    }
    
    public static function getConst($value) {
        return constant('self::'.$value);
    }
}