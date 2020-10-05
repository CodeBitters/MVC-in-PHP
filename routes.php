<?php
    Route::set('about-us',function(){
        AboutUs::checkLogin();
    });
    Route::set('contact-us',function(){
        echo("contact us");
    });
?>