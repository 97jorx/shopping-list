<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Requirements

 - PHP 8.1.6 
 - MariaDB 10.4.24

## Install

```bash

~$ cd laravelApp
~$ composer install       
~$ npm install    
```
## Conf .env and run migrations

```bash
~$ cp .env.example .env         
~$ php artisan migrate          
```
## Run server

```bash
~$ php artisan serve 
```
## Live development

```bash
~$ npm run dev
```

## Production

```bash
~$ npm run prod 
```


## Development

- main config `config/app.php`,
- controllers: `app/Http/Controllers/`
- routes: `resources/routes/web.php`