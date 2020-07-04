# Laravel Socialite Login

Small project developed in Laravel, with the purpose of controlling user access using their Facebook and / or Google accounts.

## Dependencies

 - NPM;
 - Composer;
 - MySQL Local;
 - PHP >= 7.2.5;
 - BCMath PHP Extension;
 - Ctype PHP Extension;
 - Fileinfo PHP extension;
 - JSON PHP Extension;
 - Mbstring PHP Extension;
 - OpenSSL PHP Extension;
 - PDO PHP Extension;
 - Tokenizer PHP Extension;
 - XML PHP Extension;
 
You need to access the Google and Facebook developer panel to create the keys to access the social login APIs. Copy the generated keys to use them in the project installation.
 
## Installation
 
Clone the project on your local machine, using the following command on the terminal:

```
$ git clone git@github.com:thiagomcw/laravel-socialite-login.git
```

Create a copy of the `.env.example` file for `.env`, filling it with your own application credentials, database and access keys to the Facebook and Google APIs.

At the terminal, run the composer to install the application's dependencies:

```
$ composer install
```

Later, run the command to create the database table structure:

```
$ php artisan migrate
```

Also run npm to install the front-end dependencies and compile the assets:

```
$ npm install && npm run dev
```

Now, just start the application and test it:

```
$ php artisan serve
```

Access: [http://localhost:8000](http://localhost:8000).
