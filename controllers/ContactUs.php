<?php
    class ContactUs extends Controller{
        public function __construct(){
            parent::__construct();
        }
        public static function openContact(){
            self::createView("contactUs");
        }
    }
?>