
<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>  
  
<p align="center">  
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>  
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>  
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>  
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>  
</p>  
  
# Customer
 
## Customer API(Laravel)
 
Laravel was used to develop the application because it is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:  
  
- [Simple, fast routing engine](https://laravel.com/docs/routing).  
- [Powerful dependency injection container](https://laravel.com/docs/container).  
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.  
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).  
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).  
- [Robust background job processing](https://laravel.com/docs/queues).  
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).  
  
Laravel is accessible, powerful, and provides tools required for large, robust applications.  
  
##  Project Setup
 In order to setup the application locally on you system. 
   1. clone the repository 
   2. `git clone https://github.com/willypelz/customer-app.git`  
   3. cd into the project directory 
   4. `cd customer-app/test-backend`
   5. install the dependencies for the application
   6. `composer install`
   7. create a .env file from the .env.example 
   8. `cp .env.example .env`
   9. Generate an application key
   10. `php artisan key:generate`
   11. create a database called `test_app` in your database 
   12. update the env files with your mysql connection details that you have on your system 


    DB_CONNECTION=mysql  
    DB_HOST=YOUR_HOST  
    DB_PORT=MYSQL_PORT  
    DB_DATABASE=test_app  
    DB_USERNAME=MYSQL_USER_NAME  
    DB_PASSWORD=MYSQL_PASSWORD
    
13. Running migration data into the database 
14. `php artisan migrate`
15. Running customer import command
16. `php artisan command:import:customers`
17. serving the project 
18. `php artisan serve`

##  Testing the Application 
**Application Testing**  is defined as a software  **testing**  type, conducted through scripts with the motive of finding errors in software. It deals with  **tests**  for the entire  **application**. It helps to enhance the quality of your  **applications**  while reducing costs, maximizing ROI, and saving development time.

In order to run the feature test that was written 
	`php ./vendor/bin/phpunit`

### Important 
Ensure you setup xdebug on your system. <small> [Xdebug Setup for local machine (xampp)](https://medium.com/d6-digital/installing-xdebug-for-xampp-with-php-in-windows-d2b750861118) </small>

##  Testing the Application (user testing)


`http://localhost:8000/api/v1/customers`  
`http://localhost:8000/api/v1/customers?page={pageNumber}`  
`http://localhost:8000/api/v1/customers/{id}"`  


# Customer  FrontEnd.
An application that consumes an API Client to manage customers  

1.  State Management: Vuex
2.  Test-driven development(TDD): mocha(not fully completed)
3.  Request validation: Joi
4.  project dockerized (not fully completed);


# Getting started
System customers

## Installation

Clone the repository

    git clone https://github.com/willypelz/customer-app.git

Switch to the repo folder

    cd customer-app/www/test-frontend
    
Install dependencies
    
    npm install

Running the Application 
    
    npm run serve
----------

## Connection

For testing Ensure the backend is running on port 8081
 `http://localhost:8081` if it is running on different port you might need to 
 update the env.js details the port the backend is running on.
    
----------

## Screenshots of the project

this can be found in the static folder.
    
----------

# setup using docker

requirements
 ## docker 

`` docker-compose up --build ``


# Developer(Softwaredef)

1. Name: Asefon Michael Pelumi 
2. Nickname: Softwaredef
3. Mail: pelumiasefon@gmail.com

Thanks. If you have any problem setting it up or complain you can kindly post them on issues or message me directly
