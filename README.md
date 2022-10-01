# IOT Door Lock API

## Table of Contents
1. [Requirements](#requirements)
2. [Demo](#demo)
2. [Setup](#setup)
3. [Usage](#usage)
4. [License](#license)

## Requirements
- Laravel ^9.x - [Laravel 9](https://laravel.com/docs/9.x)
- PHP ^8.x - [PHP 8.x](https://www.php.net/releases/8.0/en.php)

## Demo
[Demo](https://iot-back-end.herokuapp.com/api/doors?api_token=kgbI2lLqKVQNUMNFkg9kE6DaMDQmX)

## Setup
1. Clone or download
```shell
git clone https://github.com/Zzzul/iot-door-lock-api
```

2. Install laravel dependency
```sh
composer install
```

3. Create copy of ```.env```
```sh
cp .env.example .env
```

4. Generate laravel key
```sh
php artisan key:generate
```

5. Set database name and account in ```.env```
```sh
DB_DATABASE=generator
DB_USERNAME=root
DB_PASSWORD=
```

6. Set API Token in ```.env```
```sh
API_TOKEN="XXXX"
```

7.  Run Laravel migration
```sh
php artisan migrate 
``` 

8. Start development server
```sh
php artisan serve
``` 

## Usage
Go to ```/api/doors```

## License
[MIT License](./LICENSE)
