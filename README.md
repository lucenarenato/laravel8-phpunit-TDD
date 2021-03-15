# Laravel test - Usando PHPUnit com Laravel

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

`php artisan db:seed --class=UsersSeede`

`php artisan route:list`

## executar 

`vendor/bin/phpunit`



## Pasta tests do laravel

## Feature
Testar os recursos

## Unit
Fazer testes unitarios

## browser
para fazer testes funcionalidade, simulando uma pessoa navegando no seu projeto

> Ideal limitando o tamanho do metodo em 100 caracteres, separado por _

> no .env local é bom colocar a porta do serve. 
`APP_URL=http://localhost:8000`

php artisan config:cache

php artisan make:test CustomerTest

> usando anotetion = /** @test */

```php
    /**
     * UnitOfWork_StateUnderTest_ExpectedBehavior
     * ActionVerb_WoOrWhatToDo_ExpectedBehavior
     * check_if_user_column_is_correct
     * 
     */
```

php artisan make:controller CustomerController --resource

## testando somente uma classe de test

vendor/bin/phpunit --filter only_logged_in_users_can_see_customers_list

## unity

php artisan make:test UserTest --unit

vendor/bin/phpunit --filter check_if_user_column_is_correct

# laravel dusk - serve para fazer tests de browser
composer require --dev laravel/dusk
php artisan dusk:install
php artisan dusk:make RegisterUserTest
php artisan dusk --filter check_if_login_function_is_working
php artisan dusk --filter check_if_register_function_is_working

## Modo de uso | Running Tests
`php artisan test --filter check_if_user_column_is_correct`


- https://auth0.com/blog/testing-laravel-apis-with-phpunit/
`vendor/bin/phpunit --coverage-text`
`vendor/bin/phpunit --coverage-html tests/coverage`




Para tornar o comando para executar o PHPUnit relacionável, abra o arquivo composer.json e adicione o comando test à seção de scripts, conforme mostrado abaixo:

```json
{
    ...
    "scripts": {
        ...,
        "test": [
            "vendor/bin/phpunit"
        ]
    }
}
```

## Running Tests
`composer test`



## Install Laravel 8
```sh
   composer create-project laravel/laravel laravel-test
   cd laravel-test/
   ls
   code .
   composer require laravel/jetstream
   composer require laravel/ui
   composer require ui bootstrap --auth
   composer require laravel/jetstream
   php artisan config:cach
   php artisan migrate
   php artisan jetstream:install livewire
   npm install && npm run dev
   php artisan jetstream:install livewire/inertia
   php artisan jetstream:install inertia
   php artisan config:cach
   php artisan migrate
   npm install && npm run dev
   sudo npm install n -g
   sudo n stable
   npm install && npm run dev
```   

- https://laravel.com/docs/8.x/testing
- https://www.youtube.com/watch?v=f3tD-K796xo
- https://www.youtube.com/watch?v=IRrxbGjKW3s
- https://phpunit.de/
- https://phpunit.readthedocs.io/pt_BR/latest/
- https://www.twilio.com/blog/unit-testing-laravel-api-phpunit