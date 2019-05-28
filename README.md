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


### And coding style tests

Explain what these tests test and why

```
Give an example
```

## Deployment

Add additional notes about how to deploy this on a live system

## Built With

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - The web framework used
* [Maven](https://maven.apache.org/) - Dependency Management
* [ROME](https://rometools.github.io/rome/) - Used to generate RSS Feeds

## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors

* **Billie Thompson** - *Initial work* - [PurpleBooth](https://github.com/PurpleBooth)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Hat tip to anyone whose code was used
* Inspiration
* etc
