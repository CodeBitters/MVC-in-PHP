<?php
    Route::set('about-us',function(){
        AboutUs::checkLogin();
    });
    Route::set('contact-us',function(){
        ContactUs::openContact();
    });
    // structure of code need to write
    // Route::set('urlPassVale',function(){
    //     ControllerName::initialFunction();
    // });
    // check weather the given file exist on the site if not redirect to 404 page
    $available=FALSE;
    foreach (Route::$validRoutes as $pages) {
        if($_GET['url']==$pages){
            $available=TRUE;
            break;
        }
    }
    if(!$available){
        require_once('404.php');
    }
?>