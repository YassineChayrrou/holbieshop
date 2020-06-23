# HolbyShop
![alt text](https://github.com/YassineChayrrou/holbyshop/blob/master/laravel_holbieshop/public/img/account-login.jpg)

HolbyShop is a responsive e-commerce web application.
This repository is simply a work to understand how to build e-commerce website, the challenges and major components you need to know about.
##  Technologies
#
  - [Twitter Bootstrap](https://getbootstrap.com/) - great UI open-source CSS framework for modern web-apps
  - [Jquery](https://jquery.com/) - Javascript library
  - [Laravel](https://laravel.com/docs/7.x) - php framework for backend
## Setup

### Installation
#### Setting up a LAMP stack


either install [Xamp](https://www.apachefriends.org/index.html) if you don't have LAMP installed or simply do manual setup:
#
If you have xampp to run locally make sure you export `/opt/lampp/bin` directory to $PATH environment variable so that you can interact with them in command line
```sh
$ export PATH=$PATH:/opt/lampp/bin
```

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

## Project notes

So you might now installed the project and wanted to serve it and checkout what it has...
In fact you need to know somethings, but first i need to say in this part i am going to speak about what is working and what is not hopefully everything will be fixed and updated with more features and of course there is a lot more to add after all.

Now in terms of what is working, well the front end is done just might needs a little more tweaking and styling maybe some more pages and links what so ever...
as for the backend well that is the challenge after all, so to be frank you ain't going to see all functionality except of payment and one product for testing with as i am still going to update many parts of backend code such as controllers and scripts.

For the backend right now you can go to the dashboard to see we got only the productshow function ready for displaying users from the mysql DB to front end dashboard, the payment api setup is working also.

In the upcoming term i am going to do some major stuff such as adding all users show and checkouts show to dashboard alongside with CRUD functionality of them directly from the dashboard also there is the fix of how products must show at the store as long as you add products you need to categorise them and show them in bulk, that is something i am still working on in addition to the cart as well, these must sound like a lot not working but i get to code and learn until i finish this work.

###### NOTE: :checkered_flag: :checkered_flag:

I will update  this Poject note section once in a while if there is some major change so you can know what is going on don't worry about that :grinning:
And for the last thing is that once i setup the project with php, i am going to do it using python, mostly flask and if i have time maybe a jango version of it also although that is a bit far in the futur.

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

