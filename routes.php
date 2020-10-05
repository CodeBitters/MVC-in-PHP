<?php
    Route::set('about-us',function(){
        AboutUs::createView("aboutUs");
    });
    Route::set('contact-us',function(){
        echo("contact us");
    });
?>