# Introduction

This is a simple Slim Framework webapp that has been built using TDD. It
does nothing more complicated than say hello to different things.

## Setup

After cloning you will need to run:

    $ composer install

## Running

To run the server locally you can use the inbuilt PHP development server:

	$ php -S localhost:8888 -t public public/index.php

## Tests

In order to run the tests you can run:

	$ vendor/bin/phpunit

Tests are broken up into unit and integration tests. The integration tests
setup a skeleton version of the app and then run test queries against the
various endpoints.
