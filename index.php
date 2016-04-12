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
 * Incluimos las clases necesarias. La clase xajax.inc.php necesaria para
 * el funcionamiento de Xajax.
 */
require_once('./controlador/include/xajax/xajax_core/xajax.inc.php');

/**
 * Recuperamos la informacion de la sesion.
 */
session_start();

/**
 * Creamos el objeto Xajax.
 */
$xajax = new xajax('./controlador/motorxajax.php');

/**
 * Registramos las funciones con el objeto xajax creado anteriormente que vamos 
 * a llamar desde JavaScript o directamente desde el codigo PHP.
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
 * Indicamos la ruta del componenete Javascript de Xajax.
 */
$xajax->configure('javascript URI','./controlador/include/xajax/');

/**
 * El método processRequest procesa las peticiones que llegan a la página. Debe 
 * ser llamado antes del código HTML.
 */
$xajax->processRequest();

/**
 * EL método printJavascript() permite la inclusión de las funciones javascript
 * en el codigo.
 */
$xajax->printJavascript();

/**
 * Añadimos la pagina head.php con el contenido del head.
 */
require_once ('./vista/head.php');

/**
 * Añadimos la pagina body.php con el cuerpo de la aplicación.
 */
require_once ('./vista/body.php');

?>