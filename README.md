# Laravel Api Test

Download this packge to test API CRUD for any Front End Frameworks

## Getting Started

Clone or Dowload the package and serve using artisan command

### Prerequisites

```
php 5 or Higher
Composer 
Laravel installed

```

### Installing

Here is the Steps for deploying it to server or local
Fill your env as per your Database Config 
```
Git clone https://github.com/alshoja/laravelApiTest.git
composer install

```

And then

```
php artisan migrate
php artisan passport:install
```



## Running the Api tests on routes on local

## Post 
http://localhost:8000/api/register
## Post
http://localhost:8000/api/login
## Get
http://localhost:8000/api/users
## Put
http://localhost:8000/api/user/id
## Delete
http://localhost:8000/api/user/id

### Running the Api tests on routes on Live

## Post 
http://YOUR_Domain/api/public/register
## Post
http://YOUR_Domain/api/public/login
## Get
http://YOUR_Domain/api/public/users
## Put
http://YOUR_Domain/api/public/user/id
## Delete
http://YOUR_Domain/api/public/user/id




## Deployment

Do not forget to Update the Env and generate Encryption key while Deploying

## Built With

* [Laravel](https://laravel.com/) - The web framework used
* [composer](https://getcomposer.org/) - Dependency Management
* [Passport Authentication](https://laravel.com/docs/5.8/passport) - Used to generate Token and Authentication


## Authors

* **Alshoja M Ikbal ** - *Initial work* - [Alshoja](https://github.com/topics/alshoja)


