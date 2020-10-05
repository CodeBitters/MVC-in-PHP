<?php
    Route::set('about-us',function(){
        AboutUs::createView();
    });
    Route::set('contact-us',function(){
        echo("contact us");
    });
?>