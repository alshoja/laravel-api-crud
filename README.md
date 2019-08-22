# Laravel CRUD- Api for Testing

Download this packge to test API CRUD for any Front End Frameworks

## Getting Started

Clone or Download the package

### Prerequisites

* PHP 5 or Higher
* Latest Composer 
* Laravel installed Machine


### Installing

Here is the Steps for deploying it to server or local
Fill your env as per your Database Config 
```
Git clone https://github.com/alshoja/laravelApiTest.git
```
```
composer install
```
```
cp .env.example .env
```
    
2.Update the Env

	DB_DATABASE=''
    DB_USERNAME=''
    DB_PASSWORD=''
    
3.Migrate and Seed the database

    php artisan migrate --seed


And then

```
php artisan passport:install
```



## Running the Api tests on routes on local

## Post 
http://localhost:8000/api/register
## Post
http://localhost:8000/api/login
## Get
http://localhost:8000/api/users
## Get
http://localhost:8000/api/user/id
## Put
http://localhost:8000/api/user/id
## Delete
http://localhost:8000/api/user/id

### Running the Api tests on routes on Live

## Post 
http://laravel.technalatus.com/public/api/register
## Post
http://laravel.technalatus.com/public/api/login
## Get
http://laravel.technalatus.com/public/api/users
## Get
http://laravel.technalatus.com/public/api/user/id
## Put
http://laravel.technalatus.com/public/api/user/id
## Delete
http://laravel.technalatus.com/public/api/user/id




## Deployment

Do not forget to Update the Env and generate Encryption key while Deploying

## Built With

* [Laravel](https://laravel.com/) - The web framework used
* [composer](https://getcomposer.org/) - Dependency Management
* [Passport Authentication](https://laravel.com/docs/5.8/passport) - Used to generate Token and Authentication


## Authors

* **Alshoja M Ikbal ** - *Initial work* - [Alshoja](https://github.com/topics/alshoja)


