<?php
use \PdPbook;

/**
 * City model
 * @final Pbookmodel
 * @category model
 * @author Rana
 */
class Pbookmodel extends My_DModel{
    //put your code here


    function __construct() {
        parent::__construct();
        $this->init("PdPbook",$this->doctrine->em);
    }
}