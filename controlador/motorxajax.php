<?php
/*
 * Copyright (C) 2016 Antonio Horrillo Horrillo
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Incluimos las librerías necesarias.
 */
require_once('./include/xajax/xajax_core/xajax.inc.php');

/**
 * Recuperamos la informacion de la sesion.
 */
session_start();

/**
 * Creamos el objeto Xajax.
 */
$xajax = new xajax();

/**
 * Registramos las funciones que vamos a llamar desde JavaScript o directamente
 * desde el codigo PHP.
 */
$xajax->register(XAJAX_FUNCTION,"azulon");
$xajax->register(XAJAX_FUNCTION,"azuloff");
$xajax->register(XAJAX_FUNCTION,"verdeon");
$xajax->register(XAJAX_FUNCTION,"verdeoff");
$xajax->register(XAJAX_FUNCTION,"rojoon");
$xajax->register(XAJAX_FUNCTION,"rojooff");
$xajax->register(XAJAX_FUNCTION,"amarilloon");
$xajax->register(XAJAX_FUNCTION,"amarillooff");
$xajax->register(XAJAX_FUNCTION,"controlazul");
$xajax->register(XAJAX_FUNCTION,"controlverde");
$xajax->register(XAJAX_FUNCTION,"controlrojo");
$xajax->register(XAJAX_FUNCTION,"controlamarillo");
/**
 * El método processRequest procesa las peticiones que llegan a la página.
 * Debe ser llamado antes del código HTML
 */
$xajax->processRequest();

////////////////////////////////////////////////////////////////////////////////
// Inicio Control de Estado
////////////////////////////////////////////////////////////////////////////////

function controlazul() {   
    $respuesta = new xajaxResponse();
    $estado22 = shell_exec("gpio read 22");
          
    if (!isset($estado22)) {        
        $respuesta->alert("No se ha podido iniciar el puerto GPIO 22.");
        $respuesta->assign("btnazulon", "className", "btn btn-lg btn-danger");
        $respuesta->assign("btnazuloff", "className", "btn btn-lg btn-danger");
    }
    
    else {
        
        if ($estado22 == 1) {
            $respuesta->assign("btnazulon", "className", "btn btn-lg btn-success");
            $respuesta->assign("btnazuloff", "className", "btn btn-lg btn-success");           
        }
        
        else if ($estado22 == 0) {
            $respuesta->assign("btnazulon", "className", "btn btn-lg btn-primary");
            $respuesta->assign("btnazuloff", "className", "btn btn-lg btn-primary");
        }
    }
    return $respuesta;  
}

function controlverde() {   
    $respuesta = new xajaxResponse();
    $estado23 = shell_exec("gpio read 23");
  
          
    if (!isset($estado23)) {        
        $respuesta->alert("No se ha podido iniciar el puerto GPIO 23.");
        $respuesta->assign("btnverdeon", "className", "btn btn-lg btn-danger");
        $respuesta->assign("btnverdeoff", "className", "btn btn-lg btn-danger");
    }
    
    else {
        
        if ($estado23 == 1) {
            $respuesta->assign("btnverdeon", "className", "btn btn-lg btn-success");
            $respuesta->assign("btnverdeoff", "className", "btn btn-lg btn-success");           
        }
        
        else if ($estado23 == 0) {
            $respuesta->assign("btnverdeon", "className", "btn btn-lg btn-primary");
            $respuesta->assign("btnverdeoff", "className", "btn btn-lg btn-primary");
        }
    }
    return $respuesta;  
}

function controlrojo() {   
    $respuesta = new xajaxResponse();
    $estado24 = shell_exec("gpio read 24");  
          
    if (!isset($estado24)) {        
        $respuesta->alert("No se ha podido iniciar el puerto GPIO 24.");
        $respuesta->assign("btnrojoon", "className", "btn btn-lg btn-danger");
        $respuesta->assign("btnrojooff", "className", "btn btn-lg btn-danger");
    }
    
    else {
        
        if ($estado24 == 1) {
            $respuesta->assign("btnrojoon", "className", "btn btn-lg btn-success");
            $respuesta->assign("btnrojooff", "className", "btn btn-lg btn-success");           
        }
        
        else if ($estado24 == 0) {
            $respuesta->assign("btnrojoon", "className", "btn btn-lg btn-primary");
            $respuesta->assign("btnrojooff", "className", "btn btn-lg btn-primary");
        }
    }
    return $respuesta;  
}

function controlamarillo() {   
    $respuesta = new xajaxResponse();
    $estado25 = shell_exec("gpio read 25");   
          
    if (!isset($estado25)) {        
        $respuesta->alert("No se ha podido iniciar el puerto GPIO 25.");
        $respuesta->assign("btnamarilloon", "className", "btn btn-lg btn-danger");
        $respuesta->assign("btnamarillooff", "className", "btn btn-lg btn-danger");
    }
    
    else {
        
        if ($estado25 == 1) {
            $respuesta->assign("btnamarilloon", "className", "btn btn-lg btn-success");
            $respuesta->assign("btnamarillooff", "className", "btn btn-lg btn-success");           
        }
        
        else if ($estado25 == 0) {
            $respuesta->assign("btnamarilloon", "className", "btn btn-lg btn-primary");
            $respuesta->assign("btnamarillooff", "className", "btn btn-lg btn-primary");
        }
    }
    return $respuesta;  
}

////////////////////////////////////////////////////////////////////////////////
// Fin Control de Estado
////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////
// Inicio Control de Leds
////////////////////////////////////////////////////////////////////////////////

function azulon() {   
    $respuesta = new xajaxResponse();
    $mode22 = shell_exec("gpio mode 22 out");
   
    if (isset($mode22)) {        
        $respuesta->alert("No se ha podido iniciar el puerto GPIO 22.");
        $respuesta->assign("btnazulon", "className", "btn btn-lg btn-danger");
        $respuesta->assign("btnazuloff", "className", "btn btn-lg btn-danger");
    } 
    
    else { 
        $on = shell_exec("gpio write 22 1");
        $respuesta->assign("btnazulon", "className", "btn btn-lg btn-success");
        $respuesta->assign("btnazuloff", "className", "btn btn-lg btn-success");        
    }
    return $respuesta;  
}

function azuloff() {   
    $respuesta = new xajaxResponse();
    $mode22 = shell_exec("gpio mode 22 out");
   
    if (isset($mode22)) {        
        $respuesta->alert("No se ha podido iniciar el puerto GPIO 22.");
        $respuesta->assign("btnazulon", "className", "btn btn-lg btn-danger");
        $respuesta->assign("btnazuloff", "className", "btn btn-lg btn-danger");
    } 
    
    else { 
        $off = shell_exec("gpio write 22 0");
        $respuesta->assign("btnazulon", "className", "btn btn-lg btn-primary");
        $respuesta->assign("btnazuloff", "className", "btn btn-lg btn-primary");
    }
    return $respuesta;  
}

function verdeon() {   
    $respuesta = new xajaxResponse();
    $mode23 = shell_exec("gpio mode 23 out");
   
    if (isset($mode23)) {        
        $respuesta->alert("No se ha podido iniciar el puerto GPIO 23.");
        $respuesta->assign("btnverdeon", "className", "btn btn-lg btn-danger");
        $respuesta->assign("btnverdeoff", "className", "btn btn-lg btn-danger");
    } 
    
    else { 
        $on = shell_exec("gpio write 23 1");
        $respuesta->assign("btnverdeon", "className", "btn btn-lg btn-success");
        $respuesta->assign("btnverdeoff", "className", "btn btn-lg btn-success");        
    }
    return $respuesta;  
}

function verdeoff() {   
    $respuesta = new xajaxResponse();
    $mode23 = shell_exec("gpio mode 23 out");
   
    if (isset($mode23)) {        
        $respuesta->alert("No se ha podido iniciar el puerto GPIO 23.");
        $respuesta->assign("btnverdeon", "className", "btn btn-lg btn-danger");
        $respuesta->assign("btnverdeoff", "className", "btn btn-lg btn-danger");
    } 
    
    else { 
        $off = shell_exec("gpio write 23 0");
        $respuesta->assign("btnverdeon", "className", "btn btn-lg btn-primary");
        $respuesta->assign("btnverdeoff", "className", "btn btn-lg btn-primary");
    }
    return $respuesta;  
}

function rojoon() {   
    $respuesta = new xajaxResponse();
    $mode24 = shell_exec("gpio mode 24 out");
   
    if (isset($mode24)) {        
        $respuesta->alert("No se ha podido iniciar el puerto GPIO 24.");
        $respuesta->assign("btnrojoon", "className", "btn btn-lg btn-danger");
        $respuesta->assign("btnrojooff", "className", "btn btn-lg btn-danger");
    } 
    
    else { 
        $on = shell_exec("gpio write 24 1");
        $respuesta->assign("btnrojoon", "className", "btn btn-lg btn-success");
        $respuesta->assign("btnrojooff", "className", "btn btn-lg btn-success");        
    }
    return $respuesta;  
}

function rojooff() {   
    $respuesta = new xajaxResponse();
    $mode24 = shell_exec("gpio mode 24 out");
   
    if (isset($mode24)) {        
        $respuesta->alert("No se ha podido iniciar el puerto GPIO 24.");
        $respuesta->assign("btnrojoon", "className", "btn btn-lg btn-danger");
        $respuesta->assign("btnrojooff", "className", "btn btn-lg btn-danger");
    } 
    
    else { 
        $off = shell_exec("gpio write 24 0");
        $respuesta->assign("btnrojoon", "className", "btn btn-lg btn-primary");
        $respuesta->assign("btnrojooff", "className", "btn btn-lg btn-primary");
    }
    return $respuesta;  
}

function amarilloon() {   
    $respuesta = new xajaxResponse();
    $mode25 = shell_exec("gpio mode 25 out");
   
    if (isset($mode25)) {        
        $respuesta->alert("No se ha podido iniciar el puerto GPIO 25.");
        $respuesta->assign("btnamarilloon", "className", "btn btn-lg btn-danger");
        $respuesta->assign("btnamarillooff", "className", "btn btn-lg btn-danger");
    } 
    
    else { 
        $on = shell_exec("gpio write 25 1");
        $respuesta->assign("btnamarilloon", "className", "btn btn-lg btn-success");
        $respuesta->assign("btnamarillooff", "className", "btn btn-lg btn-success");        
    }
    return $respuesta;  
}

function amarillooff() {   
    $respuesta = new xajaxResponse();
    $mode25 = shell_exec("gpio mode 25 out");
   
    if (isset($mode25)) {        
        $respuesta->alert("No se ha podido iniciar el puerto GPIO 25.");
        $respuesta->assign("btnamarilloon", "className", "btn btn-lg btn-danger");
        $respuesta->assign("btnamarillooff", "className", "btn btn-lg btn-danger");
    } 
    
    else { 
        $off = shell_exec("gpio write 25 0");
        $respuesta->assign("btnamarilloon", "className", "btn btn-lg btn-primary");
        $respuesta->assign("btnamarillooff", "className", "btn btn-lg btn-primary");
    }
    return $respuesta;  
}

////////////////////////////////////////////////////////////////////////////////
// Fin Control de Leds
////////////////////////////////////////////////////////////////////////////////

?>