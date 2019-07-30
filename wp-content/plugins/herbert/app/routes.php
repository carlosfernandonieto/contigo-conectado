<?php namespace App;

/** @var \Herbert\Framework\Router $router */

$router->get([
    'as' => 'login_r',
    'uri' => '/login',
    'uses' => __NAMESPACE__.'\Controllers\Landings\LandingPagesController@viewHome',
]);

$router->get([
    'as' => 'redirect-result',
    'uri' => '/',
    'uses' => __NAMESPACE__.'\Controllers\Landings\LandingPagesController@viewResult',
]);

$router->get([
    'as' => 'test',
    'uri' => '/test',
    'uses' => __NAMESPACE__.'\Controllers\Forms\SubcriptionController@test',
]);

$router->get([
    'as' => 'get-read-later',
    'uri' => '/getListReadLater',
    'uses' => __NAMESPACE__.'\Controllers\ReadLater\ReadLaterController@getList',
]);

$router->get([
    'as' => 'set-read-later',
    'uri' => '/setArticleToListReadLater',
    'uses' => __NAMESPACE__.'\Controllers\ReadLater\ReadLaterController@addPost',
]);

$router->get([
    'as' => 'set-read-later',
    'uri' => '/deleteArticleToListReadLater',
    'uses' => __NAMESPACE__.'\Controllers\ReadLater\ReadLaterController@deletePostReadLater',
]);

$router->post([
    'as' => 'save-info-landing',
    'uri' => '/saveInfoLanding',
    'uses' => __NAMESPACE__.'\Controllers\Forms\LandingPageController@saveUser',
]);


$router->get([
    'as' => 'contigo-conectados',
    'uri' => '/eventos',
    'uses' => __NAMESPACE__.'\Controllers\Landings\LandingPagesController@viewContigoConectados',
]);

$router->get([
    'as' => 'contigo-conectados',
    'uri' => '/eventos_calendar',
    'uses' => __NAMESPACE__.'\Controllers\Landings\LandingPagesController@viewContigoConectadosCalendar',
]);

$router->get([
    'as' => 'contigo-conectados-streaming',
    'uri' => '/streaming',
    'uses' => __NAMESPACE__.'\Controllers\Landings\LandingPagesController@viewContigoConectadosStreaming',
]);

$router->get([
    'as' => 'send-email',
    'uri' => '/send-email',
    'uses' => __NAMESPACE__.'\Controllers\Emails\EmailsController@sendEmail',
]);
