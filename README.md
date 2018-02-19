# api-user-lumen
Api user with framework Lumen




***This application was run on debian jessie operating system***

### Requirements

Programs                | Version
:-----------------------|:----------
 Apache                 | 2.4.25
 PHP   	                | 7.0.27
 MariaDB                | 10.1.26
 Composer 				| 1.2.2
 Lumen                  | 5.5.2
 Git 					| 2.11.0


### Clone repository

```bash
git clone https://github.com/jesusrafael9/api-user-lumen.git

```


### Updating packages with composer: 

```bash
composer update

```

### Set up data base:
Into bash of mysql, create database,  

```bash
MariaDB [(none)]> CREATE DATABASE api_user_lumen;

```


### Configure lumen with database

Rename file .env.example to  .env 

Open the file .env and edit the parameters

```php
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=api_user_lumen
DB_USERNAME=user
DB_PASSWORD=password

``` 


### Install app:
Open the browser with the URL:

http://{domain.com}/public/install



### Main Interfaz:
http://{domain.com}/public/



### Test Case with phpunit: 

Open console, go to directory where is the app: 

Example: 

```bash
jesus@debian:/var/www/html/api-user-lumen$ ./vendor/bin/phpunit 

```


### APIs User: 

Get all Users:

Method: GET 

URL: http://{domain.com}/public/api/users

Example: http://localhost/api-user-lumen/public/api/users


Get User:

Method: GET

URL: http://{domain.com}/public/api/user/{id}

Example: http://localhost/api-user-lumen/public/api/user/3


Update User:

Method: POST

URL: http://{domain.com}/public/api/update/{update}

Example: http://localhost/api-user-lumen/public/api/update/1 


Delete User:

Method: DELETE

URL: http://{domain.com}/public/api/delete/{id} 

Example: http://localhost/api-user-lumen/public/api/delete/3


Create User:

Method: POST

URL: http://{domain.com}/public/api/store

Example: http://localhost/api-user-lumen/public/api/store



Using tool POSTMAN for test de app plugin of google-chrome:




