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

La aplicación web Phopi (PHP Orange Pi) es una aplicación escrita en PHP, apoyandose en Xajax 0.5,
(para la comunicación con el servidor)Bootstrap 3.3.6 y JQuery 2.2.3 (para controlar la recarga de  
la aplicación), corriendo sobre un dispositivo Orange Pi PC, donde tenemos desplegado un servidor
LAMP (Ubuntu Mate 15.04.1, Apache 2.4.10, MySQL 5.6.28 y PHP 5.6.4). Mediante la aplicación
controlamos cuatro diodos led conectados a los puertos GPIO 22, 23, 24, 25
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

### Configuración e instalación.

## Instalamos los paquetes necesarios

> apt-get install git
> apt-get install make
> apt-get install gcc

## Clonamos el repositorio, accedemos a el, aplicamos permisos de ejecución y compilamos.

> git clone https://github.com/zhaolei/WiringOP.git -b h3
> cd WiringOP
> chmod +x ./build
> sudo ./build

## Comandos para gestionar los Gpio

> gpio mode 22 out // Establecemos el modo.
> gpio write 22 1 // Activamos el Gpio 22.
> gpio write 22 0 // Desactivamos el Gpio 22.
> gpio read 22 // Leemos el estado del Gpio 22.

## Damos permisos al usuario de Apache, permisos de "root".

> nano /etc/sudoers
> www-data ALL=(ALL) NOPASSWD: ALL // Escribimos esta línea al final del archivo.

## Configuramos la Red.

> apt-get remove network-manager // Desinstalamos el paquete network-manager.

## Editamos /etc/network/interfaces

> nano /etc/network/interfaces

> ######################################################################
> # /etc/network/interfaces -- configuration file for ifup(8), ifdown(8)
> #
> # A "#" character in the very first column makes the rest of the line
> # be ignored. Blank lines are ignored. Lines may be indented freely.
> # A "\" character at the very end of the line indicates the next line
> # should be treated as a continuation of the current one.
> #
> # The "pre-up", "up", "down" and "post-down" options are valid for all
> # interfaces, and may be specified multiple times. All other options
> # may only be specified once.
> #
> # See the interfaces(5) manpage for information on what options are
> # available.
> ######################################################################
>
> # Loopback interface.
>
>  auto lo
>  iface lo inet loopback
>
> # Red eth0
>
>  auto eth0
>  iface eth0 inet static
>      address 192.168.1.250
>      network 192.168.1.0
>      netmask 255.255.255.0
>      broadcast 192.168.1.255
>      gateway 192.168.1.1

## Editamos /etc/resolv.conf

> nano /etc/resolv.conf

> domain home.lan
> 	
> nameserver 8.8.8.8
> nameserver 8.8.4.4

## Editamos /etc/hosts

> nano /etc/hosts

> 127.0.0.1			  localhost
> 192.168.1.250		server.home.lan		server

## Editamos /etc/hostname

> nano /etc/hostname

## Configuramos el servidor ProFtpd

> apt-get install proftpd

> ftpasswd --passwd --name=orangepi --file=/etc/proftpd/passwd --uid=115 --home=/home/orangepi --shell=/bin/false

### Captura.

Aplicación Web corriendo en el dispositivo Orange Pi PC:

![Phopi] (https://dl.dropboxusercontent.com/u/3193442/Proyectos/phopi01.png)

### Video.

[App Web para el control de puertos Gpio, Phopi (Php Orange Pi).] (https://youtu.be/KIevMkiSBx4)

### Licencia.

**GNU GENERAL PUBLIC LICENSE** Version 3, 29 June 2007. Ver el archivo LICENSE.

Phopi.
