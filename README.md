# HolbyShop


HolbyShop is a responsive e-commerce web application.
This repository is simply a work to understand how to build e-commerce website, the challenges and major components you need to know about.
####  Technologies
#
#
  - [Twitter Bootstrap](https://getbootstrap.com/) - great UI open-source CSS framework for modern web-apps
  - [Jquery](https://jquery.com/) - Javascript library
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
| Contributers | Github Links | LinkedIn Links |
| ------------ | ------------ | -------------- |
| Yassine Chayrrou | [visit](https://github.com/YassineChayrrou) | [visitHere](http://www.postyourlinkhere.com/) |
| Khouloud Alkhammassi | [visit](https://github.com/ggirlk) | [visitHere](http://www.postyourlinkhere.com/) |
| Mohammed Yassine Aboub | [visit](https://github.com/yassineaboub) | [visitHere](http://www.postyourlinkhere.com/) |


## Related Projects

* python-holbyshop a python project clone of this project
* Improvements and other touches to UI and dashboard coming soon

## Licence 

