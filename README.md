# Laravel Api Generator

*Person simple tools for building APIs template : console generator and API skeleton*

## Introduction

This package provides feature

1. Console generator which creates Controller, Fractal Transformer and routes in a single command.


## Installation

1) Run ```composer require huangwalker/api-model-generator```

2) Register a service provider in the `app.php` configuration file

```php
<?php

'providers' => [
    ...
    'Huangwalker\Api\ServiceProvider',
],
?>
```

3) Copy basic folder structure to app/Api ```cp -R vendor/huangwalker/api-model-generator/templates/Api app/Api``` and check what you got there.
If you need you can use different paths later.


## Usage

### Generator

The only console command that is added is ```artisan make:api <ModelName>```.

Imagine you need to create a rest api to list/create/update etc users from users table.
To achieve that you need to do lots of boilerplate operations - create controller, transformer, set up needed routes.

```php artisan make:api User``` does all the work for you.


### Configuration

All paths and generator's stubs are configurable.

https://github.com/Arrilot/api-model-generator/blob/master/src/config/config.php


