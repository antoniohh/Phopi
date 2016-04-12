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
?>

    <a name="inicio"></a>
    <body>
        <div class="container">
            <div class="header clearfix">
                <nav>                    
                    <ul class="nav nav-pills pull-right">
                        <li role="presentation" class="active"><a href="#inicio">Inicio</a></li>
                        <li role="presentation"><a href="#">About</a></li>
                        <li role="presentation"><a href="#">Contact</a></li>
                    </ul>
                </nav>
                <a class="navbar-brand" href="#">
                    <img alt="Brand" src="./vista/img/phopi.png" height="20px" width="20px">
                </a>
                <h3 class="text-muted">Phopi</h3>
            </div>

            <div class="jumbotron">
                <h1>Phopi</h1>
                <p class="lead">Phopi (PHP Orange Pi) es una aplicación escrita en PHP, apoyandose en Xajax 0.5, Bootstrap 3.3.6 y JQuery 2.2.3, 
                    corriendo sobre un dispositivo Orange Pi PC, donde tenemos desplegado un servidor LAMP (Ubuntu Mate 15.04.1, 
                    Apache 2.4.10, MySQL 5.6.28 y PHP 5.6.4).
                </p>
                <p class="lead">Mediante la aplicación controlamos cuatro diodos led conectados a los puertos GPIO 22, 23, 24, 25 de la Opi.
                </p>
            </div>

            <div class="row marketing">
                <div class="col-lg-6">
                    <h3 style="padding-top: 20px">Led Azul</h3>
                    <p>Pulsando los botones On y Off, encendemos y apagamos el led <strong>azul</strong> conectado al puerto 
                        <strong>GPIO 22</strong> del dispositivo Orange Pi.</p>                    
                    <div class="btn-group" role="group" aria-label="">                        
                        <a id="btnazulon" onclick="xajax_azulon()" class="btn btn-lg btn-primary">Encender
                        </a>                                                 
                        <a id="btnazuloff" onclick="xajax_azuloff()" class="btn btn-lg btn-primary">Apagar
                        </a>                        
                    </div>
                    <h3 style="padding-top: 20px">Led Rojo</h3>
                    <p>Pulsando los botones On y Off, encendemos y apagamos el led <strong>rojo</strong> conectado al puerto 
                        <strong>GPIO 24</strong> del dispositivo Orange Pi.</p>
                    <div class="btn-group" role="group" aria-label="">
                        <a id="btnrojoon" onclick="xajax_rojoon()" class="btn btn-lg btn-primary">Encender
                        </a>                                                 
                        <a id="btnrojooff" onclick="xajax_rojooff()" class="btn btn-lg btn-primary">Apagar
                        </a> 
                    </div>
                </div>

                <div class="col-lg-6">
                    <h3 style="padding-top: 20px">Led Verde</h3>
                    <p>Pulsando los botones On y Off, encendemos y apagamos el led <strong>verde</strong> conectado al puerto 
                        <strong>GPIO 23</strong> del dispositivo Orange Pi.</p>
                    <div class="btn-group" role="group" aria-label="">
                        <a id="btnverdeon" onclick="xajax_verdeon()" class="btn btn-lg btn-primary">Encender
                        </a>                                                 
                        <a id="btnverdeoff" onclick="xajax_verdeoff()" class="btn btn-lg btn-primary">Apagar
                        </a> 
                    </div>                    
                    <h3 style="padding-top: 20px">Led Amarillo</h3>
                    <p>Pulsando los botones On y Off, encendemos y apagamos el led <strong>amarillo</strong> conectado al puerto 
                        <strong>GPIO 25</strong> del dispositivo Orange Pi.</p>
                    <div class="btn-group" role="group" aria-label="">
                        <a id="btnamarilloon" onclick="xajax_amarilloon()" class="btn btn-lg btn-primary">Encender
                        </a>                                                 
                        <a id="btnamarillooff" onclick="xajax_amarillooff()" class="btn btn-lg btn-primary">Apagar
                        </a> 
                    </div>
                </div>
            </div>
            
            <footer class="footer">
                <p>&copy; 2016 Antonio Horrillo Horrillo.</p>
            </footer>
        </div> <!-- /container -->
    </body>
</html> 