# api-user-lumen
Api user with framework Lumen




***This application was run on debian stretch operating system***

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

![interfaz](https://user-images.githubusercontent.com/15696325/36364072-ab9fc0fc-1520-11e8-87d5-feed6cd88497.png)


### Test Case with phpunit: 

Open console, go to directory where is the app: 

Example: 

```bash
jesus@debian:/var/www/html/api-user-lumen$ ./vendor/bin/phpunit 

```


### APIs User: 
Using tool POSTMAN for test de app installed plugin of google-chrome:

***Get all Users:***

Method: GET 

URL: http://{domain.com}/public/api/users

Example: http://localhost/api-user-lumen/public/api/users

```php
GET /api-user-lumen/public/api/users?page=10 HTTP/1.1
Host: localhost
Content-Type: application/json
Cache-Control: no-cache
Postman-Token: 287e29e7-a26a-344a-2edf-7dd0e5125f90

``` 


***Get User:***

Method: GET

URL: http://{domain.com}/public/api/user/{id}

Example: http://localhost/api-user-lumen/public/api/user/3

```php
GET /api-user-lumen/public/api/user/3 HTTP/1.1
Host: localhost
Content-Type: application/json
Cache-Control: no-cache
Postman-Token: de44e21d-0ace-1c50-2d59-1a08831c0531

``` 


***Update User:***

Method: POST

URL: http://{domain.com}/public/api/update/{update}

Example: http://localhost/api-user-lumen/public/api/update/1 

```php
POST /api-user-lumen/public/api/update/1 HTTP/1.1
Host: localhost
Cache-Control: no-cache
Postman-Token: 87cb13dc-d2ad-79cc-2ed0-447906115424
Content-Type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW

------WebKitFormBoundary7MA4YWxkTrZu0gW
Content-Disposition: form-data; name="rs"

{
"id":"3", 
"name": "Jesus",
"email": "11heaney.raul@abshireq.com"
}
------WebKitFormBoundary7MA4YWxkTrZu0gW
Content-Disposition: form-data; name="image"; filename="default.png"
Content-Type: image/png


------WebKitFormBoundary7MA4YWxkTrZu0gW--

``` 


***Delete User:***

Method: DELETE

URL: http://{domain.com}/public/api/delete/{id} 

Example: http://localhost/api-user-lumen/public/api/delete/3

```php
DELETE /api-user-lumen/public/api/delete/3 HTTP/1.1
Host: localhost
Content-Type: application/json
Cache-Control: no-cache
Postman-Token: 2e7f0e62-2150-7455-23b0-c4054dfcfcfe

``` 

***Create User:***

Method: POST

URL: http://{domain.com}/public/api/store

Example: http://localhost/api-user-lumen/public/api/store

```php
POST /api-user-lumen/public/api/store HTTP/1.1
Host: localhost
Accept: application/json
Cache-Control: no-cache
Postman-Token: 3a68ee50-0da3-a6cc-da9f-38352f507b09
Content-Type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW

------WebKitFormBoundary7MA4YWxkTrZu0gW
Content-Disposition: form-data; name="rs"

{
        "name": "Mrs. Cleora Langosh I",
        "email": "11heaney.raul@abshireq.com"
 }
------WebKitFormBoundary7MA4YWxkTrZu0gW
Content-Disposition: form-data; name="image"; filename="default.png"
Content-Type: image/png


------WebKitFormBoundary7MA4YWxkTrZu0gW--

``` 

Screen Postman: 

![save user](https://user-images.githubusercontent.com/15696325/36364600-c59280d2-1523-11e8-9e96-97dfcf9c9f00.png)




