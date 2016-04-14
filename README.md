# Phopi
## Versión 1.1.0.0
## App Web para el control de puertos Gpio, Phopi (Php Orange Pi).

### Novedades versión 1.1.0.0.

Lanzamiento de la Aplicación.
En desarrollo.

### Implementaciones.

Librerías de control de los puertos Gpio, WiringOP.
Lenguaje de la aplicación back end, Php.
Ajax para Php, Xajax.
Libreria de JavaScript, JQuery.
Diseño fron end, Bootstrap.

### Descripción.

El siguiente vídeo describe el proceso de configuración del servidor LAMP creado 
en el dispositivo Orange Pi PC. Configuración de los parámetros de la red, instalación 
de un cliente git, instalación de make y de gcc, activación de los puertos Gpio con las 
librerías compiladas WiringOP. instalación del servidor FTP ProFTPd y upload de la 
aplicación web Phopi al dispositivo a través del protocolo FTP con NetBeans y Filezilla.

La aplicación web Phopi se ha escrito en lenguaje PHP, pero utiliza Xajax para la comunicación 
con el servidor, llamada a las funciones, y JQuery para controlar la recarga de la aplicación. 
El front end ha sido escrito con Bootstrap, de esta forma la aplicación puede cargar en sistemas 
móviles.

La aplicación web Phopi (PHP Orange Pi) es una aplicación escrita en PHP, apoyandose en Xajax 0.5, 
Bootstrap 3.3.6 y JQuery 2.2.3, corriendo sobre un dispositivo Orange Pi PC, donde tenemos 
desplegado un servidor LAMP (Ubuntu Mate 15.04.1, Apache 2.4.10, MySQL 5.6.28 y PHP 5.6.4). 
Mediante la aplicación controlamos cuatro diodos led conectados a los puertos GPIO 22, 23, 24, 25 
de la Opi.

### Dependencias.

WiringPi for OrangePi. We call it WiringOP. Test fo Orangepi PC:
> [WiringOP] (https://github.com/zhaolei/WiringOP.git)

Lenguaje de programación entorno servidor, back end, PHP:
> [PHP] (http://php.net)

Ajax para PHP:
> [Xajax] (http://www.xajax-project.org)

Librería de JavaScript JQuery:
> [JQuery] (https://jquery.com)

Framework Bootstrap:
> [Bootstrap] (http://getbootstrap.com)

### Captura.

Aplicación Web corriendo en el dispositivo Orange Pi PC:

![Phopi] (https://dl.dropboxusercontent.com/u/3193442/Proyectos/phopi01.png)

### Video.

[App Web para el control de puertos Gpio, Phopi (Php Orange Pi).] (https://youtu.be/KIevMkiSBx4)

### Licencia.

**GNU GENERAL PUBLIC LICENSE** Version 3, 29 June 2007. Ver el archivo LICENSE.

Phopi.