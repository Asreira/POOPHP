<?php


//Ejercicio practica de Clases y Objetos.
//
//Crearemos una clase coche con los siguientes atributos:
//- Nbastidor
//- Nmarchas
//- Marcha_actual
//- Vmax
//- Vactual
//- Power
//
//NOTA: Los atributos serán privados.
//
//Además el coche tendrá como mínimo los siguientes métodos:
//
//subirVelocidad($uds = 20) : Si no se le pasa nada subirá en 20 la velocidad actual
//bajarVelocidad($uds = 20): Si no se le pasa nada bajará en 20 la velocidad actual
//subirMarcha($uds = 1): Si no se indica nada, subirá la marcha una unidad.
//Al subir la marcha una unidad, subirá la velocidad 20kms.
//bajarMarcha($uds = 1): Si no se indica nada, bajará la marcha una unidad.
//Al subir la marcha una unidad, bajará la velocidad 20kms.
//
//Ojo!. Controlar que no se sobrepasen los límites superiores ni inferiores en marchas y velocidad.

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of coche
 *
 * @author Alicia
 */
class coche {
    private $Nbastidor;
    private $Nmarchas;
    private $marcha_actual;
    private $Vmax;
    private $Vactual;
    private $power;
    
    function __construct() {
        $this->Nmarchas = 6;
        $this->Vmax = 350;
    }
    
    function subirVelocidad($uds=20) {
        if ($uds < 0 || $uds > $this->Vmax) {
           return -1;
        }
        $this->Vactual = $uds;
        return "La velocidad actual es: ".$this->Vactual;
    }
    
    function bajarVelocidad($uds=20) {
        if ($uds < 0 || $uds > $this->Vactual) {
            return -1;
        }
        $this->Vactual = $uds;
        return "La velocidad actual es: ".$this->Vactual;
    }
    
    function subirMarcha($uds=1) {
        if ($uds < 0 || $uds < $this->marcha_actual || $uds > $this->Nmarchas) {
            return -1;
        }
        $this->marcha_actual += $uds;
        return "La marcha actual es: ".$this->marcha_actual;
    }
    
    function bajarMarcha($uds=1) {
        if ($uds < 0 || $uds > $this->marcha_actual) {
            return -1;
        }
        $this->marcha_actual = $uds;
        return "La marcha actual es: ".$this->marcha_actual;
    }
}
