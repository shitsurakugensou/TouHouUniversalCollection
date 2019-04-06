<?php

/*
|--------------------------------------------------------------------------
| Common Area
|--------------------------------------------------------------------------
|
| 2019年4月5日 12:45:32 - Composer: 你想出C
| 2019年4月6日10:15:09 - 我: 你给我安装快点
|
|
*/


/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| First we need to get an application instance. This creates an instance
| of the application / container and bootstraps the application so it
| is ready to receive HTTP / Console requests from the environment.
|
*/

$app = require __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$app->run($app['request']);
