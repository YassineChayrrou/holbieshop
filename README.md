# HolbyShop


HolbyShop is a responsive e-commerce web application.

####  Technologies
#
#
  - [Twitter Bootstrap] - great UI open-source CSS framework for modern web-apps
  - [Jquery] - Javascript library
  - [Laravel](https://laravel.com/docs/7.x) - php framework for backend
#
## Setup

#### Installation
##### Setting up a LAMP stack
#
either install [Xamp](https://www.apachefriends.org/index.html) if you don't have LAMP installed or simply do manual setup:
#
If you have xampp to run locally make sure you export `/opt/lampp/bin` directory to $PATH environment variable so that you can interact with them in command line
```sh
$ export PATH=$PATH:/opt/lampp/bin
```
#
Or do a manual install using the usual commands although follow this [tutorial](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-ubuntu-18-04) for better reference
#
```sh
$ sudo apt install apache2
$ sudo apt install php
$ sudo apt install mysql
```
normally all the dependencies should be installed but just in case:
```sh
$ sudo apt install libapache2-mod-php php-mysql
```

### Project Setup
* Install Composer 
* start your mysql server and apache server
* Clone the repo and cd to the laravel-holbyshop directory
* Create a database with holbyshop name, or use custom name but make sure to modify .env file according to your setup for username, password and DB name
* `php artisan migrate` to run migrations
* `php artisan serve`

## Contributors
Yassine Chayrrou - Author
[Khouloud Alkhammassi]
[Mohammed Yassine Aboub]
[contributers](https://github.com/YassineChayrrou/holbieshop/graphs/contributors)

## Licence 

