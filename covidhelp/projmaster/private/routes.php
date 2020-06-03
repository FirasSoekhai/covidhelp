<?php

SimpleRouter::get( '/', 'WebsiteController@home' )->name
( 'home' );
SimpleRouter::get( '/registreren', 'RegistrationController@registrationForm')->name('register.form');

SimpleRouter::get( 'not-found', function (){
    http_response_code(404);   

    return '404 Page not Found';
});
?>