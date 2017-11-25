<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use JonnyW\PhantomJs\Client as Client;

Route::get('/', function () {
  try {
    $client = Client::getInstance();
    $client->getEngine()->setPath('./../bin/phantomjs.exe');
    $client->getProcedureCompiler()->disableCache();

    $request = $client->getMessageFactory()->createRequest('http://localhost:3000', 'GET');
    $response = $client->getMessageFactory()->createResponse();

    $client->send($request, $response);
    $content = $response->getContent();
  }catch(Exception $ex){
    return $ex;
  }
  return "test";

});
