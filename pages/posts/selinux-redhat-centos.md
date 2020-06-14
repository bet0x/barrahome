# SELinux en Redhat / CentOS

Security-Enhanced Linux (SELinux) es una arquitectura de seguridad que incorpora DAC (control de acceso discrecional), control de acceso obligatorio (Type Enforcement), RBAC (contron de acceso basado en roles) y seguridad multi-nivel (MLS) en ocnjunto con MCS (multi-categoria).

## Contextos de seguridad

En el sitema operativo con SELinux cada objeto tiene un contexto de seguridad. Este usa las politicas de seguridad para decidir accesos y otros. Un contexto tiene definido also como:

> usuario_u:rol_r:tipo_t:nivel

Este se compone por:

- Indentidad o usuario
- Roles
- Tipo (Type Enforcement)
- Nivel (MLS, MCS)

## Contextos de ejemplo para Apache, Home (inodo) y NGINX en Centos

             system_u:object_r:httpd_sys_content_t:s0
             system_u:object_r:home_user_t:s0**
    		system_u:system_r:httpd_t:s0

Para poder saber el contexto de *algo* por lo general agregamos al comando la opcion **-Z** 

Ejemplo de salida para **ls -Z**:

            [alberto@oficina public_blog]$ ls -Z
            unconfined_u:object_r:user_home_t:s0 barrahome
            [alberto@oficina public_blog]$

Ejemplo de salida para **ps fax -Z**:

            system_u:system_r:httpd_t:s0     2390 ?        Ss     0:00 nginx: master process /usr/sbin/nginx -c /etc/nginx/nginx.conf
            system_u:system_r:httpd_t:s0     2391 ?        S      0:00  \_ nginx: worker process
            system_u:system_r:httpd_t:s0     2392 ?        S      0:00  \_ nginx: worker process
            system_u:system_r:httpd_t:s0     2393 ?        S      0:15  \_ nginx: worker process
            system_u:system_r:httpd_t:s0     2394 ?        S      0:00  \_ nginx: worker process

Y con esto terminamos la primera y breve parte de SELinux. Voy a comenzar a ahondar en este tema, relacionando SELinux a ambientes de Hosting o Alojamiento Web y como generar entornos mas seguros con el mismo.

