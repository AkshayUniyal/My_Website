# My_Website
A full end LEMP website

#######################################################################################################################

VPS - AWS
Public_Ip - 3.108.42.7
Github repo - https://github.com/AkshayUniyal/My_Website
Website Url - https://myprojec13.zapto.org/

#######################################################################################################################

## VPS Setup ## 

* Launched an EC2 instance with latest Ubuntu24 Ami using AWS aacount ( used .pem file for restricted ssh )
* Attached proper Security group configuration
* Setup Proper Firewall using ufw on the instance
* Created a new user - (project) with root privileges on this instance

## Domain Registration ##

* Created an DNS with Record type "A" using my.noip.com

## Installation ##

* Installed Nginx - 1.24 on this instance
* Installed MySql - 8.0 on this instance
* Installed PHP - 8.3 on this instance 

## Configuration Changes ##

* Made all necessary changes in /etc/nginx/sites-available/default -
      
      Root directory change for wordpress - (/var/www/demo)
      Add index.php in index parameter and try_files
      PHP scripts to FastCGI server

* Made Changes in /etc/php/8.3/fpm/php.ini -
      
      cgi.path.info = 0

## Mysql Setup ##

* Created a new database named - myproject13 on  mysql
* Created a new user project with strong password, the user has root privileges on this database

## Wordpress Installation ##

* Made necessary changes in /etc/nginx/sites-available/default -
* Made Changes in /var/www/demo/wp-config.php -
   
      Database related entry ( DB name, DB user, Db Password )
      FS_METHOD Entry and define ()

* Created Wordpress User and Password using my domain - myprojec13.zapto.org
* Created a block website with several plugins and themes provided by wordpress

## SSL Certificat ##

* Installed Certbot on my instance
* Generated SSL Certificate using - "certbot --nginx -d" command
* Added an 90 days auto renewal policy with email notification

## Optimizing and Securing Website ##

* Added security Headers in /etc/nginx/sites-available/default -
      
      X-Content-Type-Options
      X-Frame-Options 
      X-XSS-Protection

* Nginx Caching setup - Used FastCGI cache

* Enabled Gzip on Nginx

* Enabled Rate Limiting using Nginx

* Enabled ssl_prefer_server_ciphers

* Incrased Buffer size for large responses 

* Hardened file and directory permissions on instnace for more security

* Enable Access and Error logs for Nginx - Setup logrotate.d for proper gzip,rotation and storage of logs

## GITHUB Setup ##

* Created an public repository for my website

* Added ssh key on github to connect with this instance

* Setup git configuration in instance at - /var/www/demo directory

* Created custom ssh keys - public and private for more security 

* Public ssh key was added in the authorized_keys of the instance and public key was given to github secrets for ssh connection in CI/CD pipeline 

## CI/CD Pipeline using Github Actions ##

* Created an end to end CI/CD pipeline workflow using github actions

* Created a deploy.yml manifest to deploy the new code from the main branch on the remote instance, whenever there is a push on the main branch



