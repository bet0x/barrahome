# Centos , Apache, SELinux

Guia rapida de como habilitar SELinux con Apache en Centos 7/8.

Luego de instalar Apache con dnf o yum pasamos a permitir Apache con el siguiente comando:

		sudo setsebool -P httpd_can_network_connect 1

Si quieren saber que otras opciones existen en el contexto de httpd pueden ejecutar esta variante:
		sudo getsebool -a | grep "httpd_can"

Luego procedemos a crear nuestro directorio:

    mkdir public_html
    chmod 0755 public_html

En el caso de que se requiera hacer operaciones de lectura/escritura debemos permitir nuestra carpeta con este otro comando:

	  chcon -Rv --type=httpd_sys_rw_content_t /home/usuario/public_html

En el caso de que busquemos solo lectura (servir archivos y no nos funcione nuestro public_html):

	  chcon -t httpd_sys_content_t /home/usuario/public_html

Creamos nuestro vhost:

		sudo vim /etc/httpd/sites-available/barrahome.org.conf
		<VirtualHost *:80>
		    ServerName barrahome.org
		    ServerAlias barrahome.org www.barrahome.org
		    DocumentRoot /home/usuario/public_html
		    ErrorLog /home/usuario/logs/error.log
		    CustomLog /home/usuario/logs/custom.log combined
		</VirtualHost>
		sudo ln -s /etc/httpd/sites-available/barrahome.org.conf /etc/httpd/sites-enabled/barrahome.org.conf

Ahora permitiremos a Apache la escritura de logs en nuestro directorio personal:

		sudo semanage fcontext -a -t httpd_log_t "/home/usuario/logs(/.*)?"

Para finalizar aplicamos los cambios:

		sudo restorecon -R -v /home/usuario/public_html
		sudo restorecon -R -v /home/usuario/logs
