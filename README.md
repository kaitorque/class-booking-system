# Class-Booking-System

## Table of contents
* [General info](#general-info)
* [Team Member](#team-member)
* [Technologies](#technologies)
* [Setup](#setup)
* [Status](#status)

## General info
This is a system design for project course of ISP550

## Team member
* [Idham Idris](https://www.linkedin.com/in/kaitorque/)
* [Firdaus Jamdi](https://www.linkedin.com/in/firdaus-j-4677a6124/)
* [Ali Akbar](https://www.linkedin.com/in/mdaliakbar98/)
* [Qamarul 'Ashraf](https://www.linkedin.com/in/qamarul-ashraf-91b726193/)
* [Amirul Hafizin]

## Technology
Project is create with:

* PHP 7.3+
* Composer 1.10+

## Setup
How to setup locally(Windows)

- Download PHP 7.3 from 
```
https://windows.php.net/downloads/releases/php-7.3.20-nts-Win32-VC15-x64.zip
```
- Extract and place where you want the php directory to be there
- Then set a php path to system enviroment
- Check if php is working when run command in cmd below:
```
php --version
```
- Then go to php directory find file call php.ini-development, change it into php.ini
- Edit php.ini remove ; on
* curl
* fileinfo
* mbstring
* mysqli
* openssl
* pdo_sql
- Save the php.ini, then check back with command
```
php --version
``
- To make sure everythin is working
- Download Composer from
```
https://getcomposer.org/download/
```
- Install composer and check in using command
```
composer --version
```
- Now install laravel globally using command below
```
composer global require laravel/installer
```
- git clone this repository if not yet
- navigate to this repository through the cmd
- then do each of the command below
```
composer update
cp .env.example .env
php artisan key:generate
php artisan config:cache
```
- Now everything is ready, you can now serve the system through
```
php artisan serve
```

## Status
Currently project only on design phase. Database are not implement yet due to the project only for prototype for presentation.

## Inspiration
Thank you to [Clazzy.my](https://www.clazzy.my/) for the case study & thank you to the lecturer & friends also
