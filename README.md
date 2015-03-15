# CodeIgniter Bootstrap SBadmin Theme #

This is mix of this great Jobs to start Fast Deploy to php Applications
CI Home -> http://www.codeigniter.com/
SbAdmin Home -> http://startbootstrap.com/template-overviews/sb-admin-2/

### People who wants to implement a Fast Admin -Web Interface ###

### How do I get set up? ###

Just checkout , and create your own files

To access other urls , 2 things  must be ok.
Rewrite Module if use apache2 and apache user must access .htaccess files , to all routes must pass per index.php on /



```
#!bash

root@developer:/etc/apache2# **a2enmod rewrite**
Enabling module rewrite.
To activate the new configuration, you need to run:
  service apache2 restart


```

and the conf on vhost file:
	<Directory />
		Options FollowSymLinks
		AllowOverride All
	</Directory>

OBS: This conf is to start access all files,
Hardening configurations must be done later.

### Contribution guidelines ###


### Who do I talk to? ###

* Mario Cezzare <mcezzare@gmail.com>