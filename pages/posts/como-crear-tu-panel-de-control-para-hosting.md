# Como crear tu panel de control para hosting

Este proyecto lleva años en mi cabeza y nunca lo completo. Hoy he decidido bajar la lista de características y comenzar a trabajar en el mismo en mi tiempo fuera.

Lo básico para que tengamos un panel de control es lo siguiente: 

* Servidor Web
* Servidor FTP
* Servidor de base de datos
* Servidor de correo MDA / MTA
* Servidor DNS
* Servicios agregados

Para esto vamos a utilizar Apache con HTTP/2, PureFTP, MariaDB 10.5, Dovecot en conjunto con Postfix y para finalizar PowerDNS. Los servicios agregados serán: phpMyAdmin, phpPgAdmin y Roundcube para el Webmail. 

Para poder administrar las distintas funciones de nuestro panel vamos a exponer un API creada en Python esta tendrá una suerte de "scripts" con distintas integraciones, MySQL y otros. 

El tipo de instalación será "todo en uno" pero los distintos componentes se deberían poder dividir entre otros elementos.

Algunos elementos que he decidido conservar son, mod_ruid2 y seguramente tendré que actualizarlo o mantenerlo, gajes de el oficio, junto con mod_php o phpFPM o algo de eso.