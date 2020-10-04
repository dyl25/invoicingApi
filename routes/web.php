<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {

    //get all cients
    $router->get('/clients', 'ClientController@index');

    //get precise client
    $router->get('/clients/{id}', 'ClientController@show');

    //get all invoices
    $router->get('/invoices', 'InvoiceController@index');

    //create new invoice with tasks
    $router->patch('/invoices/{invoiceId}/tasks', 'InvoiceController@store');

    //update a precise invoice
    $router->patch('/invoices/{invoiceId}/tasks', 'InvoiceController@update');
});
